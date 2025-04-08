<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php include_once(__DIR__ . '/../partical/header.php'); ?>

<body>
    <!--== Wrapper Start ==-->
    <div class="wrapper">
        <main class="main-content">
            <!--== Start Login Wrapper ==-->
            <div class="login-register-area section-space">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5 d-flex flex-column align-items-center ">
                            <div class="login-register-content">
                                <div class="login-register-title mb-30">
                                    <h3>Login</h3>
                                    <p>Welcome back! Please enter your username and password to login.</p>
                                </div>
                                <div class="login-register-style login-register-pr w-100">
                                    <form action="/web_bandienthoai_mysql_php/account/login" method="POST">
                                        <div class="login-register-input mb-3">
                                            <input type="text" id="username" name="username"
                                                placeholder="Username or email address" class="form-control" required>
                                        </div>
                                        <div class="login-register-input mb-3">
                                            <input type="password" id="password" name="password" placeholder="Password"
                                                class="form-control" required>
                                            <div class="forgot text-end mt-2">
                                                <a href="/web_bandienthoai_mysql_php/account/forgotPassword">Forgot?</a>
                                            </div>
                                        </div>
                                        <div class="remember-me-btn d-flex justify-content-center mb-3">
                                            <input id="remember-me-checkbox" type="checkbox" name="remember_me">
                                            <label for="remember-me-checkbox" class="ms-2">Remember me</label>
                                        </div>
                                        <div class="btn-register">
                                            <button type="submit"
                                                class="btn-register-now btn btn-primary w-100">Login</button>
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
            <!--== End Login Wrapper ==-->
        </main>
    </div>
</body>

</html>