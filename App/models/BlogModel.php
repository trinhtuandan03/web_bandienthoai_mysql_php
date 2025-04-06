<?php
class BlogModel
{
    private $conn;
    private $table_name = "blog";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Thêm bài viết mới
    public function addBlog($title, $content, $thumbnail, $account_id)
    {
        $errors = [];
        if (empty($title)) {
            $errors['title'] = 'Tiêu đề không được để trống';
        }
        if (empty($content)) {
            $errors['content'] = 'Nội dung không được để trống';
        }
        if (empty($account_id)) {
            $errors['account_id'] = 'ID tài khoản không được để trống';
        }
        if (count($errors) > 0) {
            return $errors;
        }

        $query = "INSERT INTO " . $this->table_name . " (title, content, thumbnail, account_id) 
                  VALUES (:title, :content, :thumbnail, :account_id)";
        $stmt = $this->conn->prepare($query);

        $title = htmlspecialchars(strip_tags($title));
        $content = htmlspecialchars(strip_tags($content));
        $thumbnail = htmlspecialchars(strip_tags($thumbnail));
        $account_id = htmlspecialchars(strip_tags($account_id));

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':thumbnail', $thumbnail);
        $stmt->bindParam(':account_id', $account_id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Lấy danh sách bài viết
    public function getBlogs()
    {
        $query = "SELECT b.id, b.title, b.content, b.thumbnail, b.created_at, a.username as author 
                  FROM " . $this->table_name . " b
                  LEFT JOIN account a ON b.account_id = a.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Lấy bài viết theo ID
    public function getBlogById($id)
    {
        $query = "SELECT b.id, b.title, b.content, b.thumbnail, b.created_at, a.username as author 
                  FROM " . $this->table_name . " b
                  LEFT JOIN account a ON b.account_id = a.id
                  WHERE b.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Cập nhật bài viết
    public function updateBlog($id, $title, $content, $thumbnail)
    {
        $query = "UPDATE " . $this->table_name . " 
                  SET title = :title, content = :content, thumbnail = :thumbnail 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $title = htmlspecialchars(strip_tags($title));
        $content = htmlspecialchars(strip_tags($content));
        $thumbnail = htmlspecialchars(strip_tags($thumbnail));

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':thumbnail', $thumbnail);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Xóa bài viết
    public function deleteBlog($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>