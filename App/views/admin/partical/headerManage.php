<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand">Nhóm 5 con báo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <?php if (isset($user) && $user): ?>
                    <!-- Hiển thị tên người dùng, vai trò và nút đăng xuất -->
                    <li class="nav-item d-flex align-items-center">
                        <span class="nav-link text-dark">
                            <i class="fas fa-user-circle"></i>
                            <?= htmlspecialchars($user['name'] ?? 'Admin') ?>
                            ( Vai Trò: <?= htmlspecialchars($user['role'] ?? 'Không xác định') ?> )
                        </span>
                        <a class="nav-link text-danger" href="/logout">
                            <i class="fas fa-power-off"></i> Đăng Xuất
                        </a>
                    </li>
                <?php else: ?>
                    <!-- Hiển thị nút đăng nhập nếu chưa đăng nhập -->
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="/login">
                            <i class="fas fa-sign-in-alt"></i> Đăng Nhập
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</div>