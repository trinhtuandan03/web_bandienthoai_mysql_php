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
    public function show()
    {
        if (!isset($_GET['id'])) {
            die("Thiếu ID sản phẩm");
        }

        $id = $_GET['id'];
        $apiUrl = "http://localhost:8080/web_bandienthoai_mysql_php/api/product/show/" . $id;

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
            $product = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }

            // Kiểm tra dữ liệu sản phẩm
            if (empty($product) || !isset($product['name'])) {
                throw new Exception("Không tìm thấy sản phẩm hoặc dữ liệu không hợp lệ.");
            }

            curl_close($ch);

            // Bao gồm file view
            include __DIR__ . '/../../views/admin/SanPhamManage/Details.php';
        } catch (Exception $e) {
            if (isset($ch)) {
                curl_close($ch);
            }
            die("Lỗi: " . $e->getMessage());
        }
    }
    
    // Lưu sản phẩm mới
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die("Phương thức không hợp lệ");
        }

        $apiUrl = "http://localhost:8080/web_bandienthoai_mysql_php/api/product/store";

        try {
            // Kiểm tra token
            if (!isset($_SESSION['token'])) {
                throw new Exception('Không tìm thấy token xác thực');
            }
            $bearerToken = $_SESSION['token'];

            // Lấy dữ liệu từ form
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'category_id' => $_POST['category'],
                'image1' => $_POST['URLImage'],
                'image2' => $_POST['URLImage2'] ?? null,
                'image3' => $_POST['URLImage3'] ?? null,
            ];

            // Khởi tạo cURL
            $ch = curl_init($apiUrl);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $bearerToken,
                'Content-Type: application/json'
            ]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

            // Gửi yêu cầu và nhận phản hồi
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            // Kiểm tra lỗi HTTP
            if ($httpCode !== 201) {
                throw new Exception('Không thể thêm sản phẩm. HTTP Code: ' . $httpCode . '. Phản hồi: ' . $response);
            }

            // Giải mã JSON
            $result = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }

            curl_close($ch);

            // Chuyển hướng về trang danh sách sản phẩm
            header('Location: /web_bandienthoai_mysql_php/admin/productAdmin/index');
            exit();
        } catch (Exception $e) {
            if (isset($ch)) {
                curl_close($ch);
            }
            $error = $e->getMessage();
            include __DIR__ . '/../../views/admin/SanPhamManage/Create.php';
        }
    }

    // Cập nhật sản phẩm
    public function edit($id)
    {
        include __DIR__ . '/../../views/admin/SanPhamManage/Edit.php';
    }

    // Xóa sản phẩm
    public function destroy()
    {
        if (!isset($_GET['id'])) {
            die("Thiếu ID sản phẩm");
        }

        $id = $_GET['id'];
        $apiUrl = "http://localhost:8080/web_bandienthoai_mysql_php/api/product/destroy/" . $id;

        try {
            // Kiểm tra token
            if (!isset($_SESSION['token'])) {
                throw new Exception('Không tìm thấy token xác thực');
            }
            $bearerToken = $_SESSION['token'];

            // Khởi tạo cURL
            $ch = curl_init($apiUrl);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $bearerToken,
                'Content-Type: application/json'
            ]);

            // Gửi yêu cầu và nhận phản hồi
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            // Kiểm tra lỗi HTTP
            if ($httpCode !== 200) {
                throw new Exception('Không thể xóa sản phẩm. HTTP Code: ' . $httpCode);
            }

            // Giải mã JSON
            $result = json_decode($response, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }

            curl_close($ch);

            // Chuyển hướng về trang danh sách sản phẩm
            header('Location: /web_bandienthoai_mysql_php/admin/productAdmin/index');
            exit();
        } catch (Exception $e) {
            if (isset($ch)) {
                curl_close($ch);
            }
            die("Lỗi: " . $e->getMessage());
        }
    }

    public function create()
    {
        try {
            // Lấy danh sách danh mục sản phẩm từ API
            $apiUrl = "http://localhost:8080/web_bandienthoai_mysql_php/api/category/index";

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

            $categories = json_decode($json, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Phản hồi JSON không hợp lệ');
            }
        } catch (Exception $e) {
            $categories = [];
            $error = $e->getMessage();
        }

        include __DIR__ . '/../../views/admin/SanPhamManage/Create.php';
    }
}
