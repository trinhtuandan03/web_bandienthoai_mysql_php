<?php
require_once __DIR__ . '/../../middleware/checkRole.php';

class AccountAdminController
{
    public function __construct()
    {
        // Kiểm tra vai trò admin
        checkRole('admin');
    }

    public function userManage()
    {
        try {
            // URL API để lấy danh sách tài khoản
            $apiUrl = 'http://localhost:8080/web_bandienthoai_mysql_php/api/account/index';

            // Tạo cURL request
            $ch = curl_init($apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $_SESSION['token'], // Thay $_SESSION['token'] bằng token của bạn
                'Content-Type: application/json'
            ]);
            // Gửi yêu cầu và nhận phản hồi
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($httpCode !== 200) {
                throw new Exception('Không thể lấy dữ liệu từ API. HTTP Code: ' . $httpCode);
            }
            // Giải mã JSON
            $users = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }
            curl_close($ch);
        } catch (Exception $e) {
            $users = [];
            $error = $e->getMessage();
        }

        // Bao gồm file view
        include __DIR__ . '/../../views/admin/UserManage/userManage.php';
    }

    public function showUser()
    {
        if (!isset($_GET['id'])) {
            die("Thiếu ID người dùng");
        }

        $id = $_GET['id'];
        $apiUrl = "http://localhost:8080/web_bandienthoai_mysql_php/api/account/show/" . $id;

        try {
            // Khởi tạo cURL
            $ch = curl_init($apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $_SESSION['token'], // Thay $_SESSION['token'] bằng token của bạn
                'Content-Type: application/json'
            ]);

            // Gửi yêu cầu và nhận phản hồi
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            // Kiểm tra lỗi HTTP
            if ($httpCode !== 200) {
                throw new Exception('Không thể lấy dữ liệu từ API. HTTP Code: ' . $httpCode);
            }

            // Giải mã JSON
            $user = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }

            // Kiểm tra dữ liệu người dùng
            if (empty($user) || !isset($user['id'])) {
                throw new Exception("Không tìm thấy người dùng hoặc dữ liệu không hợp lệ.");
            }

            curl_close($ch);

            // Bao gồm file view
            include __DIR__ . '/../../views/admin/UserManage/userDetails.php';
        } catch (Exception $e) {
            if (isset($ch)) {
                curl_close($ch);
            }
            die("Lỗi: " . $e->getMessage());
        }
    }
}
