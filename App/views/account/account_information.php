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
                    </div>
                </div>
            </div>
            <div class="header-area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
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
                                        aria-selected="true">Bảng điều khiển</button>
                                    <button class="myaccount-nav-link" id="orders-tab" data-bs-toggle="tab"
                                        data-bs-target="#orders" type="button" role="tab" aria-controls="orders"
                                        aria-selected="false">Đơn hàng</button>
                                    <button class="myaccount-nav-link" id="download-tab" data-bs-toggle="tab"
                                        data-bs-target="#download" type="button" role="tab" aria-controls="download"
                                        aria-selected="false">Tải xuống</button>
                                    <button class="myaccount-nav-link" id="payment-method-tab" data-bs-toggle="tab"
                                        data-bs-target="#payment-method" type="button" role="tab"
                                        aria-controls="payment-method" aria-selected="false">Phương thức thanh
                                        toán</button>
                                    <button class="myaccount-nav-link" id="address-edit-tab" data-bs-toggle="tab"
                                        data-bs-target="#address-edit" type="button" role="tab"
                                        aria-controls="address-edit" aria-selected="false">Địa chỉ</button>
                                    <button class="myaccount-nav-link" id="account-info-tab" data-bs-toggle="tab"
                                        data-bs-target="#account-info" type="button" role="tab"
                                        aria-controls="account-info" aria-selected="false">Chi tiết tài khoản</button>
                                    <a class="myaccount-nav-link" href="/web_bandienthoai_mysql_php/account/logout">Đăng
                                        xuất</a>
                                </nav>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- Dashboard Tab -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel"
                                        aria-labelledby="dashboad-tab">
                                        <div class="myaccount-content">
                                            <h3>Thông Tin Tài Khoản</h3>
                                            <div class="account-details">
                                                <?php if (isset($user)): ?>
                                                    <p><strong>Tên đăng nhập:</strong>
                                                        <?php echo htmlspecialchars($user['username'] ?? 'Không xác định'); ?>
                                                    </p>
                                                    <p><strong>Họ và tên:</strong>
                                                        <?php echo htmlspecialchars($user['fullname'] ?? 'Không xác định'); ?>
                                                    </p>
                                                    <p><strong>Vai trò:</strong>
                                                        <?php echo htmlspecialchars($user['role'] ?? 'Không xác định'); ?>
                                                    </p>
                                                <?php else: ?>
                                                    <p class="text-danger">Không thể tải thông tin tài khoản. Vui lòng thử
                                                        lại sau.</p>
                                                <?php endif; ?>
                                            </div>
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

<?php include_once(__DIR__ . '/../partical/footer.php'); ?>

</html>