<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from htmldemo.net/elehaus/elehaus/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 08:39:29 GMT -->
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
                            <a href="/product">Hoàn toàn miễn phí trả lại và miễn phí vận chuyển trên toàn thế giới</a>
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
                                    <li class="dropdown-item">VN</li>
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
                                    <img class="logo-main" src="<?= BASE_URL ?>/public/images/logo.png" width="182" height="31"
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
                                <a href="/web_bandienthoai_mysql_php/account/login" class="header-action-account d-none d-lg-block">Login /
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
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm1.png"
                                                    alt="Icon"></span> Headphone</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm2.png"
                                                    alt="Icon"></span> Video Game</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm3.png"
                                                    alt="Icon"></span> Protable Speakers</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm4.png"
                                                    alt="Icon"></span> Digital Camera</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm5.png"
                                                    alt="Icon"></span> Gadgets</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm6.png"
                                                    alt="Icon"></span> Home Appliances</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm7.png"
                                                    alt="Icon"></span> Audio Record</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm8.png"
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
                                <h2 class="page-header-title">Liên Hệ </h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home ">Trang Chủ //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liên Hệ </li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="page-header-thumb">
                                <img src="<?= BASE_URL ?>/public/images/photos/page-title.png" alt="Image-HasTech" width="546"
                                    height="281">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start My Account Wrapper ==-->
            <div class="account-area section-space">
                <div class="container">
                    <div class="myaccount-page-wrapper">
                        <div class="row">
                            <div class="col-lg-5 col-xl-4">
                                <div class="contact-info-area">
                                    <h3 class="contact-info-area-title text-black">Contact Info</h3>

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="<?= BASE_URL ?>/public/images/icons/pin2.png" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mb-2 mt-n1">Head Office</h4>
                                            <p>Your address here <span>54/X, New Down City</span></p>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="<?= BASE_URL ?>/public/images/icons/call.png" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mb-2 mt-n1">Phone</h4>
                                            <a href="tel://+00123456789 ">+00 123 456 789</a>
                                            <a href="tel://+00123456989">+00 123 456 989</a>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="<?= BASE_URL ?>/public/images/icons/email.png" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mt-n1">Email</h4>
                                            <a href="mailto://demo@example.com">youremail@demo.com</a>
                                            <a href="mailto://example@demo.info">www.yoursite.web</a>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                                <div class="contact-form-area">
                                    <h3 class="contact-form-title text-black">Get In Touch</h3>
                                    <!--== Start Contact Form ==-->
                                    <form class="contact-form" id="contact-form"
                                        action="https://htmldemo.net/elehaus/elehaus/assets/php/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-input-item">
                                                    <input class="form-control" type="text" name="con_name" id="name"
                                                        placeholder="Your Name">
                                                    <i class="icon fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input-item">
                                                    <input class="form-control" type="email" name="con_email" id="mail"
                                                        placeholder="Enter Your Mail">
                                                    <i class="icon fa fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input-item">
                                            <input class="form-control" type="text" name="con_subject" id="subject"
                                                placeholder="Your Subject">
                                            <i class="icon fa fa-phone-square"></i>
                                        </div>
                                        <div class="form-input-item">
                                            <textarea class="form-control" name="con_message" id="message"
                                                placeholder="Your Message"></textarea>
                                        </div>
                                        <button class="btn btn-theme btn-submit mt-2" type="submit">Submit Now <i
                                                class="icon fa fa-arrow-right"></i></button>
                                    </form>
                                    <!--== End Contact Form ==-->

                                    <!--== Message Notification ==-->
                                    <div class="form-message"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End My Account Wrapper ==-->
        </main>
    </div>
</body>
<!--== Start Footer Area Wrapper ==-->
<?php include_once("partical/footer.php"); ?>
<!--== End Footer Area Wrapper ==-->

</html>