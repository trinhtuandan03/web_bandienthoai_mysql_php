<?php

use Illuminate\Support\Facades\Http;

class Blogcontroller
{
    public function index()
    {
        try {
            // URL API đang gọi đến endpoint /api/blog/index
            $apiUrl = 'http://localhost:8080/web_bandienthoai_mysql_php/api/blog/index';
            // Lấy dữ liệu từ API
            $json = file_get_contents($apiUrl);
            if ($json === false) {
                throw new Exception('Cannot fetch data from API');
            }


            $blog = json_decode($json, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Invalid JSON response');
            }
        } catch (Exception $e) {


            $blog = [];

            // Log error hoặc xử lý lỗi
        }
        // Hiển thị view với dữ liệu products
        include __DIR__ . '/../views/blog/blog_index.php';
    }

    public function show()
    {
        if (!isset($_GET['id'])) {
            die("Thiếu ID bài viết");
        }

        $id = $_GET['id'];
        $url = "http://localhost:8080/web_bandienthoai_mysql_php/api/blog/show/" . $id;

        try {
            $json = file_get_contents($url);
            if ($json === false) {
                throw new Exception('Không thể lấy dữ liệu từ API');
            }

            $response = json_decode($json, true);
            if (empty($response) || !isset($response['id'])) {
                throw new Exception('Không tìm thấy bài viết hoặc dữ liệu không hợp lệ.');
            }

            $blog = $response; // Gán dữ liệu vào biến $blog
        } catch (Exception $e) {
            die("Lỗi: " . $e->getMessage());
        }

        // Hiển thị view chi tiết bài viết
        include __DIR__ . '/../views/blog/blogdetails.php';
    }
}
