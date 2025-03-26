<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/elehaus/elehaus/shop-single-product-variable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 08:39:18 GMT -->

<?php include_once(__DIR__ . '/../partical/header.php'); ?>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">


        <!--== Start Header Wrapper ==-->
        <header class="header-wrapper">
            <div class="header-top d-none d-md-block">
                <div class="container">
                    <div class="header-top-area">
                        <div class="header-top-info">
                            <a href="shop.html">World Wide Completely Free Returns and Free Shipping</a>
                        </div>
                        <div class="header-top-action-area">
                            <div class="header-info-dropdown">
                                <button type="button" class="btn-info dropdown-toggle" id="dropdownLang" data-bs-toggle="dropdown" aria-expanded="false">English</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownLang">
                                    <li class="dropdown-item active">English</li>
                                    <li class="dropdown-item">Français</li>
                                </ul>
                            </div>
                            <div class="header-info-dropdown">
                                <button type="button" class="btn-info dropdown-toggle" id="dropdownCurrency" data-bs-toggle="dropdown" aria-expanded="false">USD</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownCurrency">
                                    <li class="dropdown-item active">USD</li>
                                    <li class="dropdown-item">EUR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo-area">
                                <a href="index.html">
                                    <img class="logo-main" src="<?= BASE_URL ?>/public/images/logo.png" width="182" height="31" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-action d-flex justify-content-end align-items-center">
                                <form class="header-search-box d-none d-lg-block">
                                    <input class="form-control" type="text" id="search" placeholder="Search Products">
                                    <button type="submit" class="btn-src">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </form>
                                <button class="btn-search-menu d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                    <i class="search-icon icon-magnifier"></i>
                                </button>
                                <a href="login-register.html" class="header-action-account d-none d-lg-block">Login /
                                    SignUp</a>
                                <a href="login-register.html" class="header-action-user d-lg-none">
                                    <i class="icon icon-user"></i>
                                </a>
                                <a class="header-action-wishlist" href="shop-wishlist.html">
                                    <i class="icon-heart"></i>
                                </a>
                                <button class="header-action-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithCartSidebar" aria-controls="offcanvasWithCartSidebar">
                                    <i class="cart-icon icon-handbag"></i>
                                    <span class="cart-count">01</span>
                                </button>
                                <button class="btn-menu d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="vertical-menu">
                                <button class="vmenu-btn"><i class="icon fa fa-list-ul"></i> All Departments <i
                                        class="icon fa fa-angle-down"></i></button>
                                <ul class="vmenu-content vmenu-content-none">
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm1.png" alt="Icon"></span> Headphone</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm2.png" alt="Icon"></span> Video Game</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm3.png" alt="Icon"></span> Protable Speakers
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm4.png" alt="Icon"></span> Digital Camera
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm5.png" alt="Icon"></span> Gadgets</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm6.png" alt="Icon"></span> Home Appliances
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm7.png" alt="Icon"></span> Audio Record
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm8.png" alt="Icon"></span> Computer/Laptop
                                        </a>
                                    </li>
                                </ul>
                                <!-- menu content -->
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block ms-auto me-n3 pe-0">
                            <div class="header-navigation ps-6">
                            <?php include_once(__DIR__ . '/../partical/menu.php'); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-action">
                                <button class="btn-search-menu d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                    <span class="search-icon">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->










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
                                <img src="<?= BASE_URL ?>/public/images/photos/page-title.png" alt="Image-HasTech" width="546" height="281">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start Product Detail Area Wrapper ==-->
            <div class="product-detail-area section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-detail-thumb me-lg-6">
                                <div class="swiper single-product-thumb-slider">
                                    <div class="swiper-wrapper">
                                        <a class="lightbox-image swiper-slide" data-fancybox="gallery" href="<?= BASE_URL ?>/public/images/shop/details/1.jpg">
                                            <img src="<?= BASE_URL ?>/public/images/shop/details/1.jpg" width="640" height="530" alt="Image">
                                        </a>
                                        <a class="lightbox-image swiper-slide" data-fancybox="gallery" href="<?= BASE_URL ?>/public/images/shop/details/2.jpg">
                                            <img src="<?= BASE_URL ?>/public/images/shop/details/2.jpg" width="640" height="530" alt="Image">
                                        </a>
                                        <a class="lightbox-image swiper-slide" data-fancybox="gallery" href="<?= BASE_URL ?>/public/images/shop/details/3.jpg">
                                            <img src="<?= BASE_URL ?>/public/images/shop/details/3.jpg" width="640" height="530" alt="Image">
                                        </a>
                                        <a class="lightbox-image swiper-slide" data-fancybox="gallery" href="<?= BASE_URL ?>/public/images/shop/details/4.jpg">
                                            <img src="<?= BASE_URL ?>/public/images/shop/details/4.jpg" width="640" height="530" alt="Image">
                                        </a>
                                    </div>
                                    <!-- swiper pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="single-product-nav-wrp">
                                    <div class="swiper single-product-nav-slider">
                                        <div class="swiper-wrapper">
                                            <div class="nav-item swiper-slide">
                                                <img src="<?= BASE_URL ?>/public/images/shop/details/nav1.jpg" alt="Image" width="127" height="127">
                                            </div>
                                            <div class="nav-item swiper-slide">
                                                <img src="<?= BASE_URL ?>/public/images/shop/details/nav2.jpg" alt="Image" width="127" height="127">
                                            </div>
                                            <div class="nav-item swiper-slide">
                                                <img src="<?= BASE_URL ?>/public/images/shop/details/nav3.jpg" alt="Image" width="127" height="127">
                                            </div>
                                            <div class="nav-item swiper-slide">
                                                <img src="<?= BASE_URL ?>/public/images/shop/details/nav4.jpg" alt="Image" width="127" height="127">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-style11">
                                        <!--== Start Swiper Navigation ==-->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-detail-content">
                                <h2 class="product-detail-title mt-n1 me-10">Android Television Super Salon New DGT -256
                                </h2>
                                <div class="product-detail-price">$160.00 - <span class="price-old">$260.00</span></div>
                                <div class="product-detail-review">
                                    <div class="product-detail-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <p class="product-detail-review-show">( 1 Review )</p>
                                </div>
                                <div class="product-size-list">
                                    <div class="product-size-list-check">
                                        <input class="form-check-input" type="radio" name="flexRadioSizeList" id="sizeSList1">
                                        <label class="form-check-label" for="sizeSList1">S</label>
                                    </div>
                                    <div class="product-size-list-check">
                                        <input class="form-check-input" type="radio" name="flexRadioSizeList" id="sizeMList1">
                                        <label class="form-check-label" for="sizeMList1">M</label>
                                    </div>
                                    <div class="product-size-list-check">
                                        <input class="form-check-input" type="radio" name="flexRadioSizeList" id="sizeLList1">
                                        <label class="form-check-label" for="sizeLList1">L</label>
                                    </div>
                                    <div class="product-size-list-check me-0">
                                        <input class="form-check-input" type="radio" name="flexRadioSizeList" id="sizeXLList1">
                                        <label class="form-check-label" for="sizeXLList1">XL</label>
                                    </div>
                                </div>
                                <div class="product-color-list">
                                    <h4>Color:</h4>
                                    <div class="product-color-list-check">
                                        <input class="form-check-input bg-red" type="radio" name="flexRadioColorList" id="colorList1">
                                        <label class="form-check-label" for="colorList1">Red</label>
                                    </div>
                                    <div class="product-color-list-check">
                                        <input class="form-check-input bg-green" type="radio" name="flexRadioColorList" id="colorList2" checked>
                                        <label class="form-check-label" for="colorList2">Green</label>
                                    </div>
                                    <div class="product-color-list-check me-0">
                                        <input class="form-check-input bg-blue" type="radio" name="flexRadioColorList" id="colorList3">
                                        <label class="form-check-label" for="colorList3">Blue</label>
                                    </div>
                                </div>


                                <p class="product-detail-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimo veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                <div class="mb-3">
                                    <div class="pro-qty">
                                        <input type="text" title="Quantity" value="01">
                                    </div>
                                    <button class="product-detail-cart-btn" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">Add to cart</button>
                                </div>
                                <div>
                                    <button type="button" class="product-detail-compare-btn" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon icon-shuffle"></i> Compare
                                    </button>
                                    <button type="button" class="product-detail-wishlist-btn" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon icon-heart"></i> Add to wishlist
                                    </button>
                                </div>
                                <!--== Start Features Area Wrapper ==-->
                                <div class="features-two-area">
                                    <div class="row mb-n3">
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                                            <!--== Start Feature Item ==-->
                                            <div class="feature-two-item">
                                                <img class="icon" src="<?= BASE_URL ?>/public/images/icons/1.png" width="44" height="38" alt="Icon"> <span class="feature-two-title">Support 24/7</span>
                                            </div>
                                            <!--== End Feature Item ==-->
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                                            <!--== Start Feature Item ==-->
                                            <div class="feature-two-item">
                                                <img class="icon" src="<?= BASE_URL ?>/public/images/icons/3.png" width="48" height="38" alt="Icon"> <span class="feature-two-title">Card Payment</span>
                                            </div>
                                            <!--== End Feature Item ==-->
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                                            <!--== Start Feature Item ==-->
                                            <div class="feature-two-item">
                                                <img class="icon" src="<?= BASE_URL ?>/public/images/icons/4.png" width="50" height="38" alt="Icon"> <span class="feature-two-title">Free Shipping</span>
                                            </div>
                                            <!--== End Feature Item ==-->
                                        </div>
                                    </div>
                                </div>
                                <!--== End Features Area Wrapper ==-->
                                <ul class="product-detail-meta">
                                    <li><span>SKU:</span> WX-256HG</li>
                                    <li><span>Categories:</span> Home, Electronic</li>
                                    <li><span>Tag</span> Electronic</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--== Start Product Detail Tab Area Wrapper ==-->
                    <div class="nav product-detail-nav" id="product-detail-nav-tab" role="tablist">
                        <button class="product-detail-nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        <button class="product-detail-nav-link" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="false">Specification</button>
                        <button class="product-detail-nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
                    </div>
                    <div class="tab-content" id="product-detail-nav-tabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <p class="product-detail-nav-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comm consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totamhy rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                ipsam voluptatem quia voluptas sit aspernatur</p>
                        </div>

                        <div class="tab-pane" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                            <ul class="product-detail-info-wrap">
                                <li><span>Weight :</span> 250 g</li>
                                <li><span>Dimensions :</span>10 x 10 x 15 cm</li>
                                <li><span>Materials :</span> 60% cotton, 40% polyester</li>
                                <li><span>Other Info :</span> American heirloom jean shorts pug seitan letterpress</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius velit corporis quo voluptate culpa soluta, esse accusamus, sunt quia omnis amet temporibus sapiente harum quam itaque libero tempore. Ipsum, ducimus. lorem</p>
                        </div>

                        <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <!--== Start Reviews Content Item ==-->
                            <div class="product-review-item">
                                <div class="product-review-top">
                                    <div class="product-review-thumb">
                                        <img src="<?= BASE_URL ?>/public/images/shop/details/c1.png" alt="Images">
                                    </div>
                                    <div class="product-review-content">
                                        <h4 class="product-review-name">Tomas Doe</h4>
                                        <h5 class="product-review-designation">Delveloper</h5>
                                        <div class="product-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra amet, sodales faucibus nibh. Vivamus amet potenti ultricies nunc gravida duis. Nascetur scelerisque massa sodales egestas augue neque euismod scelerisque
                                    viverra.
                                </p>
                                <button type="button" class="review-reply"><i class="fa fa fa-undo"></i></button>
                            </div>
                            <!--== End Reviews Content Item ==-->

                            <!--== Start Reviews Content Item ==-->
                            <div class="product-review-item product-review-reply">
                                <div class="product-review-top">
                                    <div class="product-review-thumb">
                                        <img src="<?= BASE_URL ?>/public/images/shop/details/c2.png" alt="Images">
                                    </div>
                                    <div class="product-review-content">
                                        <h4 class="product-review-name">Robat Fiftyk</h4>
                                        <h5 class="product-review-designation">UI/UX Designer</h5>
                                        <div class="product-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra amet, sodales faucibus nibh. Vivamus amet potenti ultricies nunc gravida duis. Nascetur scelerisque massa sodales egestas augue neque euismod scelerisque
                                    viverra.
                                </p>
                                <button type="button" class="review-reply"><i class="fa fa fa-undo"></i></button>
                            </div>
                            <!--== End Reviews Content Item ==-->

                            <!--== Start Reviews Content Item ==-->
                            <div class="product-review-item mb-0">
                                <div class="product-review-top">
                                    <div class="product-review-thumb">
                                        <img src="<?= BASE_URL ?>/public/images/shop/details/c3.png" alt="Images">
                                    </div>
                                    <div class="product-review-content">
                                        <h4 class="product-review-name">Arry twentyk</h4>
                                        <h5 class="product-review-designation">UI/UX Designer</h5>
                                        <div class="product-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra amet, sodales faucibus nibh. Vivamus amet potenti ultricies nunc gravida duis. Nascetur scelerisque massa sodales egestas augue neque euismod scelerisque
                                    viverra.
                                </p>
                                <button type="button" class="review-reply"><i class="fa fa fa-undo"></i></button>
                            </div>
                            <!--== End Reviews Content Item ==-->
                        </div>
                    </div>
                    <!--== End Product Detail Tab Area Wrapper ==-->
                </div>
            </div>
            <!--== End Product Detail Area Wrapper ==-->

            <!--== Start Related Product Area Wrapper ==-->
            <div class="product-area section-bottom-space">
                <div class="container">
                    <h2 class="section-title text-center mt-n3">Related Products</h2>
                    <div class="swiper related-product-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!--== Start Product Item ==-->
                                <div class="product-item">
                                    <a class="product-item-thumb" href="shop-single-product.html">
                                        <img src="<?= BASE_URL ?>/public/images/shop/5.jpg" width="270" height="264" alt="Image-HasTech">
                                    </a>
                                    <span class="badges">-10%</span>
                                    <div class="product-item-action">
                                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                            <i class="icon-heart"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                            <i class="icon-shuffle"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </div>
                                    <div class="product-item-info text-center pb-6">
                                        <h5 class="product-item-title mb-2"><a href="shop-single-product.html">Game
                                                Triger Finger New Insulated PH-X</a></h5>
                                        <div class="product-item-price">$160.00 - <span class="price-old">$260.00</span>
                                        </div>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Item ==-->
                            </div>
                            <div class="swiper-slide">
                                <!--== Start Product Item ==-->
                                <div class="product-item">
                                    <a class="product-item-thumb" href="shop-single-product.html">
                                        <img src="<?= BASE_URL ?>/public/images/shop/6.jpg" width="270" height="264" alt="Image-HasTech">
                                    </a>
                                    <span class="badges bg-theme3">New</span>
                                    <div class="product-item-action">
                                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                            <i class="icon-heart"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                            <i class="icon-shuffle"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </div>
                                    <div class="product-item-info text-center pb-6">
                                        <h5 class="product-item-title mb-2"><a href="shop-single-product.html">Android
                                                Television Super New DGT -256</a></h5>
                                        <div class="product-item-price">$256.00</div>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Item ==-->
                            </div>
                            <div class="swiper-slide">
                                <!--== Start Product Item ==-->
                                <div class="product-item">
                                    <a class="product-item-thumb" href="shop-single-product.html">
                                        <img src="<?= BASE_URL ?>/public/images/shop/7.jpg" width="270" height="264" alt="Image-HasTech">
                                    </a>
                                    <span class="badges bg-theme4">Hot</span>
                                    <div class="product-item-action">
                                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                            <i class="icon-heart"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                            <i class="icon-shuffle"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </div>
                                    <div class="product-item-info text-center pb-6">
                                        <h5 class="product-item-title mb-2"><a href="shop-single-product.html">Headphone
                                                Supersonic Pew Adi -25</a></h5>
                                        <div class="product-item-price">$180.00</div>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Item ==-->
                            </div>
                            <div class="swiper-slide">
                                <!--== Start Product Item ==-->
                                <div class="product-item">
                                    <a class="product-item-thumb" href="shop-single-product.html">
                                        <img src="<?= BASE_URL ?>/public/images/shop/8.jpg" width="270" height="264" alt="Image-HasTech">
                                    </a>
                                    <span class="badges">Sold Out</span>
                                    <div class="product-item-action">
                                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                            <i class="icon-heart"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                            <i class="icon-shuffle"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </div>
                                    <div class="product-item-info text-center pb-6">
                                        <h5 class="product-item-title mb-2"><a href="shop-single-product.html">Bluetooth
                                                Speaker New Without Cable</a></h5>
                                        <div class="product-item-price">$190.00</div>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Item ==-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Related Product Area Wrapper ==-->
        </main>
    </div>
</body>
<!--== Start Footer Area Wrapper ==-->
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->

</html>