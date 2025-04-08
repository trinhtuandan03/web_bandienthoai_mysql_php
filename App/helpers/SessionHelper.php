<?php
class SessionHelper
{
    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    public static function isLoggedIn()
    {
        return isset($_SESSION['token']);
    }

    // Kiểm tra xem người dùng có phải là admin hay không
    public static function isAdmin()
    {
        return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
    }

    // Lấy thông tin người dùng từ session
    public static function getUser()
    {
        return $_SESSION['user'] ?? null;
    }

    // Lấy vai trò của người dùng từ session
    public static function getRole()
    {
        return $_SESSION['role'] ?? null;
    }

    // Xóa toàn bộ session
    public static function clearSession()
    {
        session_start();
        session_unset();
        session_destroy();
    }
}