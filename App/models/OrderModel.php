<?php
class OrderModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function createOrder($name, $phone, $address) {
        $stmt = $this->conn->prepare("INSERT INTO orders (name, phone, address) VALUES (:name, :phone, :address)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }
}
?>
