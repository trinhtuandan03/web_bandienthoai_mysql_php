<?php
class OrderModel
{
    private $conn;
    private $table_orders = "orders";
    private $table_order_details = "order_details";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Tạo đơn hàng mới
    public function createOrder($user_id, $name, $phone, $address, $cart)
    {
        try {
            $this->conn->beginTransaction();

            // Tính tổng giá trị đơn hàng
            $total_price = array_reduce($cart, function ($sum, $item) {
                return $sum + ($item['price'] * $item['quantity']); // Sử dụng mảng thay vì đối tượng
            }, 0);

            // Thêm vào bảng orders
            $query = "INSERT INTO " . $this->table_orders . " (user_id, name, phone, address, total_price) 
                  VALUES (:user_id, :name, :phone, :address, :total_price)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':total_price', $total_price);
            $stmt->execute();

            $order_id = $this->conn->lastInsertId();

            // Thêm vào bảng order_details
            foreach ($cart as $item) {
                $query = "INSERT INTO " . $this->table_order_details . " (order_id, product_id, quantity, price) 
                      VALUES (:order_id, :product_id, :quantity, :price)";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':order_id', $order_id);
                $stmt->bindParam(':product_id', $item['product_id']); // Sử dụng mảng thay vì đối tượng
                $stmt->bindParam(':quantity', $item['quantity']); // Sử dụng mảng thay vì đối tượng
                $stmt->bindParam(':price', $item['price']); // Sử dụng mảng thay vì đối tượng
                $stmt->execute();
            }

            $this->conn->commit();
            return $order_id;
        } catch (Exception $e) {
            $this->conn->rollBack();
            return false;
        }
    }

    // Lấy danh sách đơn hàng
    public function getOrders($user_id)
    {
        $query = "SELECT * FROM " . $this->table_orders . " WHERE user_id = :user_id ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Lấy chi tiết đơn hàng
    public function getOrderDetails($order_id)
    {
        $query = "SELECT od.*, p.name as product_name 
                  FROM " . $this->table_order_details . " od
                  JOIN product p ON od.product_id = p.id
                  WHERE od.order_id = :order_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':order_id', $order_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
?>