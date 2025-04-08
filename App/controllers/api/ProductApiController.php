<?php
require_once('app/config/database.php');
require_once('app/models/ProductModel.php');
require_once('app/models/CategoryModel.php');
require_once('app/utils/JWTHandler.php'); //
class ProductApiController
{
    private $productModel;
    private $db;
    private $jwtHandler; //
    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->productModel = new ProductModel($this->db);
        $this->jwtHandler = new JWTHandler(); //
    }
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

    // Thêm sản phẩm mới
    public function store()
    {
        header('Content-Type: application/json');
        if (!$this->authenticate()) {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized (Không được phép)']);
            return;
        }
        //----------------------------------------------------
        $data = json_decode(file_get_contents("php://input"), true);
        $name = $data['name'] ?? '';
        $description = $data['description'] ?? '';
        $price = $data['price'] ?? '';
        $category_id = $data['category_id'] ?? null;
        $account_id = $data['account_id'] ?? null;
        $result = $this->productModel->addProduct(
            $name,
            $description,
            $price,
            $category_id,
            $data['image1'] ?? null,
            $data['image2'] ?? null,
            $data['image3'] ?? null,
            $account_id
        );
        if (is_array($result)) {
            http_response_code(400);
            echo json_encode(['errors' => $result]);
        } else {
            // Lấy thông tin sản phẩm vừa được thêm
            $newProduct = $this->productModel->getProductById($this->db->lastInsertId());

            // Trả về phản hồi JSON với thông tin sản phẩm
            http_response_code(201);
            echo json_encode([
                'message' => 'Product created successfully( Sản phẩm đã được tạo thành công)',
                'product' => $newProduct
            ]);
        }
    }
    // Lấy danh sách sản phẩm
    public function index()
    {
        header('Content-Type: application/json');
        $products = $this->productModel->getProducts();
        echo json_encode($products);
    }

    


    // Lấy thông tin sản phẩm theo ID
    public function show($id)
    {
        header('Content-Type: application/json');
        $product = $this->productModel->getProductById($id);
        if ($product) {
            echo json_encode($product);
        } else {
            http_response_code(404);
            echo json_encode(['message' => 'Product not found(Sản phẩm không tồn tại)']);
        }
    }

    // Cập nhật sản phẩm theo ID
    public function update($id)
    {
        header('Content-Type: application/json');
        if (!$this->authenticate()) {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized (Không được phép)']);
            return;
        }
        //----------------------------------------------------
        $data = json_decode(file_get_contents("php://input"), true);

        $name = $data['name'] ?? '';
        $description = $data['description'] ?? '';
        $price = $data['price'] ?? '';
        $category_id = $data['category_id'] ?? null;
        $image1 = $data['image1'] ?? null;
        $image2 = $data['image2'] ?? null;
        $image3 = $data['image3'] ?? null;
        $account_id = $data['account_id'] ?? null;

        // Gọi phương thức updateProduct() để cập nhật sản phẩm
        $result = $this->productModel->updateProduct(
            $id,
            $name,
            $description,
            $price,
            $category_id,
            $image1,
            $image2,
            $image3,
            $account_id
        );

        if ($result) {
            echo json_encode(['message' => 'Product updated successfully (Cập nhật sản phẩm thành công)']);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'Product update failed (Cập nhật sản phẩm thất bại)']);
        }
    }
    // Xóa sản phẩm theo ID
    public function destroy($id)
    {
        header('Content-Type: application/json');
        if (!$this->authenticate()) {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized (Không được phép)']);
            return;
        }
        //----------------------------------------------------
        $result = $this->productModel->deleteProduct($id);
        if ($result) {
            echo json_encode(['message' => 'Product deleted successfully( Xóa sản phẩm thành công)']);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'Product deletion failed( Xóa sản phẩm thất bại)']);
        }
    }
}
