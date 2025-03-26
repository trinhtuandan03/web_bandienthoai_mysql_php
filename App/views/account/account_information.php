<!DOCTYPE html>
<html class="no-js" lang="zxx">
    
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
            <div class="header-middle">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo-area">
                                <a href="index.html">
                                    <img class="logo-main" src="/public/images/logo.png" width="182" height="31"
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
                                        <a href="shop.html"> <span class="icon"><img src="/public/images/icons/vm1.png"
                                                    alt="Icon"></span> Headphone</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="/public/images/icons/vm2.png"
                                                    alt="Icon"></span> Video Game</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="/public/images/icons/vm3.png"
                                                    alt="Icon"></span> Protable Speakers
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="/public/images/icons/vm4.png"
                                                    alt="Icon"></span> Digital Camera
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="/public/images/icons/vm5.png"
                                                    alt="Icon"></span> Gadgets</a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="/public/images/icons/vm6.png"
                                                    alt="Icon"></span> Home Appliances
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="/public/images/icons/vm7.png"
                                                    alt="Icon"></span> Audio Record
                                        </a>
                                    </li>
                                    <li class="vmenu-item">
                                        <a href="shop.html"> <span class="icon"><img src="/public/images/icons/vm8.png"
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
                                <h2 class="page-header-title">My Account</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Account</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="page-header-thumb">
                                <img src="/public/images/photos/page-title.png" alt="Image-HasTech" width="546"
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
                            <div class="col-lg-3 col-md-4">
                                <nav class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="myaccount-nav-link active" id="dashboad-tab" data-bs-toggle="tab"
                                        data-bs-target="#dashboad" type="button" role="tab" aria-controls="dashboad"
                                        aria-selected="true">Dashboard</button>
                                    <button class="myaccount-nav-link" id="orders-tab" data-bs-toggle="tab"
                                        data-bs-target="#orders" type="button" role="tab" aria-controls="orders"
                                        aria-selected="false"> Orders</button>
                                    <button class="myaccount-nav-link" id="download-tab" data-bs-toggle="tab"
                                        data-bs-target="#download" type="button" role="tab" aria-controls="download"
                                        aria-selected="false">Download</button>
                                    <button class="myaccount-nav-link" id="payment-method-tab" data-bs-toggle="tab"
                                        data-bs-target="#payment-method" type="button" role="tab"
                                        aria-controls="payment-method" aria-selected="false">Payment Method</button>
                                    <button class="myaccount-nav-link" id="address-edit-tab" data-bs-toggle="tab"
                                        data-bs-target="#address-edit" type="button" role="tab"
                                        aria-controls="address-edit" aria-selected="false">address</button>
                                    <button class="myaccount-nav-link" id="account-info-tab" data-bs-toggle="tab"
                                        data-bs-target="#account-info" type="button" role="tab"
                                        aria-controls="account-info" aria-selected="false">Account Details</button>
                                    <a class="myaccount-nav-link" href="login-register.html">Logout</a>
                                </nav>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel"
                                        aria-labelledby="dashboad-tab">
                                        <div class="myaccount-content">
                                            <h3>Dashboard</h3>
                                            <div class="welcome">
                                                <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni
                                                        !</strong><a href="login-register.html" class="logout">
                                                        Logout</a>)</p>
                                            </div>
                                            <p class="mb-0">From your account dashboard. you can easily check & view
                                                your recent orders, manage your shipping and billing addresses and edit
                                                your password and account details.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>
                                            <table
                                                class="myaccount-table table-responsive text-center table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Aug 22, 2022</td>
                                                        <td>Pending</td>
                                                        <td>$3000</td>
                                                        <td><a href="shop-cart.html" class="check-btn sqr-btn ">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>July 22, 2022</td>
                                                        <td>Approved</td>
                                                        <td>$200</td>
                                                        <td><a href="shop-cart.html" class="check-btn sqr-btn ">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>June 12, 2017</td>
                                                        <td>On Hold</td>
                                                        <td>$990</td>
                                                        <td><a href="shop-cart.html" class="check-btn sqr-btn ">View</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="download" role="tabpanel"
                                        aria-labelledby="download-tab">
                                        <div class="myaccount-content">
                                            <h3>Downloads</h3>
                                            <table
                                                class="myaccount-table table-responsive text-center table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Kuster - Kitchen & Home Appliances</td>
                                                        <td>Aug 11, 2022</td>
                                                        <td>Yes</td>
                                                        <td><a href="#/" class="check-btn sqr-btn"><i
                                                                    class="fa fa-cloud-download"></i> Download File</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>HasTech - Profolio Business Template</td>
                                                        <td>Sep 12, 2022</td>
                                                        <td>Never</td>
                                                        <td><a href="#/" class="check-btn sqr-btn"><i
                                                                    class="fa fa-cloud-download"></i> Download File</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel"
                                        aria-labelledby="payment-method-tab">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>
                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel"
                                        aria-labelledby="address-edit-tab">
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>
                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                            </address>
                                            <a href="index.html" class="check-btn sqr-btn"><i class="fa fa-edit"></i>
                                                Edit Address</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-info" role="tabpanel"
                                        aria-labelledby="account-info-tab">
                                        <div class="myaccount-content">
                                            <h3>Account Details</h3>
                                            <form class="account-details-form mt-4" action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">First Name</label>
                                                            <input type="text" id="first-name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">Last Name</label>
                                                            <input type="text" id="last-name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Display Name</label>
                                                    <input type="text" id="display-name" />
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="email" class="required">Email Addres</label>
                                                    <input type="email" id="email" />
                                                </div>
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="single-input-item">
                                                        <label for="current-pwd" class="required">Current
                                                            Password</label>
                                                        <input type="password" id="current-pwd" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="new-pwd" class="required">New
                                                                    Password</label>
                                                                <input type="password" id="new-pwd" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="confirm-pwd" class="required">Confirm
                                                                    Password</label>
                                                                <input type="password" id="confirm-pwd" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="single-input-item">
                                                    <button class="check-btn sqr-btn">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->

</html>