<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include_once("partical/header.php"); ?>

<body>

    <!--== Wrapper Startt ==-->
    <div class="wrapper">
        <!--== Start Header Wrapper ==-->
        <header class="header-wrapper">
            <div class="header-middle">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo-area">
                                <a href="/home">
                                    <span class="logo-main" style="font-size: 24px; font-weight: bold;">NHÓM 5 CON
                                        BÁO</span>
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
                                <img src="./public/images/team/dan.jpg" alt="Image-HasTech" width="449" height="550">
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
                                    <img class="w-100" src="./public/images/team/dan.jpg" alt="Image-HasTech">
                                </div>
                                <div class="team-info">
                                    <h4 class="team-title mt-n1">Trịnh Tuấn Đan</h4>
                                    <h5 class="team-reg">backend</h5>
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
                                    <img class="w-100" src="./public/images/team/duc.jpg" alt="Image-HasTech">
                                </div>
                                <div class="team-info">
                                    <h4 class="team-title mt-n1">Nguyễn Văn Đức</h4>
                                    <h5 class="team-reg">Fontend</h5>
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
                                    <img class="w-100" src="./public/images/team/hien.jpg" alt="Image-HasTech">
                                </div>
                                <div class="team-info">
                                    <h4 class="team-title mt-n1">Nguyễn Thị Thúy Hiền</h4>
                                    <h5 class="team-reg">UI/UX</h5>
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
                                    <img class="w-100" src="./public/images/team/tuyet.jpg" alt="Image-HasTech">
                                </div>
                                <div class="team-info">
                                    <h4 class="team-title mt-n1">Thái Thị Ánh Tuyết</h4>
                                    <h5 class="team-reg">UI/UX</h5>
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
        </main>
    </div>
</body>
<!--== Start Footer Area Wrapper ==-->
<?php include_once("partical/footer.php"); ?>
<!--== End Footer Area Wrapper ==-->

</html>