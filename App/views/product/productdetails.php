<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/elehaus/elehaus/shop-single-product-variable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 08:39:18 GMT -->

<?php include_once(__DIR__ . '/../partical/header.php'); ?>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <?php include_once(__DIR__ . '/../partical/headerform.php'); ?>
        <main class="main-content">

            <!--== Start Page Header Area Wrapper ==-->
            <div class="page-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-header-content">
                                <h2 class="page-header-title">Products</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Single Product</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="page-header-thumb">
                                <img src="<?= BASE_URL ?>/public/images/photos/page-title.png" alt="Image-HasTech"
                                    width="546" height="281">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Page Header Area Wrapper ==-->

            <?php if (!empty($product) && isset($product['id'])): ?>
                <div class="product-detail">
                    <div class="product-name">
                        <h1><?= htmlspecialchars($product['name']) ?></h1>
                    </div>
                    <div class="product-price">
                        <p><strong>Giá:</strong> <?= number_format($product['price'], 0, ',', '.') ?>₫</p>
                    </div>
                    <div class="product-description">
                        <p><strong>Mô tả:</strong> <?= nl2br(htmlspecialchars($product['description'])) ?></p>
                    </div>
                    <div class="product-images">
                        <?php if (!empty($product['image1'])): ?>
                            <div class="product-image">
                                <img src="<?= $product['image1'] ?>" alt="Ảnh 1" width="300">
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($product['image2'])): ?>
                            <div class="product-image">
                                <img src="<?= $product['image2'] ?>" alt="Ảnh 2" width="300">
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($product['image3'])): ?>
                            <div class="product-image">
                                <img src="<?= $product['image3'] ?>" alt="Ảnh 3" width="300">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php else: ?>
                <p>Sản phẩm không tồn tại hoặc có lỗi xảy ra.</p>
            <?php endif; ?>




        </main>
    </div>
</body>
<!--== Start Footer Area Wrapper ==-->
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->

</html>