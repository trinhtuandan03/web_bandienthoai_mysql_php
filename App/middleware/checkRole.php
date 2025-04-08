<?php

function checkRole($requiredRole)
{
    // Kiểm tra xem người dùng đã đăng nhập chưa
    if (!isset($_SESSION['token']) || !isset($_SESSION['role'])) {
        header('Location: /web_bandienthoai_mysql_php/account/login');
        exit;
    }

    // Lấy vai trò từ session
    $userRole = $_SESSION['role'];

    // Kiểm tra vai trò
    if ($userRole !== $requiredRole) {
        if ($userRole === 'user') {
            header('Location: /web_bandienthoai_mysql_php/home');
        } else {
            header('Location: /web_bandienthoai_mysql_php/unauthorized');
        }
        exit;
    }
}