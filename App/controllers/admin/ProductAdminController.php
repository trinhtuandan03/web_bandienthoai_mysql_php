<?php
require_once __DIR__ . '/../../middleware/checkRole.php';

class ProductAdminController
{
    public function __construct()
    {
        // Kiểm tra vai trò admin
        checkRole('admin');
    }

    // Hiển thị danh sách sản phẩm
    public function index()
    {
        try {
            $apiUrl = 'http://localhost:8080/web_bandienthoai_mysql_php/api/product/index';

            if (!isset($_SESSION['token'])) {
                throw new Exception('Không tìm thấy token xác thực');
            }
            $bearerToken = $_SESSION['token'];

            $options = [
                'http' => [
                    'header' => "Authorization: Bearer $bearerToken"
                ]
            ];
            $context = stream_context_create($options);

            $json = file_get_contents($apiUrl, false, $context);
            if ($json === false) {
                throw new Exception('Không thể lấy dữ liệu từ API');
            }

            $products = json_decode($json, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }
        } catch (Exception $e) {
            $products = [];
            $error = $e->getMessage();
        }

        include __DIR__ . '/../../views/admin/SanPhamManage/Index.php';
    }

    // Hiển thị chi tiết sản phẩm
    public function show($id)
    {
        try {
            $apiUrl = "http://localhost:8080/web_bandienthoai_mysql_php/api/product/show/$id";

            if (!isset($_SESSION['token'])) {
                throw new Exception('Không tìm thấy token xác thực');
            }
            $bearerToken = $_SESSION['token'];

            $options = [
                'http' => [
                    'header' => "Authorization: Bearer $bearerToken"
                ]
            ];
            $context = stream_context_create($options);

            $json = file_get_contents($apiUrl, false, $context);
            if ($json === false) {
                throw new Exception('Không thể lấy dữ liệu từ API');
            }

            $product = json_decode($json, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }
        } catch (Exception $e) {
            $product = null;
            $error = $e->getMessage();
        }

        include __DIR__ . '/../../views/admin/SanPhamManage/Details.php';
    }

    // Tạo sản phẩm mới
    public function create()
    {
        include __DIR__ . '/../../views/admin/SanPhamManage/Create.php';
    }

    // Cập nhật sản phẩm
    public function edit($id)
    {
        include __DIR__ . '/../../views/admin/SanPhamManage/Edit.php';
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        try {
            $apiUrl = "http://localhost:8080/web_bandienthoai_mysql_php/api/product/destroy/$id";

            if (!isset($_SESSION['token'])) {
                throw new Exception('Không tìm thấy token xác thực');
            }
            $bearerToken = $_SESSION['token'];

            $options = [
                'http' => [
                    'method' => 'DELETE',
                    'header' => "Authorization: Bearer $bearerToken"
                ]
            ];
            $context = stream_context_create($options);

            $response = file_get_contents($apiUrl, false, $context);
            if ($response === false) {
                throw new Exception('Không thể xóa sản phẩm');
            }

            $result = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }

            // Xử lý kết quả trả về nếu cần
        } catch (Exception $e) {
            $error = $e->getMessage();
        }

        // Chuyển hướng về trang danh sách sản phẩm
        header('Location: /web_bandienthoai_mysql_php/app/views/admin/SanPhamManage/Index.php');
        exit();
    }
}