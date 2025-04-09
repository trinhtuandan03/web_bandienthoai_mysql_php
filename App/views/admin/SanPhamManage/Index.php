<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/fonts/circular-std/style.css"
        rel="stylesheet">
    <link rel="stylesheet" href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/libs/css/style.css">
    <link rel="stylesheet"
        href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Quản Lý Sản Phẩm</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <?php include __DIR__ . '/../partical/headerManage.php'; ?>
        <div class="nav-left-sidebar sidebar-dark">
            <?php include __DIR__ . '/../partical/menuManage.php'; ?>
        </div>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Danh Sách Sản Phẩm</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="/web_bandienthoai_mysql_php/admin/productAdmin/create" class="btn btn-primary">Thêm Sản Phẩm</a>
                            </div>
                            <div class="card-body">
                                <?php if (isset($error)) : ?>
                                    <div class="alert alert-danger">
                                        <?php echo htmlspecialchars($error); ?>
                                    </div>
                                <?php endif; ?>

                                <table class="table table-bordered mt-3">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Tên</th>
                                            <th>Mô tả</th>
                                            <th>Giá</th>
                                            <th>Hình ảnh</th>
                                            <th>Danh mục</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($products)) : ?>
                                            <?php foreach ($products as $product) : ?>
                                                <tr>
                                                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                                                    <td><?php echo htmlspecialchars($product['description'] ?? 'Không có'); ?></td>
                                                    <td><?php echo number_format($product['price'], 0, ',', '.') . ' đ'; ?></td>
                                                    <td>
                                                        <?php if (!empty($product['image1'])) : ?>
                                                            <img src="<?php echo htmlspecialchars($product['image1']); ?>" alt="Ảnh 1" style="width: 60px;">
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo htmlspecialchars($product['category_name']); ?></td>
                                                    <td>
                                                        <a href="http://localhost:8080/web_bandienthoai_mysql_php/admin/productAdmin/show?id=<?php echo $product['id']; ?>" class="btn btn-info btn-sm">Chi tiết</a>
                                                        <a href="http://localhost:8080/web_bandienthoai_mysql_php/admin/productAdmin/edit?id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm">Sửa</a>
                                                        <a href="http://localhost:8080/web_bandienthoai_mysql_php/admin/productAdmin/destroy?id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="7" class="text-center">Không có sản phẩm nào</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <?php include __DIR__ . '/../partical/footerManage.php'; ?>
            </div>
        </div>
    </div>
    <script src="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/libs/js/main-js.js"></script>
</body>

</html>