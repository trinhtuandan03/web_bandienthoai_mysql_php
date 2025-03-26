<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include_once("partical/header.php"); ?>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">


        <!--== Start Header Wrapper ==-->
        <header class="header-wrapper">
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
                                    <li class="dropdown-item">Việt Nam </li>
                                </ul>
                            </div>
                            <div class="header-info-dropdown">
                                <button type="button" class="btn-info dropdown-toggle" id="dropdownCurrency"
                                    data-bs-toggle="dropdown" aria-expanded="false">USD</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownCurrency">
                                    <li class="dropdown-item active">USD</li>
                                    <li class="dropdown-item">VN </li>
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
                                <a href="/home">
                                    <img class="logo-main" src="./public/images/logo.png" width="182" height="31"
                                        alt="Logo">
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
                                <button class="btn-search-menu d-lg-none" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
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
                                <button class="header-action-cart" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithCartSidebar" aria-controls="offcanvasWithCartSidebar">
                                    <i class="cart-icon icon-handbag"></i>
                                    <span class="cart-count">01</span>
                                </button>
                                <button class="btn-menu d-lg-none" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
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
                                        <a href="shop.html"> <span class="icon"><img src="./public/images/icons/vm1.png"
                                                    alt="Icon"></span> Headphone</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="./public/images/icons/vm2.png"
                                                    alt="Icon"></span> Video Game</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="./public/images/icons/vm3.png"
                                                    alt="Icon"></span> Protable Speakers</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="./public/images/icons/vm4.png"
                                                    alt="Icon"></span> Digital Camera</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="./public/images/icons/vm5.png"
                                                    alt="Icon"></span> Gadgets</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="./public/images/icons/vm6.png"
                                                    alt="Icon"></span> Home Appliances</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="./public/images/icons/vm7.png"
                                                    alt="Icon"></span> Audio Record</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="./public/images/icons/vm8.png"
                                                    alt="Icon"></span> Computer/Laptop</a>
                                    </li>
                                </ul>
                                <!-- menu content -->
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block ms-auto me-n3 pe-0">
                            <div class="header-navigation ps-6">
                                <?php include_once("partical/menu.php"); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-action">
                                <button class="btn-search-menu d-md-none" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
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
                                <h2 class="page-header-title">Thành Viên Nhóm</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Trang Chủ //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thành Viên Nhóm</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="page-header-thumb">
                                <img src="./public/images/photos/page-title.png" alt="Image-HasTech" width="546"
                                    height="281">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start Divider Area ==-->
            <div class="divider-area section-space">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="ps-lg-10 pe-lg-10 ms-lg-2 me-lg-2 mb-10 mb-lg-0 text-center text-lg-start">
                                <img src="./public/images/photos/d1.jpg" alt="Image-HasTech" width="449" height="550">
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <h2 class="divider-title mt-n2">Chúng Tôi Tạo Ra Sự Tuyệt Vời Với Những Trải Nghiệm Tuyệt
                                Vời
                            </h2>
                            <p class="divider-desc">Nghiên cứu và thấu hiểu khách hàng để tạo ra sản phẩm hoặc dịch vụ
                                đáp ứng đúng nhu cầu của họ.</p>
                            <button class="btn btn-theme" type="submit">Liên hệ với chúng tôi<i
                                    class="icon fa fa-arrow-right ms-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Divider Area ==-->
            <!--== Start Team Area ==-->
            <div class="team-area section-bottom-space">
                <div class="container">
                    <h2 class="section-title text-black text-center mt-n2">Thành Viên Nhóm</h2>
                    <div class="row mt-n1 mb-n6">
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img class="w-100" src="./public/images/team/1.jpg" alt="Image-HasTech">
                                </div>
                                <div class="team-info">
                                    <h4 class="team-title mt-n1">Kiersten Lange</h4>
                                    <h5 class="team-reg">Chif Admin</h5>
                                    <div class="social-items">
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-facebook"></i></a>
                                        <a href="https://www.twitter.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-twitter"></i></a>
                                        <a href="https://www.dribbble.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-dribbble"></i></a>
                                        <a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img class="w-100" src="./public/images/team/2.jpg" alt="Image-HasTech">
                                </div>
                                <div class="team-info">
                                    <h4 class="team-title mt-n1">Monroe Bond</h4>
                                    <h5 class="team-reg">Chif Admin</h5>
                                    <div class="social-items">
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-facebook"></i></a>
                                        <a href="https://www.twitter.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-twitter"></i></a>
                                        <a href="https://www.dribbble.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-dribbble"></i></a>
                                        <a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-6">
                            <div class="team-item">
                                <div class="team-thumb">
                                    <img class="w-100" src="./public/images/team/3.jpg" alt="Image-HasTech">
                                </div>
                                <div class="team-info">
                                    <h4 class="team-title mt-n1">Raymond Atkins</h4>
                                    <h5 class="team-reg">Chif Admin</h5>
                                    <div class="social-items">
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-facebook"></i></a>
                                        <a href="https://www.twitter.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-twitter"></i></a>
                                        <a href="https://www.dribbble.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-dribbble"></i></a>
                                        <a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i
                                                class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Team Area ==-->

            <!--== Start Testimonial Area ==-->
            <div class="testimonial-area section-space bg-img" data-bg-img="./public/images/photos/bg1.jpg">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title text-white mt-n2 mb-n1">Customer Review</h2>
                    </div>
                    <div class="swiper-button-style2 mb-n3">
                        <div class="swiper testimonial-slider-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-item">
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, consl adipi elit, sed do eiusmod tempor incididu
                                            ut labore et dolore magn aliqua Ut enim admin.</p>
                                        <img class="icon-quote" src="./public/images/icons/quote1.png" alt="Image"
                                            width="69" height="65">
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="client-thumb">
                                            <img src="./public/images/photos/client1.png" alt="Image" width="94"
                                                height="94">
                                        </div>
                                        <div class="info">
                                            <h4 class="name">Merida Swan</h4>
                                            <h5 class="designation">Chairman</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-item">
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, consl adipi elit, sed do eiusmod tempor incididu
                                            ut labore et dolore magn aliqua Ut enim admin.</p>
                                        <img class="icon-quote" src="./public/images/icons/quote1.png" alt="Image"
                                            width="69" height="65">
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="client-thumb">
                                            <img src="./public/images/photos/client2.png" alt="Image" width="94"
                                                height="94">
                                        </div>
                                        <div class="info">
                                            <h4 class="name">Demetri Caron</h4>
                                            <h5 class="designation">Customer</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-item">
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, consl adipi elit, sed do eiusmod tempor incididu
                                            ut labore et dolore magn aliqua Ut enim admin.</p>
                                        <img class="icon-quote" src="./public/images/icons/quote1.png" alt="Image"
                                            width="69" height="65">
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="client-thumb">
                                            <img src="./public/images/photos/client3.png" alt="Image" width="94"
                                                height="94">
                                        </div>
                                        <div class="info">
                                            <h4 class="name">Anaiah Whitten</h4>
                                            <h5 class="designation">HR Head</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-item">
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, consl adipi elit, sed do eiusmod tempor incididu
                                            ut labore et dolore magn aliqua Ut enim admin.</p>
                                        <img class="icon-quote" src="./public/images/icons/quote1.png" alt="Image"
                                            width="69" height="65">
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="client-thumb">
                                            <img src="./public/images/photos/client4.png" alt="Image" width="94"
                                                height="94">
                                        </div>
                                        <div class="info">
                                            <h4 class="name">Juidan Swan</h4>
                                            <h5 class="designation">Customer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== Start Swiper Navigation ==-->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
            <!--== End Testimonial Area ==-->

            <!--== Start Features Area Wrapper ==-->
            <div class="features-area section-top-space">
                <div class="container">
                    <div class="row mb-n8 mt-n2">
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">
                            <!--== Start Feature Item ==-->
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="./public/images/icons/1.png" width="44" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Support 24/7</h4>
                                    <p>Delicated 24/7 Support</p>
                                </div>
                            </div>
                            <!--== End Feature Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">
                            <!--== Start Feature Item ==-->
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="./public/images/icons/2.png" width="38" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Easy Returns</h4>
                                    <p>Shop With Confidence</p>
                                </div>
                            </div>
                            <!--== End Feature Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">
                            <!--== Start Feature Item ==-->
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="./public/images/icons/3.png" width="48" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Card Payment</h4>
                                    <p>12 Months Installments</p>
                                </div>
                            </div>
                            <!--== End Feature Item ==-->
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">
                            <!--== Start Feature Item ==-->
                            <div class="feature-item border-0">
                                <div class="feature-icon">
                                    <img src="./public/images/icons/4.png" width="50" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title">Free Shipping</h4>
                                    <p>Capped at $50 per order</p>
                                </div>
                            </div>
                            <!--== End Feature Item ==-->
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Features Area Wrapper ==-->

            <!--== Start Gallery Area Wrapper ==-->
            <div class="gallery-area section-space">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title mb-n1 mt-n2">Follow <span class="text-primary">@Elehaus</span> on Instagram
                        </h2>
                    </div>
                    <div class="row row-cols-3 row-cols-sm-3 row-cols-lg-5 gx-4 mb-n6 justify-content-center">
                        <div class="col mb-6">
                            <div class="gallery-item">
                                <img src="./public/images/photos/gallery1.png" alt="Instagram Image">
                                <a class="gallery-overlay" target="_blank" rel="noopener"
                                    href="https://www.instagram.com/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col mb-6">
                            <div class="gallery-item">
                                <img src="./public/images/photos/gallery2.png" alt="Instagram Image">
                                <a class="gallery-overlay" target="_blank" rel="noopener"
                                    href="https://www.instagram.com/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col mb-6">
                            <div class="gallery-item">
                                <img src="./public/images/photos/gallery3.png" alt="Instagram Image">
                                <a class="gallery-overlay" target="_blank" rel="noopener"
                                    href="https://www.instagram.com/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col mb-6">
                            <div class="gallery-item">
                                <img src="./public/images/photos/gallery4.png" alt="Instagram Image">
                                <a class="gallery-overlay" target="_blank" rel="noopener"
                                    href="https://www.instagram.com/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col mb-6">
                            <div class="gallery-item">
                                <img src="./public/images/photos/gallery5.png" alt="Instagram Image">
                                <a class="gallery-overlay" target="_blank" rel="noopener"
                                    href="https://www.instagram.com/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Gallery Area Wrapper ==-->
        </main>
    </div>
</body>
<!--== Start Footer Area Wrapper ==-->
<?php include_once("partical/footer.php"); ?>
<!--== End Footer Area Wrapper ==-->

</html>