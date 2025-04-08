<?php

use Illuminate\Support\Facades\Http;

class ProductController
{
    public function index()
    {
        try {
            $categoryName = $_GET['category_name'] ?? null;

            // Gọi danh sách loại sản phẩm để hiển thị dropdown
            $categories = json_decode(file_get_contents("http://localhost:8080/web_bandienthoai_mysql_php/api/category/index"), true);

            // Gọi tất cả sản phẩm
            $products = json_decode(file_get_contents("http://localhost:8080/web_bandienthoai_mysql_php/api/product/index"), true);

            // Nếu có category_name, lọc lại theo tên
            if ($categoryName) {
                $products = array_filter($products, function ($product) use ($categoryName) {
                    return isset($product['category_name']) && $product['category_name'] === $categoryName;
                });
            }
            include __DIR__ . '/../views/product/product_index.php';
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    public function show()
    {
        if (!isset($_GET['id'])) {
            die("Thiếu ID sản phẩm");
        }

        $id = $_GET['id'];
        $url = "http://localhost:8080/web_bandienthoai_mysql_php/api/product/show/" . $id;
        $json = file_get_contents($url);
        $response = json_decode($json, true);
        
        

        include __DIR__ . '/../views/product/productdetails.php';
    }
}
