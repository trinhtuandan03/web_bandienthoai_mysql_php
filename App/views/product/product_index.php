<!DOCTYPE html>
<html class="no-js" lang="zxx">


<?php include_once(__DIR__ . '/../partical/header.php'); ?>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">


        <!--== Start Header Wrapper ==-->
        <header class="header-wrapper">
            <div class="header-middle">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo-area">
                                <a href="index.html">
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
                                <a class="header-action-wis hlist" href="shop-wishlist.html">
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

                        </div>
                        <div class="col-auto d-none d-lg-block ms-auto me-n3 pe-0">
                            <div class="header-navigation ps-6">
                                <?php include_once(__DIR__ . '/../partical/menu.php'); ?>
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
                                <div class="nav nav-tabs shop-filter-nav active" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="column-three-tab" data-bs-toggle="tab"
                                        data-bs-target="#column-three" type="button" role="tab"
                                        aria-controls="column-three" aria-selected="true"><i
                                            class="icon-grid icons"></i></button>
                                    <button class="nav-link mr-0" id="nav-list-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list"
                                        aria-selected="false"><i class="icon-list icons"></i></button>
                                </div>
                                <select class="select-shoing">
                                    <option data-display="Default Sorting">Default Sorting</option>
                                    <option value="1">Featured</option>
                                    <option value="2">Best Selling</option>
                                    <option value="3">Price: low to high</option>
                                    <option value="4">Price: high to low</option>
                                </select>
                                <div class="product-showing-count">
                                    Showing <span>1–9</span> of <span>10</span> results
                                </div>
                                <nav class="pagination-area ms-md-auto mt-3 mt-md-0">
                                    <ul class="page-numbers">
                                        <li>
                                            <a class="page-number active" href="shop.html">1</a>
                                        </li>
                                        <li>
                                            <a class="page-number" href="shop.html">2</a>
                                        </li>
                                        <li>
                                            <a class="page-number next" href="shop.html">
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <?php if (!empty($products)): ?>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Mô tả</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $index => $product): ?>
                                            <tr>
                                                <td><?= $index + 1 ?></td>
                                                <td><?= htmlspecialchars($product['name'] ?? '') ?></td>
                                                <td><?= number_format($product['price'] ?? 0) ?> VND</td>
                                                <td><?= htmlspecialchars($product['description'] ?? '') ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <p style="text-align: center; color: red;">Không có sản phẩm nào.</p>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <!--== Start Sidebar Area Wrapper ==-->
                            <div class="sidebar-area mt-10 mt-lg-0">
                                <div class="widget-item widget-item-one pb-5">
                                    <h3 class="widget-two-title text-black">Category</h3>
                                    <div class="widget-categories-list">
                                        <a class="widget-category-item" href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm1.png" alt="Icon"></span>
                                            Headphone (32)
                                        </a>
                                        <a class="widget-category-item" href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm2.png" alt="Icon"></span>
                                            Video Game
                                            (12)
                                        </a>
                                        <a class="widget-category-item" href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm3.png" alt="Icon"></span>
                                            Protable
                                            Speakers (19)</a>
                                        <a class="widget-category-item" href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm4.png" alt="Icon"></span>
                                            Digital Camera
                                            (25)
                                        </a>
                                        <a class="widget-category-item" href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm5.png" alt="Icon"></span>
                                            Gadgets (15)
                                        </a>
                                        <a class="widget-category-item" href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm6.png" alt="Icon"></span>
                                            Home
                                            Appliances (45)</a>
                                        <a class="widget-category-item" href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm7.png" alt="Icon"></span>
                                            Audio Record
                                            (25)
                                        </a>
                                        <a class="widget-category-item" href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm8.png" alt="Icon"></span>
                                            Computer/Laptop (08)</a>
                                    </div>
                                </div>

                                <div class="widget-item widget-item-one">
                                    <h3 class="widget-two-title text-black">Product Filter</h3>
                                    <div class="widget-filter-size">
                                        <h4 class="filter-size-title">Filter By Size</h4>
                                        <div class="filter-form-check">
                                            <input class="filter-form-check-input" type="checkbox"
                                                id="filterSizeChecked1">
                                            <label class="filter-form-check-label" for="filterSizeChecked1">All
                                                (65)</label>
                                        </div>
                                        <div class="filter-form-check">
                                            <input class="filter-form-check-input" type="checkbox"
                                                id="filterSizeChecked2">
                                            <label class="filter-form-check-label" for="filterSizeChecked2">Small
                                                (15)</label>
                                        </div>
                                        <div class="filter-form-check">
                                            <input class="filter-form-check-input" type="checkbox"
                                                id="filterSizeChecked3">
                                            <label class="filter-form-check-label" for="filterSizeChecked3">Medium
                                                (10)</label>
                                        </div>
                                        <div class="filter-form-check">
                                            <input class="filter-form-check-input" type="checkbox"
                                                id="filterSizeChecked4">
                                            <label class="filter-form-check-label" for="filterSizeChecked4">Lerge
                                                (22)</label>
                                        </div>
                                    </div>
                                    <div class="widget-price-filter pe-0">
                                        <h4 class="filter-price-title">Filter By Price</h4>
                                        <div class="slider-range" id="slider-range"></div>
                                        <div class="slider-labels">
                                            <p>Price:</p>
                                            <div class="caption">
                                                <span id="slider-range-value1"></span>
                                            </div>
                                            <span> - </span>
                                            <div class="caption">
                                                <span id="slider-range-value2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-item widget-item-one">
                                    <h3 class="widget-two-title text-black">New products</h3>
                                    <div class="widget-product-items">
                                        <a href="shop.html" class="widget-product-two-item">
                                            <div class="widget-product-two-thumb">
                                                <img src="<?= BASE_URL ?>/public/images/shop/w1.png" width="70"
                                                    height="70" alt="Image">
                                            </div>
                                            <div class="widget-product-content">
                                                <h5 class="widget-product-two-title">Android Phone New XP</h5>
                                                <span class="widget-product-two-price">$256.00</span>
                                            </div>
                                        </a>
                                        <a href="shop.html" class="widget-product-two-item">
                                            <div class="widget-product-two-thumb">
                                                <img src="<?= BASE_URL ?>/public/images/shop/w2.png" width="70"
                                                    height="70" alt="Image">
                                            </div>
                                            <div class="widget-product-content">
                                                <h5 class="widget-product-two-title">Digital Camera HYU-259Xl</h5>
                                                <span class="widget-product-two-price">$298.00</span>
                                            </div>
                                        </a>
                                        <a href="shop.html" class="widget-product-two-item">
                                            <div class="widget-product-two-thumb">
                                                <img src="<?= BASE_URL ?>/public/images/shop/w3.png" width="70"
                                                    height="70" alt="Image">
                                            </div>
                                            <div class="widget-product-content">
                                                <h5 class="widget-product-two-title">New Headphone Adi-25</h5>
                                                <span class="widget-product-two-price">$285.00</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-item mb-0 p-0">
                                    <div class="widget-banner product-banner-eight-item"
                                        data-bg-img="<?= BASE_URL ?>/public/images/shop/banner/20.png">
                                        <h5 class="product-banner-eight-desc text-primary">Sparing Sales</h5>
                                        <h2 class="product-banner-eight-title mt-n2">Mexi Phone With EMI</h2>
                                        <a class="btn product-banner-eight-btn" href="shop.html">Shop Now <i
                                                class="icon fa fa-arrow-right"></i></a>
                                        <img class="ms-1" src="<?= BASE_URL ?>/public/images/shop/banner/21.png"
                                            width="225" height="201" alt="Image-HasTech">
                                    </div>
                                </div>
                            </div>
                            <!--== End Sidebar Area Wrapper ==-->
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Product Area Wrapper ==-->
        </main>

    </div>
</body>

<!--== Start Footer Area Wrapper ==-->
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->


</html>