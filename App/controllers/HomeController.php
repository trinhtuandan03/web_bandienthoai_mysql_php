<?php
class HomeController
{
    public function index()
    {
        // Đường dẫn đến file view
        require_once __DIR__ . "/../views/index.php";
    }
}