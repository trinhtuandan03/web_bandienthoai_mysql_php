<?php

use Illuminate\Support\Facades\Http;

class HomeController
{
    public function index()
    {
        $apiUrl = 'http://localhost:8080/web_bandienthoai_mysql_php/api/product/index';

        $json = file_get_contents($apiUrl);
        $products = json_decode($json, true);

        include __DIR__ . '/../views/home.php';
    }
}

