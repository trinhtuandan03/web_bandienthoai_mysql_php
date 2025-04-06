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
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm1.png" alt="Icon"></span>
                                            Headphone</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm2.png" alt="Icon"></span>
                                            Video Game</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm3.png" alt="Icon"></span>
                                            Protable Speakers
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm4.png" alt="Icon"></span>
                                            Digital Camera
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm5.png" alt="Icon"></span>
                                            Gadgets</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm6.png" alt="Icon"></span>
                                            Home Appliances
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm7.png" alt="Icon"></span>
                                            Audio Record
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img
                                                    src="<?= BASE_URL ?>/public/images/icons/vm8.png" alt="Icon"></span>
                                            Computer/Laptop
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
                                <h2 class="page-header-title">Cart</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
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

            <!--== Start Product Cart Area Wrapper ==-->
            <div class="product-area section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-table-wrap">
                                <div class="table-responsive">
                                    <table class="cart-table">
                                        <thead>
                                            <tr>
                                                <th class="width-thumbnail"></th>
                                                <th class="width-name">Product</th>
                                                <th class="width-price"> Price</th>
                                                <th class="width-quantity">Quantity</th>
                                                <th class="width-subtotal">Subtotal</th>
                                                <th class="width-remove"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="shop-single-product.html"><img class="w-100"
                                                            src="<?= BASE_URL ?>/public/images/shop/w1.png" alt="Image"
                                                            width="96" height="96"></a>
                                                </td>
                                                <td class="product-name">
                                                    <h5><a href="shop-single-product.html">D-Phone Android</a></h5>
                                                </td>
                                                <td class="product-price"><span class="amount">$120.00</span></td>
                                                <td class="cart-quality">
                                                    <div class="product-details-quality">
                                                        <div class="pro-qty">
                                                            <input type="text" title="Quantity" value="1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-total"><span>$120.00</span></td>
                                                <td class="product-remove"><a href="#/"><i
                                                            class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="shop-single-product.html"><img class="w-100"
                                                            src="<?= BASE_URL ?>/public/images/shop/w2.png" alt="Image"
                                                            width="96" height="96"></a>
                                                </td>
                                                <td class="product-name">
                                                    <h5><a href="shop-single-product.html">Digital Lens Camera</a></h5>
                                                </td>
                                                <td class="product-price"><span class="amount">$120.00</span></td>
                                                <td class="cart-quality">
                                                    <div class="product-details-quality">
                                                        <div class="pro-qty">
                                                            <input type="text" title="Quantity" value="1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-total"><span>$120.00</span></td>
                                                <td class="product-remove"><a href="#/"><i
                                                            class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="shop-single-product.html"><img class="w-100"
                                                            src="<?= BASE_URL ?>/public/images/shop/w3.png" alt="Image"
                                                            width="96" height="96"></a>
                                                </td>
                                                <td class="product-name">
                                                    <h5><a href="shop-single-product.html">Headphone Supersonic</a></h5>
                                                </td>
                                                <td class="product-price"><span class="amount">$120.00</span></td>
                                                <td class="cart-quality">
                                                    <div class="product-details-quality">
                                                        <div class="pro-qty">
                                                            <input type="text" title="Quantity" value="1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-total"><span>$120.00</span></td>
                                                <td class="product-remove"><a href="#/"><i
                                                            class="fa fa-trash-o"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-btn continure-btn">
                                    <a class="btn btn-link" href="shop.html"><i class="fa fa-angle-left"></i> Back To
                                        Shop</a>
                                </div>
                                <div class="cart-shiping-btn update-btn">
                                    <a class="btn btn-link" href="shop.html"><i class="fa fa-repeat"></i> Back To
                                        Shop</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="cart-calculate-discount-wrap mb-40">
                                <h4>Calculate shipping </h4>
                                <div class="calculate-discount-content">
                                    <div class="select-style">
                                        <select class="select-active">
                                            <option>Bangladesh</option>
                                            <option>Bahrain</option>
                                            <option>Azerbaijan</option>
                                            <option>Barbados</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                    <div class="select-style">
                                        <select class="select-active">
                                            <option>State / County</option>
                                            <option>Bahrain</option>
                                            <option>Azerbaijan</option>
                                            <option>Barbados</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                    <div class="input-style">
                                        <input type="text" placeholder="Town / City">
                                    </div>
                                    <div class="input-style mb-6">
                                        <input type="text" placeholder="Postcode / ZIP">
                                    </div>
                                    <div class="calculate-discount-btn">
                                        <a class="btn btn-link" href="#/">Update</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="cart-calculate-discount-wrap mb-40 mt-10 mt-md-0">
                                <h4>Coupon Discount </h4>
                                <div class="calculate-discount-content">
                                    <p>Enter your coupon code if you have one.</p>
                                    <div class="input-style mb-6">
                                        <input type="text" placeholder="Coupon code">
                                    </div>
                                    <div class="calculate-discount-btn">
                                        <a class="btn btn-link" href="#/">Apply Coupon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="grand-total-wrap mt-10 mt-lg-0">
                                <div class="grand-total-content">
                                    <h5>Subtotal <span>$180.00</span></h5>
                                    <div class="grand-shipping">
                                        <span>Shipping</span>
                                        <ul>
                                            <li><input type="radio" name="shipping" value="info"
                                                    checked="checked"><label>Free shipping</label></li>
                                            <li><input type="radio" name="shipping" value="info"
                                                    checked="checked"><label>Flat rate: <span>$100.00</span></label>
                                            </li>
                                            <li><input type="radio" name="shipping" value="info"
                                                    checked="checked"><label>Local pickup: <span>$120.00</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="shipping-country">
                                        <p>Shipping to Bangladesh</p>
                                    </div>
                                    <div class="grand-total">
                                        <h4>Total <span>$185.00</span></h4>
                                    </div>
                                </div>
                                <div class="grand-total-btn">
                                    <a class="btn btn-link" href="shop-checkout.html">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Product Cart Area Wrapper ==-->

        </main>
    </div>

</body>

<!--== Start Footer Area Wrapper ==-->
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->

</html>