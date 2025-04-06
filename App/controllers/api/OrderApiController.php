<?php
require_once('app/models/OrderModel.php');
require_once('app/config/database.php');
require_once('app/utils/JWTHandler.php');
class OrderApiController
{
    private $orderModel;
    private $jwtHandler;

    public function __construct()
    {
        $db = (new Database())->getConnection();
        $this->orderModel = new OrderModel($db);
        $this->jwtHandler = new JWTHandler();
    }

    // Phương thức xác thực
    private function authenticate()
    {
        $headers = apache_request_headers();
        if (isset($headers['Authorization'])) {
            $authHeader = $headers['Authorization'];
            $arr = explode(" ", $authHeader);
            $jwt = $arr[1] ?? null;
            if ($jwt) {
                $decoded = $this->jwtHandler->decode($jwt);
                return $decoded ? true : false;
            }
        }
        return false;
    }

    //-----------------------------------------------

    // API: Tạo đơn hàng
    public function createOrder()
    {
        header('Content-Type: application/json');
        if (!$this->authenticate()) {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized (Không được phép)']);
            return;
        }
        //----------------------------------------------------
        $data = json_decode(file_get_contents("php://input"), true);

        $user_id = $data['user_id'] ?? null;
        $name = $data['name'] ?? '';
        $phone = $data['phone'] ?? '';
        $address = $data['address'] ?? '';
        $cart = $data['cart'] ?? [];

        if (!$user_id || empty($cart)) {
            http_response_code(400);
            echo json_encode(['message' => 'Invalid input data']);
            return;
        }

        $order_id = $this->orderModel->createOrder($user_id, $name, $phone, $address, $cart);

        if ($order_id) {
            echo json_encode(['message' => 'Order created successfully', 'order_id' => $order_id]);
        } else {
            http_response_code(500);
            echo json_encode(['message' => 'Failed to create order']);
        }
    }

    // API: Lấy danh sách đơn hàng
    public function getOrders()
    {
        header('Content-Type: application/json');
        if (!$this->authenticate()) {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized (Không được phép)']);
            return;
        }
        //--------------------------------------------------------
        // Lấy `user_id` từ query string
        $user_id = $_GET['user_id'] ?? null;

        if (!$user_id) {
            http_response_code(400); // Bad Request
            echo json_encode(['message' => 'User ID is required']);
            return;
        }

        // Gọi phương thức lấy danh sách đơn hàng từ OrderModel
        $orders = $this->orderModel->getOrders($user_id);
        echo json_encode(['orders' => $orders]);
    }

    // API: Lấy chi tiết đơn hàng
    public function getOrderDetails()
    {
        header('Content-Type: application/json');
        if (!$this->authenticate()) {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized (Không được phép)']);
            return;
        }
        //-----------------------------------------------
        // Lấy `order_id` từ query string
        $order_id = $_GET['order_id'] ?? null;

        if (!$order_id) {
            http_response_code(400); // Bad Request
            echo json_encode(['message' => 'Order ID is required']);
            return;
        }
        // Gọi phương thức lấy chi tiết đơn hàng từ OrderModel
        $details = $this->orderModel->getOrderDetails($order_id);

        if ($details) {
            echo json_encode(['order_details' => $details]);
        } else {
            http_response_code(404); // Not Found
            echo json_encode(['message' => 'Order not found']);
        }
    }
}
?>