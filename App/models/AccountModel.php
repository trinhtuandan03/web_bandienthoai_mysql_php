<?php
class AccountModel
{
    private $conn;

    private $table_name = "account";

    public function __construct($db)
    {
        $this->conn = $db;
    }
    // sử dụng cho AccountApiController.php để tạo api và trả về json và kết nối trức tiếp với database
    public function getAccountByUsername($username)
    {
        $query = "SELECT * FROM account WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    function save($username, $fullname, $password, $role = "user")
    {
        $query = "INSERT INTO " . $this->table_name . " (username, fullname, password, role) VALUES (:username, :fullname, :password, :role)";
        $stmt = $this->conn->prepare($query);
        // Làm sạch dữ liệu
        $fullname = htmlspecialchars(strip_tags($fullname));
        $username = htmlspecialchars(strip_tags($username));
        // Gán dữ liệu vào câu lệnh
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role', $role);
        // Thực thi câu lệnh
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    //---------------------------------------------------------------------------
    // Lấy danh sách Người Dùng
    public function getAccounts()
    {
        $query = "SELECT id, username, fullname, role FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Lấy thông tin Người Dùng theo ID
    public function getAccountById($id)
    {
        $query = "SELECT id, username, fullname, role FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Cập nhật Người Dùng theo ID
    public function updateAccount($id, $fullname, $password = null, $role = 'user')
    {
        $query = "UPDATE " . $this->table_name . " SET fullname = :fullname, role = :role";
        if ($password) {
            $query .= ", password = :password";
        }
        $query .= " WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        if ($password) {
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        }

        return $stmt->execute();
    }

    // Xóa Người Dùng theo ID
    public function deleteAccount($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}