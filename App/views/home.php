<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/elehaus/elehaus/index-five.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 08:39:07 GMT -->

<?php include("partical/header.php"); ?>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">
        <!--== Start Header Wrapper ==-->
        <header class="header-wrapper header-transparent">
            <div class="header-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="./home">
                                    <span class="logo-main" style="font-size: 24px; font-weight: bold;">NHÓM 5 CON BÁO</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-navigation header-navigation-light pe-4">
                                <?php include_once("partical/menu.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->
        <main class="main-content ">

            <!--== Start Hero Area Wrapper ==-->
            <div class="hero-three-slider-area position-relative ">
                <div class="swiper hero-three-slider-container ">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide hero-three-slide-item bg-img "
                            data-bg-img="<?= BASE_URL ?>/public/images/slider/slider3-bg1.jpg ">
                            <div class="container h-100 ">
                                <div class="row align-items-center position-relative h-100 ">
                                    <div class="col-12 col-sm-7 col-md-7 col-lg-6 ">
                                        <div class="hero-three-slide-content text-center ">
                                            <h4 class="hero-three-slide-sub-title ">Mua sắm Dễ Dàng</h4>
                                            <h1 class="hero-three-slide-title ">Giảm Giá</h1>
                                            <h4 class="hero-three-slide-desc ">Lên đến <span
                                                    class="text-primary ">25%</span></h4>
                                            <a class="btn btn-white " href="/product ">Mua ngay <i
                                                    class="icon fa fa-arrow-right "></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-three-slide-shape-img "><img
                                        src="<?= BASE_URL ?>/public/images/slider/slider3-shape1.png " width="201 "
                                        height="172 " alt="Image "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Hero Area Wrapper ==-->
            <!--== Start Features Area Wrapper ==-->
            <div class="features-area pt-5 pt-md-0 pb-5 pb-md-0 ">
                <div class="container pt-8 pb-8 ">
                    <div class="row mb-n8 mt-n2 ">
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6 ">
                            <!--== Start Feature Item ==-->
                            <div class="feature-item ">
                                <div class="feature-icon ">
                                    <img src="<?= BASE_URL ?>/public/images/icons/1.png " width="44 " height="38 "
                                        alt="Icon ">
                                </div>
                                <div class="feature-content ">
                                    <h4 class="feature-title ">Support 24/7</h4>
                                    <p>Delicated 24/7 Support</p>
                                </div>
                            </div>
                            <!--== End Feature Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6 ">
                            <!--== Start Feature Item ==-->
                            <div class="feature-item ">
                                <div class="feature-icon ">
                                    <img src="<?= BASE_URL ?>/public/images/icons/2.png " width="38 " height="38 "
                                        alt="Icon ">
                                </div>
                                <div class="feature-content ">
                                    <h4 class="feature-title ">Easy Returns</h4>
                                    <p>Shop With Confidence</p>
                                </div>
                            </div>
                            <!--== End Feature Item ==-->
                        </div>x
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6 ">
                            <!--== Start Feature Item ==-->
                            <div class="feature-item ">
                                <div class="feature-icon ">
                                    <img src="<?= BASE_URL ?>/public/images/icons/3.png " width="48 " height="38 "
                                        alt="Icon ">
                                </div>
                                <div class="feature-content ">
                                    <h4 class="feature-title ">Card Payment</h4>
                                    <p>12 Months Installments</p>
                                </div>
                            </div>
                            <!--== End Feature Item ==-->
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Features Area Wrapper ==-->

            <!--== Start Product Filter Area Wrapper ==-->
            <div class="product-area section-two-space ">
                <div class="container ">
                    <h2 class="text-center mb-4 mt-n2 ">Hot Products</h2>
                    <div class="product-grid">
                        <?php foreach ($products as $product): ?>
                            <div class="product-item">
                                <img src="<?php echo $product['image1']; ?>" alt="<?php echo $product['name']; ?>">
                                <h3><?php echo $product['name']; ?></h3>
                                <p><?php echo number_format($product['price'], 0, ',', '.'); ?>₫</p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="newsletter-area section-top-space bg-img ">
                <div class="container ">
                    <div class="newsletter-three-content-wrap "
                        data-bg-img="<?= BASE_URL ?>/public/images/photos/bg3.jpg ">
                        <div class="newsletter-three-content ">
                            <h2 class="title text-white mt-n2 ">Join Our Newsletter</h2>
                            <p class="text-white ">Join our newsletter and get <span>$20</span> discount for your first
                                order
                            </p>
                        </div>
                        <form class="newsletter-three-form ">
                            <input type="email " class="form-control " placeholder="Enter Your Mail ">
                            <button class="btn-submit " type="submit ">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--== End News Letter Area Wrapper ==-->
        </main>
    </div>
    <!--== Wrapper End ==-->
</body>
<!--== Start Footer Area Wrapper ==-->
<?php include_once("partical/footer.php"); ?>
<!--== End Footer Area Wrapper ==-->

</html>