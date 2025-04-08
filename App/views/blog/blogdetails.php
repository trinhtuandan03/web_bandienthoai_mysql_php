<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from htmldemo.net/elehaus/elehaus/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 08:39:32 GMT -->

<?php include_once(__DIR__ . '/../partical/header.php'); ?>

<body>
    <!--== Wrapper Start ==-->
    <div class="wrapper">
        <?php include_once(__DIR__ . '/../partical/headerform.php'); ?>
        <main class="main-content">

            <!--== Start Page Header Area Wrapper ==-->
            <div class="page-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-header-content">
                                <h2 class="page-header-title">Blog Details</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
            <div class="container">
                <?php if (!empty($blog)): ?>
                    <div class="blog-details">
                        <h1 class="blog-title"><?= htmlspecialchars($blog['title']) ?></h1>
                        <div class="blog-thumbnail">
                            <img src="<?= htmlspecialchars($blog['thumbnail']) ?>"
                                alt="<?= htmlspecialchars($blog['title']) ?>" class="img-fluid">
                        </div>
                        <div class="blog-meta">
                            <p><strong>Tác giả:</strong> <?= htmlspecialchars($blog['author']) ?></p>
                            <p><strong>Ngày tạo:</strong> <?= htmlspecialchars($blog['created_at']) ?></p>
                        </div>
                        <div class="blog-content">
                            <p><?= nl2br(htmlspecialchars($blog['content'])) ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <p>Bài viết không tồn tại hoặc có lỗi xảy ra.</p>
                <?php endif; ?>
            </div>

        </main>
    </div>
</body>

<!--== Start Footer Area Wrapper ==-->
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->

</html>