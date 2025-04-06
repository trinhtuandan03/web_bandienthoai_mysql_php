<?php
require_once('app/config/database.php');
require_once('app/models/BlogModel.php');
require_once('app/utils/JWTHandler.php'); //
class BlogApiController
{
    private $blogModel;
    private $db;
    private $jwtHandler;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->blogModel = new BlogModel($this->db);
        $this->jwtHandler = new JWTHandler();
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
    // Thêm bài viết mới
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

        $title = $data['title'] ?? '';
        $content = $data['content'] ?? '';
        $thumbnail = $data['thumbnail'] ?? null;
        $account_id = $data['account_id'] ?? null;

        $result = $this->blogModel->addBlog($title, $content, $thumbnail, $account_id);

        if (is_array($result)) {
            http_response_code(400);
            echo json_encode(['errors' => $result]);
        } else {
            $newBlog = $this->blogModel->getBlogById($this->db->lastInsertId());
            http_response_code(201);
            echo json_encode([
                'message' => 'Blog created successfully',
                'blog' => $newBlog
            ]);
        }
    }

    // Lấy danh sách bài viết
    public function index()
    {
        header('Content-Type: application/json');
        $blogs = $this->blogModel->getBlogs();
        echo json_encode($blogs);
    }

    // Lấy thông tin bài viết theo ID
    public function show($id)
    {
        header('Content-Type: application/json');
        $blog = $this->blogModel->getBlogById($id);
        if ($blog) {
            echo json_encode($blog);
        } else {
            http_response_code(404);
            echo json_encode(['message' => 'Blog not found']);
        }
    }

    // Cập nhật bài viết theo ID
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

        $title = $data['title'] ?? '';
        $content = $data['content'] ?? '';
        $thumbnail = $data['thumbnail'] ?? null;

        $result = $this->blogModel->updateBlog($id, $title, $content, $thumbnail);

        if ($result) {
            echo json_encode(['message' => 'Blog updated successfully']);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'Blog update failed']);
        }
    }

    // Xóa bài viết theo ID
    public function destroy($id)
    {
        header('Content-Type: application/json');
        if (!$this->authenticate()) {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized (Không được phép)']);
            return;
        }
        //----------------------------------------------------

        $result = $this->blogModel->deleteBlog($id);
        if ($result) {
            echo json_encode(['message' => 'Blog deleted successfully']);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'Blog deletion failed']);
        }
    }
}
?>