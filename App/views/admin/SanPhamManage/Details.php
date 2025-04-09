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
    <title>Chi tiết sản phẩm</title>
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
                            <h2 class="pageheader-title">Chi tiết sản phẩm</h2>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <?php if (isset($error)) : ?>
                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php elseif (isset($product)) : ?>
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p><strong>Giá:</strong> <?php echo number_format($product['price'], 0, ',', '.') . ' đ'; ?></p>
                        <p><strong>Danh mục:</strong> 
                            <?php echo isset($product['category_name']) ? htmlspecialchars($product['category_name']) : 'Không có'; ?>
                        </p>
                        <p><strong>Mô tả:</strong> <?php echo htmlspecialchars($product['description'] ?? 'Không có'); ?></p>
                        <p><strong>Hình ảnh:</strong></p>
                        <div class="row">
                            <?php if (!empty($product['image1'])) : ?>
                                <div class="col-md-3 mb-2">
                                    <img src="<?php echo htmlspecialchars($product['image1']); ?>" alt="Ảnh 1" class="img-fluid rounded">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($product['image2'])) : ?>
                                <div class="col-md-3 mb-2">
                                    <img src="<?php echo htmlspecialchars($product['image2']); ?>" alt="Ảnh 2" class="img-fluid rounded">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($product['image3'])) : ?>
                                <div class="col-md-3 mb-2">
                                    <img src="<?php echo htmlspecialchars($product['image3']); ?>" alt="Ảnh 3" class="img-fluid rounded">
                                </div>
                            <?php endif; ?>
                        </div>
                        <a href="http://localhost:8080/web_bandienthoai_mysql_php/admin/productAdmin/index" class="btn btn-secondary mt-3">← Quay lại danh sách</a>
                    <?php endif; ?>
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