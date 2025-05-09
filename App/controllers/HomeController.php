<?php

use Illuminate\Support\Facades\Http;

class HomeController
{
    public function index()
    {
        try {
            // URL API đang gọi đến endpoint /api/product/index
            $apiUrl = 'http://localhost:8080/web_bandienthoai_mysql_php/api/product/index';
            // Lấy dữ liệu từ API
            $json = file_get_contents($apiUrl);
            if ($json === false) {
                throw new Exception('Cannot fetch data from API');
            }
            $products = json_decode($json, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Invalid JSON response');
            }
        } catch (Exception $e) {
            $products = [];
            // Log error hoặc xử lý lỗi
        }
        // Hiển thị view với dữ liệu products
        include __DIR__ . '/../views/home.php';
    }
}

