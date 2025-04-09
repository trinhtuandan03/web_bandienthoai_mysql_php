<?php
class AccountController
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $fullName = $_POST['fullname'] ?? '';
            $password = $_POST['password'] ?? '';
            $confirmPassword = $_POST['confirmpassword'] ?? '';
            $role = 'user'; // Vai trò mặc định là user
            $errors = [];

            // Kiểm tra dữ liệu đầu vào
            if (empty($username)) {
                $errors['username'] = "Vui lòng nhập tên đăng nhập!";
            }
            if (empty($fullName)) {
                $errors['fullname'] = "Vui lòng nhập họ và tên!";
            }
            if (empty($password)) {
                $errors['password'] = "Vui lòng nhập mật khẩu!";
            }
            if ($password !== $confirmPassword) {
                $errors['confirmpassword'] = "Mật khẩu và xác nhận mật khẩu không khớp!";
            }

            if (count($errors) > 0) {
                include_once 'app/views/account/register.php';
                return;
            }

            // Gửi yêu cầu API để đăng ký
            $apiUrl = 'http://localhost:8080/web_bandienthoai_mysql_php/api/account/register';
            $data = [
                'username' => $username,
                'fullname' => $fullName,
                'password' => $password,
                'role' => $role, // Gửi vai trò mặc định là user
            ];
            $options = [
                'http' => [
                    'header' => "Content-Type: application/json\r\n",
                    'method' => 'POST',
                    'content' => json_encode($data),
                ],
            ];
            $context = stream_context_create($options);
            $response = file_get_contents($apiUrl, false, $context);

            if ($response === false) {
                $errors['api'] = "Không thể kết nối đến API!";
                include_once 'app/views/account/register.php';
                return;
            }

            $result = json_decode($response, true);
            if (isset($result['message']) && $result['message'] === "Đăng ký thành công") {
                header('Location: /web_bandienthoai_mysql_php/account/login');
                exit;
            } else {
                $errors['api'] = $result['message'] ?? "Đăng ký thất bại!";
                include_once 'app/views/account/register.php';
            }
        } else {
            include_once 'app/views/account/register.php';
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $errors = [];

            // Kiểm tra dữ liệu đầu vào
            if (empty($username)) {
                $errors['username'] = "Vui lòng nhập tên đăng nhập!";
            }
            if (empty($password)) {
                $errors['password'] = "Vui lòng nhập mật khẩu!";
            }

            if (count($errors) > 0) {
                include_once 'app/views/account/login.php';
                return;
            }

            // Gửi yêu cầu API để đăng nhập
            $apiUrl = 'http://localhost:8080/web_bandienthoai_mysql_php/api/account/login';
            $data = [
                'username' => $username,
                'password' => $password,
            ];
            $options = [
                'http' => [
                    'header' => "Content-Type: application/json\r\n",
                    'method' => 'POST',
                    'content' => json_encode($data),
                    'ignore_errors' => true, // Bỏ qua lỗi HTTP để xử lý phản hồi
                ],
            ];
            $context = stream_context_create($options);

            try {
                $response = file_get_contents($apiUrl, false, $context);

                // Lấy mã phản hồi HTTP
                $http_response_header_code = null;
                if (isset($http_response_header) && preg_match('/HTTP\/\d\.\d\s+(\d+)/', $http_response_header[0], $matches)) {
                    $http_response_header_code = (int) $matches[1];
                }

                if ($http_response_header_code === 401) {
                    $errors['api'] = "Tên đăng nhập hoặc mật khẩu không đúng!";
                } elseif ($response === false) {
                    throw new Exception("Không thể kết nối đến API!");
                } else {
                    $result = json_decode($response, true);

                    if (isset($result['token']) && isset($result['user'])) {
                        session_start();

                        // Lưu token vào cookie nếu cần thiết
                        $_SESSION['token'] = $result['token'];
                        // Lưu vai trò vào session
                        $_SESSION['role'] = $result['user']['role'];
                        // Lưu thông tin người dùng vào session
                        $_SESSION['user'] = [
                            'username' => $result['user']['name'], // Đảm bảo ánh xạ đúng key từ API
                            'fullname' => $result['user']['fullname'],
                            'role' => $result['user']['role']
                        ];

                        // Điều hướng dựa trên vai trò
                        if ($_SESSION['role'] === 'admin') {
                            header('Location: /web_bandienthoai_mysql_php/admin/AccountAdmin/userManage');
                        } else {
                            header('Location: /web_bandienthoai_mysql_php/home');
                        }
                        exit;
                    } else {
                        $errors['api'] = $result['message'] ?? "Đăng nhập thất bại!";
                    }
                }
            } catch (Exception $e) {
                $errors['api'] = $e->getMessage();
            }

            include_once 'app/views/account/login.php';
        } else {
            include_once 'app/views/account/login.php';
        }
    }

    public function account_information()
    {

        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!isset($_SESSION['user'])) {
            header('Location: /web_bandienthoai_mysql_php/account/login');
            exit;
        }

        // Lấy thông tin người dùng từ session
        $user = $_SESSION['user'];

        // Truyền thông tin người dùng đến view
        include_once 'app/views/account/account_information.php';
    }

    public function logout()
    {
        session_destroy();
        header('Location: /web_bandienthoai_mysql_php/account/login');
        exit;
    }
}