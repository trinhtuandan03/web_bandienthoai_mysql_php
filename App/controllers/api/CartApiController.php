<?php
require_once('app/models/CartModel.php');
require_once('app/config/database.php');
require_once('app/utils/JWTHandler.php');

class CartApiController
{
    private $cartModel;
    private $jwtHandler;

    public function __construct()
    {
        $db = (new Database())->getConnection();
        $this->cartModel = new CartModel($db);
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
    // API: Thêm sản phẩm vào giỏ hàng
    public function addToCart()
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
        $product_id = $data['product_id'] ?? null;
        $quantity = $data['quantity'] ?? 1;

        if (!$user_id || !$product_id) {
            http_response_code(400);
            echo json_encode(['message' => 'User ID and Product ID are required']);
            return;
        }

        $result = $this->cartModel->addToCart($user_id, $product_id, $quantity);

        if ($result) {
            echo json_encode(['message' => 'Product added to cart']);
        } else {
            http_response_code(500);
            echo json_encode(['message' => 'Failed to add product to cart']);
        }
    }

    // API: Lấy giỏ hàng
    public function getCart()
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

        // Gọi phương thức lấy giỏ hàng từ CartModel
        $cart = $this->cartModel->getCart($user_id);
        echo json_encode(['cart' => $cart]);
    }
    // API: Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCart()
    {
        header('Content-Type: application/json');
        if (!$this->authenticate()) {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized (Không được phép)']);
            return;
        }
        //-----------------------------------------------------------

        // Kiểm tra HTTP method
        if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
            http_response_code(405); // Method Not Allowed
            echo json_encode(['message' => 'Method not allowed. Use DELETE.']);
            return;
        }

        // Lấy `productId` từ query string
        $product_id = $_GET['productId'] ?? null;

        if (!$product_id) {
            http_response_code(400); // Bad Request
            echo json_encode(['message' => 'Product ID is required']);
            return;
        }

        // Gọi phương thức xóa sản phẩm khỏi giỏ hàng
        $result = $this->cartModel->removeFromCartByProductId($product_id);

        if ($result) {
            echo json_encode(['message' => 'Product removed from cart']);
        } else {
            http_response_code(500); // Internal Server Error
            echo json_encode(['message' => 'Failed to remove product from cart']);
        }
    }
}
?>