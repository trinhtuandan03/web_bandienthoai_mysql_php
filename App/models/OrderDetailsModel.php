<?php
class OrderDetailsModel {
private $conn;

public function __construct($db) {
$this->conn = $db;
}

public function addOrderDetail($order_id, $product_id, $quantity, $price) {
$stmt = $this->conn->prepare("INSERT INTO order_details (order_id, product_id, quantity, price) VALUES (:order_id,
:product_id, :quantity, :price)");
$stmt->bindParam(':order_id', $order_id);
$stmt->bindParam(':product_id', $product_id);
$stmt->bindParam(':quantity', $quantity);
$stmt->bindParam(':price', $price);
return $stmt->execute();
}
}
?>