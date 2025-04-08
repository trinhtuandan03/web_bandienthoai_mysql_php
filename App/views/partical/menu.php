<ul class="main-nav d-flex align-items-center">
        <li class="main-nav-item has-submenu"><a class="main-nav-link" href="/web_bandienthoai_mysql_php/home">Trang
                        Chủ</a></li>
        <li class="main-nav-item"><a class="main-nav-link" href="/web_bandienthoai_mysql_php/about">Thành Viên</a></li>
        <li class="main-nav-item has-submenu position-static"><a class="main-nav-link"
                        href="/web_bandienthoai_mysql_php/product">Sản Phẩm</a></li>
        <li class="main-nav-item has-submenu"><a class="main-nav-link" href="/web_bandienthoai_mysql_php/blog">Bài
                        Viết</a></li>
        <li class="main-nav-item"><a class="main-nav-link" href="/web_bandienthoai_mysql_php/lienhe">Liên Hệ</a></li>

        <!-- Thêm giỏ hàng và lịch sử đơn hàng -->
        <li class="main-nav-item has-submenu cart-dropdown">
                <a class="main-nav-link" href="#">
                        <i class="fa fa-shopping-cart fa-2x"></i>
                </a>
        </li>

        <!-- Hiển thị thông tin người dùng sau khi đăng nhập -->
        <li class="main-nav-item user-info d-flex align-items-center ms-auto">
                <?php if (isset($_SESSION['user'])): ?>
                        <div class="header-action-user d-flex align-items-center gap-2">
                                <a href="/web_bandienthoai_mysql_php/account" class="d-flex align-items-center">
                                        <i class="icon icon-user me-1"></i>
                                        <span style="color: rgb(92, 5, 241);">
                                                <?php echo htmlspecialchars($_SESSION['user']['fullname'] ?? 'Người dùng'); ?>
                                        </span>
                                </a>
                                <a href="/web_bandienthoai_mysql_php/account/logout" title="Đăng xuất" class="ms-2"
                                        style="font-size: 20px; color: rgb(245, 12, 12);">
                                        <i class="fa fa-power-off"></i>
                                </a>
                        </div>
                <?php else: ?>
                        <a href="/web_bandienthoai_mysql_php/account/login"
                                class="header-action-user d-flex align-items-center">
                                <i class="icon icon-user me-1"></i> Đăng nhập
                        </a>
                <?php endif; ?>
        </li>
</ul>