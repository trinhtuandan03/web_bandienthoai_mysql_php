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

            // Gửi yêu cầu đến API
            $json = file_get_contents($apiUrl);
            if ($json === false) {
                throw new Exception('Không thể lấy dữ liệu từ API');
            }

            // Giải mã JSON
            $accounts = json_decode($json, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }
        } catch (Exception $e) {
            $accounts = [];
            $error = $e->getMessage();
        }

        // Bao gồm file view
        include __DIR__ . '/../../views/admin/UserManage/userManage.php';
    }
}