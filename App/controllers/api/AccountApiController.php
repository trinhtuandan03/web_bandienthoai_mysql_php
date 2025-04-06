<?php
require_once('app/config/database.php');
require_once('app/models/AccountModel.php');
require_once('app/utils/JWTHandler.php');
class AccountApiController
{
    private $accountModel;
    private $db;
    private $jwtHandler;
    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->accountModel = new AccountModel($this->db);
        $this->jwtHandler = new JWTHandler();
    }

    private function authenticate()
    {
        $headers = apache_request_headers();
        if (isset($headers['Authorization'])) {
            $authHeader = $headers['Authorization'];
            $arr = explode(" ", $authHeader);
            $jwt = $arr[1] ?? null;
            if ($jwt) {
                $decoded = $this->jwtHandler->decode($jwt);
                return $decoded ? true : false;
            }
        }
        return false;
    }

    public function register()
    {
        header('Content-Type: application/json');
        $data = json_decode(file_get_contents("php://input"), true);

        $username = $data['username'] ?? '';
        $fullname = $data['fullname'] ?? '';
        $password = $data['password'] ?? '';
        $role = $data['role'] ?? 'user';

        $errors = [];

        // Validate input
        if (empty($username)) {
            $errors['username'] = "Vui lòng nhập username!";
        }
        if (empty($fullname)) {
            $errors['fullname'] = "Vui lòng nhập fullname!";
        }
        if (empty($password)) {
            $errors['password'] = "Vui lòng nhập password!";
        }

        // Check if username already exists
        $existingAccount = $this->accountModel->getAccountByUsername($username);
        if ($existingAccount) {
            $errors['username'] = "Tài khoản này đã được đăng ký!";
        }

        if (!empty($errors)) {
            http_response_code(400);
            echo json_encode([
                "message" => "Đăng ký thất bại",
                "errors" => $errors
            ]);
            return;
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

        // Save the account
        $result = $this->accountModel->save($username, $fullname, $hashedPassword, $role);

        if ($result) {
            http_response_code(201);
            echo json_encode([
                "message" => "Đăng ký thành công",
                "user" => [
                    "username" => $username,
                    "fullname" => $fullname,
                    "role" => $role
                ]
            ]);
        } else {
            http_response_code(500);
            echo json_encode([
                "message" => "Đã xảy ra lỗi khi đăng ký tài khoản"
            ]);
        }
    }
    public function login()
    {
        header('Content-Type: application/json');
        $data = json_decode(file_get_contents("php://input"), true);

        $username = $data['username'] ?? ''; // Lấy trường 'username' từ body JSON
        $password = $data['password'] ?? '';

        // Kiểm tra username và password
        $user = $this->accountModel->getAccountByUsername($username);
        if ($user && password_verify($password, $user->password)) {
            // Tạo token JWT
            $token = $this->jwtHandler->encode([
                'id' => $user->id,
                'username' => $user->username
            ]);

            // Trả về phản hồi JSON
            echo json_encode([
                "message" => "✅ Đăng nhập thành công",
                "user" => [
                    "_id" => $user->id,
                    "name" => $user->username,
                    "fullname" => $user->fullname,
                    "role" => $user->role
                ],
                "token" => $token
            ]);
        } else {
            // Trả về lỗi nếu thông tin không hợp lệ
            http_response_code(401);
            echo json_encode(["message" => "❌ Tên đăng nhập hoặc mật khẩu không đúng"]);
        }
    }

    function save()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'] ?? '';
            $fullName = $_POST['fullname'] ?? '';
            $password = $_POST['password'] ?? '';
            $confirmPassword = $_POST['confirmpassword'] ?? '';
            $errors = [];
            if (empty($username)) {
                $errors['username'] = "Vui long nhap userName!";
            }
            if (empty($fullName)) {
                $errors['fullname'] = "Vui long nhap fullName!";
            }
            if (empty($password)) {
                $errors['password'] = "Vui long nhap password!";
            }
            if ($password != $confirmPassword) {
                $errors['confirmPass'] = "Mat khau va xac nhan chua dung";
            }
            //kiểm tra username đã được đăng ký chưa?
            $account = $this->accountModel->getAccountByUsername($username);
            if ($account) {
                $errors['account'] = "Tai khoan nay da co nguoi dang ky!";
            }
            if (count($errors) > 0) {
                include_once 'app/views/account/register.php';
            } else {
                $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
                $result = $this->accountModel->save($username, $fullName, $password);
                if ($result) {
                    header('Location: /web_bandienthoai_mysql_php/account/login');
                }
            }
        }
    }
    function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['role']);
        header('Location: /web_bandienthoai_mysql_php/product');
    }
    public function checkLogin()
    {
        header('Content-Type: application/json');
        $data = json_decode(file_get_contents("php://input"), true);
        $username = $data['username'] ?? '';
        $password = $data['password'] ?? '';
        $user = $this->accountModel->getAccountByUserName($username);
        if ($user && password_verify($password, $user->password)) {
            $token = $this->jwtHandler->encode([
                'id' => $user->id,
                'username' =>
                    $user->username
            ]);
            echo json_encode(['token' => $token]);
        } else {
            http_response_code(401);
            echo json_encode(['message' => 'Invalid credentials']);
        }
    }


    //-------------------------------------------------------------------------------------
    // Lấy danh sách Người Dùng
    public function index()
    {
        if ($this->authenticate()) {
            header('Content-Type: application/json');
            $users = $this->accountModel->getAccounts();
            echo json_encode($users);
        } else {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized']);
        }
    }


    // Lấy thông tin Người Dùng theo ID
    public function show($id)
    {
        if ($this->authenticate()) {
            header('Content-Type: application/json');
            $user = $this->accountModel->getAccountById($id);
            if ($user) {
                echo json_encode($user);
            } else {
                http_response_code(404);
                echo json_encode(['message' => 'User not found']);
            }
        } else {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized']);
        }
    }

    // Cập nhật Người Dùng theo ID
    public function update($id)
    {
        if ($this->authenticate()) {
            header('Content-Type: application/json');
            $data = json_decode(file_get_contents("php://input"), true);

            $fullname = $data['fullname'] ?? '';
            $password = $data['password'] ?? '';
            $role = $data['role'] ?? 'user';

            if (empty($fullname)) {
                http_response_code(400);
                echo json_encode(['message' => 'Fullname is required']);
                return;
            }

            $hashedPassword = !empty($password) ? password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]) : null;

            $result = $this->accountModel->updateAccount($id, $fullname, $hashedPassword, $role);

            if ($result) {
                echo json_encode(['message' => 'User updated successfully']);
            } else {
                http_response_code(400);
                echo json_encode(['message' => 'User update failed']);
            }
        } else {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized']);
        }
    }

    // Xóa Người Dùng theo ID
    public function destroy($id)
    {
        if ($this->authenticate()) {
            header('Content-Type: application/json');
            $result = $this->accountModel->deleteAccount($id);
            if ($result) {
                echo json_encode(['message' => 'User deleted successfully']);
            } else {
                http_response_code(400);
                echo json_encode(['message' => 'User deletion failed']);
            }
        } else {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized']);
        }
    }
}