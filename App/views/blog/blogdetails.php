<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from htmldemo.net/elehaus/elehaus/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 08:39:32 GMT -->

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
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm1.png"
                                                    alt="Icon"></span> Headphone</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm2.png"
                                                    alt="Icon"></span> Video Game</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm3.png"
                                                    alt="Icon"></span> Protable Speakers
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm4.png"
                                                    alt="Icon"></span> Digital Camera
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm5.png"
                                                    alt="Icon"></span> Gadgets</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm6.png"
                                                    alt="Icon"></span> Home Appliances
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm7.png"
                                                    alt="Icon"></span> Audio Record
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="<?= BASE_URL ?>/public/images/icons/vm8.png"
                                                    alt="Icon"></span> Computer/Laptop
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
                                <h2 class="page-header-title">Blog</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

            <!--== Start Blog Detail Area Wrapper ==-->
            <div class="blog-detail-area section-space">
                <div class="container">
                    <div class="blog-detail">
                        <img class="blog-detail-img w-100 mb-7" src="<?= BASE_URL ?>/public/images/blog/d4.jpg" width="1170" height="500" alt="Image">
                        <div class="blog-detail-meta">
                            <a class="blog-detail-post-date" href="blog.html"><i class="icon-calendar"></i> March 13,
                                2022</a>
                            <a class="blog-detail-post-views" href="blog.html"><i class="icon-eye"></i> 290 Views</a>
                        </div>
                        <h2 class="blog-detail-title">Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor.
                        </h2>
                        <p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborelio et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliql ex ea commodo consequat.
                            Duis aute irure dolor in reprehender in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                            unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                        <blockquote class="blog-detail-blockquote">
                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipi elit sed do eiusmod tempor sed do eiusmod amero incididunt.</p>
                            <img class="quote-icon" src="<?= BASE_URL ?>/public/images/icons/quote.png" width="127" height="93" alt="Icon">
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborelio et dolore magna aliqua. <span class="text-primary text-decoration-underline">Ut
                                enim ad minim veniam quis nostrud exercitation.</span> ullamco laboris nisi ut aliql ex ea commodo consequat. Duis aute irure dolor in reprehender in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident.</p>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborelio et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliql ex ea commodo consequat.
                            Duis aute irure dolor in reprehender in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        <div class="blog-detail-tag-social">
                            <div class="blog-detail-tag">
                                <a class="tag-item" href="blog.html"><i class="icon-close"></i> Electronic</a>
                                <a class="tag-item" href="blog.html"><i class="icon-close"></i> Home</a>
                                <a class="tag-item" href="blog.html"><i class="icon-close"></i> Smart</a>
                            </div>
                            <div class="blog-detail-social">
                                <span>Share On:</span>
                                <a class="blog-detail-social-item linkedin-item" href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fa fa-linkedin"></i></a>
                                <a class="blog-detail-social-item rss-item" href="https://www.rss.com/" target="_blank" rel="noopener"><i class="fa fa-rss"></i></a>
                                <a class="blog-detail-social-item dribbble-item" href="https://www.dribbble.com/" target="_blank" rel="noopener"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="comment-area">
                            <h3 class="comment-area-title">Comments</h3>
                            <!--== Start Single Comment Item ==-->
                            <div class="single-comment">
                                <div class="single-comment-thumb">
                                    <img src="<?= BASE_URL ?>/public/images/blog/c1.png" alt="Images" width="120" height="120">
                                </div>
                                <div class="single-comment-content">
                                    <h4 class="single-comment-name">Jakobe Snell</h4>
                                    <span class="single-comment-date">24 July, 2022</span>
                                    <p class="desc">Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiuslo tempor incididunt ut labo et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                                </div>
                                <button type="button" class="reply-icon"><i class="fa fa-mail-reply-all"></i>
                                    Reply</button>
                            </div>
                            <!--== End Single Comment Item ==-->
                        </div>
                        <div class="comment-form-area">
                            <form class="comment-form" id="comment-form" action="https://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                                <h3 class="comment-form-title"> Leave a Comments</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input-item">
                                            <input class="form-control" type="text" name="con_name" id="name" placeholder="Your Name">
                                            <i class="icon fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-item">
                                            <input class="form-control" type="email" name="con_email" id="mail" placeholder="Enter Your Mail">
                                            <i class="icon fa fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input-item">
                                    <input class="form-control" type="text" name="con_subject" id="subject" placeholder="Your Subject">
                                    <i class="icon fa fa-phone-square"></i>
                                </div>
                                <div class="form-input-item">
                                    <textarea class="form-control" name="con_message" id="message" placeholder="Your Message"></textarea>
                                </div>
                                <button class="btn btn-theme btn-submit mt-2" type="submit">Post Comment <i
                                        class="icon fa fa-arrow-right"></i></button>
                            </form>
                            <!--== End Contact Form ==-->
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Blog Detail Area Wrapper ==-->
        </main>
    </div>
</body>

<!--== Start Footer Area Wrapper ==-->
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->

</html>