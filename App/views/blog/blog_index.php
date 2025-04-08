<!DOCTYPE html>
<html class="no-js" lang="zxx">


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
                                <h2 class="page-header-title">Bài Viết </h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Trang Chủ //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bài Viết</li>
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
                <div class="row">
                    <?php if (!empty($blog)): ?>
                        <?php foreach ($blog as $post): ?>
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <div class="blog-thumbnail">
                                        <img src="<?= htmlspecialchars($post['thumbnail']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="img-fluid">
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="blog-title"><?= htmlspecialchars($post['title']) ?></h3>
                                        <p class="blog-excerpt"><?= htmlspecialchars(substr($post['content'], 0, 100)) ?>...</p>
                                        <a href="/web_bandienthoai_mysql_php/blog/show?id=<?= $post['id'] ?>">Xem thêm →</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Không có bài viết nào.</p>
                    <?php endif; ?>
                </div>
            </div>

        </main>
    </div>
</body>
<!--== Start Footer Area Wrapper ==-->
<?php include_once(__DIR__ . '/../partical/footer.php'); ?>
<!--== End Footer Area Wrapper ==-->

</html>