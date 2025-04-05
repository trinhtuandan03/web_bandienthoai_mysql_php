<?php
session_start();
require_once 'app/models/ProductModel.php';
require_once 'app/helpers/SessionHelper.php';

require_once 'app/controllers/api/ProductApiController.php';
require_once 'app/controllers/api/CategoryApiController.php';
require_once 'app/controllers/api/AccountApiController.php';
// Start session
$url = $_GET['url'] ?? '';
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);
// Kiểm tra phần đầu tiên của URL để xác định controller
$controllerName = isset($url[0]) && $url[0] != '' ? ucfirst($url[0]) . 'Controller' :
    'DefaultController';
// Kiểm tra phần thứ hai của URL để xác định action
$action = isset($url[1]) && $url[1] != '' ? $url[1] : 'index';
// Định tuyến các yêu cầu API
if ($controllerName === 'ApiController' && isset($url[1])) {
    $apiControllerName = ucfirst($url[1]) . 'ApiController';
    if (file_exists('app/controllers/api/' . $apiControllerName . '.php')) {
        require_once 'app/controllers/api/' . $apiControllerName . '.php';
        $controller = new $apiControllerName();
        $action = $url[2] ?? 'index'; // Lấy action từ URL
        if (method_exists($controller, $action)) {
            call_user_func_array([$controller, $action], array_slice($url, 3));
        } else {
            http_response_code(404);
            echo json_encode(['message' => 'Action not found']);
        }
        exit;
    } else {
        http_response_code(404);
        echo json_encode(['message' => 'Khong tim thay controllers API ']);
        exit;
    }
}
// Tạo đối tượng controller tương ứng cho các yêu cầu không phải API
if (file_exists('app/controllers/' . $controllerName . '.php')) {
    require_once 'app/controllers/' . $controllerName . '.php';
    $controller = new $controllerName();
} else {
    die('Controller not found');
}
// Kiểm tra và gọi action
if (method_exists($controller, $action)) {
    call_user_func_array([$controller, $action], array_slice($url, 2));
} else {
    die('Action not found');
}
?>