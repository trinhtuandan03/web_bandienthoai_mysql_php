<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/elehaus/elehaus/index-five.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 08:39:07 GMT -->

<?php include("partical/header.php"); ?>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">
        <!--== Start Header Wrapper ==-->
        <header class="header-wrapper header-transparent">
            <div class="header-top d-none d-md-block">
                <div class="container">
                    <div class="header-top-area">
                        <div class="header-top-info">
                            <a href="/home">Hoàn toàn miễn phí trả lại và miễn phí vận chuyển trên toàn thế giới</a>
                        </div>
                        <div class="header-top-action-area">
                            <div class="header-info-dropdown">
                                <button type="button" class="btn-info dropdown-toggle" id="dropdownLang"
                                    data-bs-toggle="dropdown" aria-expanded="false">English</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownLang">
                                    <li class="dropdown-item active">English</li>
                                    <li class="dropdown-item">Français</li>
                                </ul>
                            </div>
                            <div class="header-info-dropdown">
                                <button type="button" class="btn-info dropdown-toggle" id="dropdownCurrency"
                                    data-bs-toggle="dropdown" aria-expanded="false">USD</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownCurrency">
                                    <li class="dropdown-item active">USD</li>
                                    <li class="dropdown-item">EUR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="/home">
                                    <img class="logo-main" src="<?= BASE_URL ?>/public/images/logo-light.png"
                                        width="182" height="31" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-navigation header-navigation-light pe-4">
                                <?php include_once("partical/menu.php"); ?>
                            </div>
                        </div>
                        <div class="col-auto ">
                            <div class="header-action d-flex align-items-center ">
                                <button class="btn-search-menu " type="button " data-bs-toggle="offcanvas "
                                    data-bs-target="#AsideOffcanvasSearch " aria-controls="AsideOffcanvasSearch ">
                                    <i class="search-icon icon-magnifier "></i>
                                </button>
                                <a href="/account " class="header-action-user ">
                                    <i class="icon icon-user "></i>
                                </a>
                                <a class="header-action-wishlist " href="/home ">
                                    <i class="icon-heart "></i>
                                </a>
                                <button class="header-action-cart " type="button " data-bs-toggle="offcanvas "
                                    data-bs-target="#offcanvasWithCartSidebar "
                                    aria-controls="offcanvasWithCartSidebar ">
                                    <i class="cart-icon icon-handbag "></i>
                                    <span class="cart-count ">01</span>
                                </button>
                                <button class="btn-menu d-xl-none me-0 " type="button " data-bs-toggle="offcanvas "
                                    data-bs-target="#offcanvasWithBothOptions "
                                    aria-controls="offcanvasWithBothOptions ">
                                    <i class="fa fa-bars "></i>
                                </button>
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
                                    <div class="col-12 col-sm-5 col-md-5 col-lg-6 ">
                                        <div class="hero-three-slide-thumb ">
                                            <img src="/sattic/images/slider/slider3.png " width="499 " height="467 "
                                                alt="Image ">
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
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6 ">
                            <!--== Start Feature Item ==-->
                            <div class="feature-item border-0 ">
                                <div class="feature-icon ">
                                    <img src="/sattic/images/icons/4.png " width="50 " height="38 " alt="Icon ">
                                </div>
                                <div class="feature-content ">
                                    <h4 class="feature-title ">Free Shipping</h4>
                                    <p>Capped at $50 per order</p>
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
                    <div class="masonry-filter-menu text-center mb-8 ">
                        <button class="active " data-filter="* ">All</button>
                        <button data-filter=".filterAudio ">Audio/Video</button>
                        <button data-filter=".filterGamming ">Gamming</button>
                        <button data-filter=".filterHeadphone ">Headphone</button>
                        <button data-filter=".filterDigitalCamera ">Digital Camera</button>
                    </div>

                    <div class="row masonryGrid mb-n6 ">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-6 masonry-item filterGamming ">
                            <!--== Start Product Item ==-->
                            <div class="product-item ">
                                <a class="product-item-thumb " href="shop-single-product.html ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/b16.jpg " width="268 " height="256 "
                                        alt="Image-HasTech ">
                                </a>
                                <span class="badges ">-10%</span>
                                <div class="product-item-action product-item-action--two ">
                                    <button type="button " class="product-action-btn action-btn-wishlist "
                                        data-bs-toggle="modal " data-bs-target="#action-WishlistModal ">
                                        <i class="icon-heart "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-compare "
                                        data-bs-toggle="modal " data-bs-target="#action-CompareModal ">
                                        <i class="icon-shuffle "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-quick-view "
                                        data-bs-toggle="modal " data-bs-target="#action-QuickViewModal ">
                                        <i class="icon-magnifier "></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center bg-white pb-6 ">
                                    <h5 class="product-item-title mb-2 "><a href="shop-single-product.html ">Game Triger
                                            Finger New Insulated PH-X</a></h5>
                                    <div class="product-item-price ">$160.00 - <span class="price-old ">$260.00</span>
                                    </div>
                                    <div class="product-item-review-icon ">
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-6 masonry-item filterAudio ">
                            <!--== Start Product Item ==-->
                            <div class="product-item ">
                                <a class="product-item-thumb " href="shop-single-product.html ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/b17.jpg " width="268 " height="256 "
                                        alt="Image-HasTech ">
                                </a>
                                <span class="badges bg-theme3 ">New</span>
                                <div class="product-item-action product-item-action--two ">
                                    <button type="button " class="product-action-btn action-btn-wishlist "
                                        data-bs-toggle="modal " data-bs-target="#action-WishlistModal ">
                                        <i class="icon-heart "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-compare "
                                        data-bs-toggle="modal " data-bs-target="#action-CompareModal ">
                                        <i class="icon-shuffle "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-quick-view "
                                        data-bs-toggle="modal " data-bs-target="#action-QuickViewModal ">
                                        <i class="icon-magnifier "></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center bg-white pb-6 ">
                                    <h5 class="product-item-title mb-2 "><a href="shop-single-product.html ">Android
                                            Television Super New DGT -256</a></h5>
                                    <div class="product-item-price ">$256.00</div>
                                    <div class="product-item-review-icon ">
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div
                            class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-6 masonry-item filterAudio filterGamming filterHeadphone ">
                            <!--== Start Product Item ==-->
                            <div class="product-item ">
                                <a class="product-item-thumb " href="shop-single-product.html ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/b18.jpg " width="268 " height="256 "
                                        alt="Image-HasTech ">
                                </a>
                                <span class="badges bg-theme4 ">Hot</span>
                                <div class="product-item-action product-item-action--two ">
                                    <button type="button " class="product-action-btn action-btn-wishlist "
                                        data-bs-toggle="modal " data-bs-target="#action-WishlistModal ">
                                        <i class="icon-heart "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-compare "
                                        data-bs-toggle="modal " data-bs-target="#action-CompareModal ">
                                        <i class="icon-shuffle "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-quick-view "
                                        data-bs-toggle="modal " data-bs-target="#action-QuickViewModal ">
                                        <i class="icon-magnifier "></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center bg-white pb-6 ">
                                    <h5 class="product-item-title mb-2 "><a href="shop-single-product.html ">Headphone
                                            Supersonic Pew Adi -25</a></h5>
                                    <div class="product-item-price ">$180.00</div>
                                    <div class="product-item-review-icon ">
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-6 masonry-item filterAudio filterGamming ">
                            <!--== Start Product Item ==-->
                            <div class="product-item ">
                                <a class="product-item-thumb " href="shop-single-product.html ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/b19.jpg " width="268 " height="256 "
                                        alt="Image-HasTech ">
                                </a>
                                <span class="badges ">Sold Out</span>
                                <div class="product-item-action product-item-action--two ">
                                    <button type="button " class="product-action-btn action-btn-wishlist "
                                        data-bs-toggle="modal " data-bs-target="#action-WishlistModal ">
                                        <i class="icon-heart "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-compare "
                                        data-bs-toggle="modal " data-bs-target="#action-CompareModal ">
                                        <i class="icon-shuffle "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-quick-view "
                                        data-bs-toggle="modal " data-bs-target="#action-QuickViewModal ">
                                        <i class="icon-magnifier "></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center bg-white pb-6 ">
                                    <h5 class="product-item-title mb-2 "><a href="shop-single-product.html ">Bluetooth
                                            Speaker New Without Cable</a></h5>
                                    <div class="product-item-price ">$280.00</div>
                                    <div class="product-item-review-icon ">
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-6 masonry-item filterDigitalCamera ">
                            <!--== Start Product Item ==-->
                            <div class="product-item ">
                                <a class="product-item-thumb " href="shop-single-product.html ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/b20.jpg " width="268 " height="256 "
                                        alt="Image-HasTech ">
                                </a>
                                <span class="badges bg-theme4 ">Hot</span>
                                <div class="product-item-action product-item-action--two ">
                                    <button type="button " class="product-action-btn action-btn-wishlist "
                                        data-bs-toggle="modal " data-bs-target="#action-WishlistModal ">
                                        <i class="icon-heart "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-compare "
                                        data-bs-toggle="modal " data-bs-target="#action-CompareModal ">
                                        <i class="icon-shuffle "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-quick-view "
                                        data-bs-toggle="modal " data-bs-target="#action-QuickViewModal ">
                                        <i class="icon-magnifier "></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center bg-white pb-6 ">
                                    <h5 class="product-item-title mb-2 "><a href="shop-single-product.html ">Headphone
                                            Supersonic Pew Adi -25</a></h5>
                                    <div class="product-item-price ">$256</div>
                                    <div class="product-item-review-icon ">
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-6 masonry-item filterAudio filterGamming ">
                            <!--== Start Product Item ==-->
                            <div class="product-item ">
                                <a class="product-item-thumb " href="shop-single-product.html ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/b21.jpg " width="268 " height="256 "
                                        alt="Image-HasTech ">
                                </a>
                                <span class="badges ">-10%</span>
                                <div class="product-item-action product-item-action--two ">
                                    <button type="button " class="product-action-btn action-btn-wishlist "
                                        data-bs-toggle="modal " data-bs-target="#action-WishlistModal ">
                                        <i class="icon-heart "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-compare "
                                        data-bs-toggle="modal " data-bs-target="#action-CompareModal ">
                                        <i class="icon-shuffle "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-quick-view "
                                        data-bs-toggle="modal " data-bs-target="#action-QuickViewModal ">
                                        <i class="icon-magnifier "></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center bg-white pb-6 ">
                                    <h5 class="product-item-title mb-2 "><a href="shop-single-product.html ">Game Triger
                                            Finger New Insulated PH-X</a></h5>
                                    <div class="product-item-price ">$129</div>
                                    <div class="product-item-review-icon ">
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-6 masonry-item filterAudio filterGamming ">
                            <!--== Start Product Item ==-->
                            <div class="product-item ">
                                <a class="product-item-thumb " href="shop-single-product.html ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/b17.jpg " width="268 " height="256 "
                                        alt="Image-HasTech ">
                                </a>
                                <span class="badges bg-theme3 ">New</span>
                                <div class="product-item-action product-item-action--two ">
                                    <button type="button " class="product-action-btn action-btn-wishlist "
                                        data-bs-toggle="modal " data-bs-target="#action-WishlistModal ">
                                        <i class="icon-heart "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-compare "
                                        data-bs-toggle="modal " data-bs-target="#action-CompareModal ">
                                        <i class="icon-shuffle "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-quick-view "
                                        data-bs-toggle="modal " data-bs-target="#action-QuickViewModal ">
                                        <i class="icon-magnifier "></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center bg-white pb-6 ">
                                    <h5 class="product-item-title mb-2 "><a href="shop-single-product.html ">Android
                                            Television Super New DGT -256</a></h5>
                                    <div class="product-item-price ">$190</div>
                                    <div class="product-item-review-icon ">
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div
                            class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-6 masonry-item filterGamming filterHeadphone ">
                            <!--== Start Product Item ==-->
                            <div class="product-item ">
                                <a class="product-item-thumb " href="shop-single-product.html ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/b22.jpg " width="268 " height="256 "
                                        alt="Image-HasTech ">
                                </a>
                                <span class="badges ">-10%</span>
                                <div class="product-item-action product-item-action--two ">
                                    <button type="button " class="product-action-btn action-btn-wishlist "
                                        data-bs-toggle="modal " data-bs-target="#action-WishlistModal ">
                                        <i class="icon-heart "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-compare "
                                        data-bs-toggle="modal " data-bs-target="#action-CompareModal ">
                                        <i class="icon-shuffle "></i>
                                    </button>
                                    <button type="button " class="product-action-btn action-btn-quick-view "
                                        data-bs-toggle="modal " data-bs-target="#action-QuickViewModal ">
                                        <i class="icon-magnifier "></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center bg-white pb-6 ">
                                    <h5 class="product-item-title mb-2 "><a href="shop-single-product.html ">Game Triger
                                            Finger New Insulated PH-X</a></h5>
                                    <div class="product-item-price ">$160.00 - <span class="price-old ">$260.00</span>
                                    </div>
                                    <div class="product-item-review-icon ">
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                        <i class="fa fa-star "></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Product Filter Area Wrapper ==-->
            <!--== Start Product Banner Area Wrapper ==-->
            <div class="product-banner-area ">
                <div class="container ">
                    <div class="row mb-n6 ">
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-6 ">
                            <!--== Start Product Banner Item ==-->
                            <div class="product-banner-item ">
                                <div class="product-banner-thumb ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/banner/1.jpg " width="370 "
                                        height="287 " alt="Image-HasTech ">
                                </div>
                                <div class="product-banner-content ">
                                    <h5 class="product-banner-desc ">Get 50% Off</h5>
                                    <h2 class="product-banner-title ">Smart Phone <span class="d-block ">With Pen</span>
                                    </h2>
                                    <a class="btn-link " href="shop.html ">Shop Now <i
                                            class="icon fa fa-arrow-right "></i></a>
                                </div>
                            </div>
                            <!--== End Product Banner Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-6 ">
                            <!--== Start Product Banner Item ==-->
                            <div class="product-banner-item ">
                                <div class="product-banner-thumb ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/banner/2.jpg " width="370 "
                                        height="287 " alt="Image-HasTech ">
                                </div>
                                <div class="product-banner-content ">
                                    <h5 class="product-banner-desc ">Get 50% Off</h5>
                                    <h2 class="product-banner-title ">Gaming Pad <span class="d-block ">& Handel</span>
                                    </h2>
                                    <a class="btn-link " href="shop.html ">Shop Now <i
                                            class="icon fa fa-arrow-right "></i></a>
                                </div>
                            </div>
                            <!--== End Product Banner Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-6 ">
                            <!--== Start Product Banner Item ==-->
                            <div class="product-banner-item ">
                                <div class="product-banner-thumb ">
                                    <img src="<?= BASE_URL ?>/public/images/shop/banner/3.jpg " width="370 "
                                        height="287 " alt="Image-HasTech ">
                                </div>
                                <div class="product-banner-content ">
                                    <h5 class="product-banner-desc ">Get 50% Off</h5>
                                    <h2 class="product-banner-title ">Smart Speaker <span class="d-block ">&
                                            assistant</span></h2>
                                    <a class="btn-link " href="shop.html ">Shop Now <i
                                            class="icon fa fa-arrow-right "></i></a>
                                </div>
                            </div>
                            <!--== End Product Banner Item ==-->
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Product Banner Area Wrapper ==-->

            <!--== Start News Letter Area Wrapper ==-->
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