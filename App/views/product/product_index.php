<!DOCTYPE html>
<html class="no-js" lang="zxx">


<?php include_once(__DIR__ . '/../partical/header.php'); ?>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">
        <?php include_once(__DIR__ . '/../partical/headerform.php'); ?>

        <!--== End Header Wrapper ==-->
        <main class="main-content">

            <!--== Start Page Header Area Wrapper ==-->
            <div class="page-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-header-content">
                                <h2 class="page-header-title">Sản Phẩm </h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Home //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sản Phẩm </li>
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

            <!--== Start Product Area Wrapper ==-->
            <div class="product-area section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xl-9">
                            <!--== Start Product Top Bar Area Wrapper ==-->
                            <div class="shop-top-bar">
                                <select id="category-filter">
                                    <option value="">Tất cả danh mục</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= htmlspecialchars($category['name']) ?>" <?= (isset($_GET['category_name']) && $_GET['category_name'] == $category['name']) ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($category['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="product-grid">
                                <?php if (!empty($products)): ?>
                                    <?php foreach ($products as $product): ?>
                                        <div class="product-item">
                                            <img src="<?= $product['image1'] ?>" alt="<?= $product['name'] ?>">

                                            <!-- Bọc tên sản phẩm bằng thẻ <a> để link đến trang chi tiết -->
                                            <h3>
                                                <a href="http://localhost:8080/web_bandienthoai_mysql_php/product/show?id=<?= $product['id'] ?>">
                                                    <?= $product['name'] ?>
                                                </a>
                                            </h3>

                                            <p><?= number_format($product['price'], 0, ',', '.') ?>₫</p>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p>Không có sản phẩm nào trong danh mục này.</p>
                                <?php endif; ?>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!--== End Product Area Wrapper ==-->
        </main>
        <script>
            document.getElementById('category-filter').addEventListener('change', function() {
                const selectedName = this.value;
                const url = new URL(window.location.href);

                if (selectedName) {
                    url.searchParams.set('category_name', selectedName);
                } else {
                    url.searchParams.delete('category_name');
                }

                window.location.href = url.toString();
            });
        </script>
    </div>
</body>
<!--== Start Footer Area Wrapper ==-->
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->


</html>