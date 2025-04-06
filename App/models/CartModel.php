<?php
class CartModel
{
    private $conn;
    private $table_name = "cart";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Thêm sản phẩm vào giỏ hàng
    public function addToCart($user_id, $product_id, $quantity)
    {
        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        $query = "SELECT * FROM " . $this->table_name . " WHERE user_id = :user_id AND product_id = :product_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();
        $cartItem = $stmt->fetch(PDO::FETCH_OBJ);

        if ($cartItem) {
            // Nếu sản phẩm đã có, tăng số lượng
            $query = "UPDATE " . $this->table_name . " SET quantity = quantity + :quantity WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':id', $cartItem->id);
        } else {
            // Nếu sản phẩm chưa có, thêm mới
            $query = "INSERT INTO " . $this->table_name . " (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':product_id', $product_id);
            $stmt->bindParam(':quantity', $quantity);
        }

        return $stmt->execute();
    }

    // Lấy giỏ hàng của người dùng
    public function getCart($user_id)
    {
        $query = "SELECT c.*, p.name, p.price, p.image1 
                  FROM " . $this->table_name . " c
                  JOIN product p ON c.product_id = p.id
                  WHERE c.user_id = :user_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCartByProductId($product_id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE product_id = :product_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':product_id', $product_id);
        return $stmt->execute();
    }

    // Xóa toàn bộ giỏ hàng của người dùng
    public function clearCart($user_id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE user_id = :user_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        return $stmt->execute();
    }
}
?>