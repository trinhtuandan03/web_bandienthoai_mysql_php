<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/fonts/circular-std/style.css"
        rel="stylesheet">
    <link rel="stylesheet" href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/libs/css/style.css">
    <link rel="stylesheet"
        href="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Chi tiết người dùng</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <?php include __DIR__ . '/../partical/headerManage.php'; ?>
        <div class="nav-left-sidebar sidebar-dark">
            <?php include __DIR__ . '/../partical/menuManage.php'; ?>
        </div>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Chi tiết người dùng</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Thông tin người dùng</h5>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="userId">ID</label>
                                        <input type="text" class="form-control" id="userId" value="<?php echo htmlspecialchars($user['id']); ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Tên đăng nhập</label>
                                        <input type="text" class="form-control" id="username" value="<?php echo htmlspecialchars($user['username']); ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname">Họ và tên</label>
                                        <input type="text" class="form-control" id="fullname" value="<?php echo htmlspecialchars($user['fullname']); ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Vai trò</label>
                                        <input type="text" class="form-control" id="role" value="<?php echo htmlspecialchars($user['role']); ?>" readonly>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <?php include __DIR__ . '/../partical/footerManage.php'; ?>
            </div>
        </div>
    </div>
    <script src="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="http://localhost:8080/web_bandienthoai_mysql_php/public/admin/libs/js/main-js.js"></script>
</body>

</html>