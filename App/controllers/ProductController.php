<?php
// Require SessionHelper and other necessary files

use App\Config\Database;

require_once('app/config/database.php');
require_once('app/models/ProductModel.php');
require_once('app/models/CategoryModel.php');
class ProductController
{
    private $productModel;
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
        $this->productModel = new ProductModel($this->db);
    }

    function product_index()
    {
        include_once 'App/views/product/product_index.php';
    }
    function productdetails()
    {
        include_once 'App/views/product/productdetails.php';
    }
    function shopcart()
    {
        include_once 'App/views/product/shopcart.php';
    }
    function shopwishlist()
    {
        include_once 'App/views/product/shopwishlist.php';
    }


    public function show($id)
    {
        $product = $this->productModel->getProductById($id);
        if ($product) {
            include '../views/product/show.php';
        } else {
            echo "Không thấy sản phẩm.";
        }
    }
}
