<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include_once(__DIR__ . '/../partical/header.php'); ?>

<body>
    <!--== Wrapper Start ==-->
    <div class="wrapper">
        <main class="main-content">
            <!--== Start Register Wrapper ==-->
            <div class="login-register-area section-space">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5 d-flex flex-column align-items-center">
                            <div class="login-register-content">
                                <div class="login-register-title mb-30">
                                    <h3>Đăng Ký</h3>
                                    <p>Tạo tài khoản mới ngay hôm nay để gặt hái những lợi ích của trải nghiệm mua sắm
                                        được cá nhân hóa.</p>
                                </div>
                                <div class="login-register-style">
                                    <form action="/web_bandienthoai_mysql_php/account/register" method="POST">
                                        <div class="login-register-input mb-3">
                                            <input type="text" name="username" placeholder="Tên đăng nhập"
                                                class="form-control" required>
                                        </div>
                                        <div class="login-register-input mb-3">
                                            <input type="text" name="fullname" placeholder="Họ và tên"
                                                class="form-control" required>
                                        </div>
                                        <div class="login-register-input mb-3">
                                            <input type="password" name="password" placeholder="Mật khẩu"
                                                class="form-control" required>
                                        </div>
                                        <div class="login-register-input mb-3">
                                            <input type="password" name="confirmpassword"
                                                placeholder="Xác nhận mật khẩu" class="form-control" required>
                                        </div>
                                        <div class="btn-register">
                                            <button type="submit" class="btn-register-now btn btn-primary w-100">
                                                Đăng Ký
                                            </button>
                                        </div>
                                    </form>
                                    <?php if (isset($errors) && !empty($errors)): ?>
                                        <div class="alert alert-danger mt-3">
                                            <?php foreach ($errors as $error): ?>
                                                <p><?php echo htmlspecialchars($error); ?></p>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Register Wrapper ==-->
        </main>
    </div>
</body>

</html>