<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from htmldemo.net/elehaus/elehaus/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 08:39:29 GMT -->
<?php include_once("partical/header.php"); ?>

<body>
    <!--== Wrapper Start ==-->
    <div class="wrapper">
        <?php include_once("partical/headerform.php"); ?>
        <main class="main-content">

            <!--== Start Page Header Area Wrapper ==-->
            <div class="page-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-header-content">
                                <h2 class="page-header-title">Liên Hệ </h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home ">Trang Chủ //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liên Hệ </li>
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

            <!--== Start My Account Wrapper ==-->
            <div class="account-area section-space">
                <div class="container">
                    <div class="myaccount-page-wrapper">
                        <div class="row">
                            <div class="col-lg-5 col-xl-4">
                                <div class="contact-info-area">
                                    <h3 class="contact-info-area-title text-black">Liên Hệ</h3>

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="<?= BASE_URL ?>/public/images/icons/pin2.png" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mb-2 mt-n1">Địa Chỉ</h4>
                                            <p>Thủ Đức <span>TP.HCM</span></p>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="<?= BASE_URL ?>/public/images/icons/call.png" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mb-2 mt-n1">Phone</h4>
                                            <a href="tel://+00123456789 ">0336656538</a>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="<?= BASE_URL ?>/public/images/icons/email.png" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mt-n1">Email</h4>
                                            <a href="mailto://demo@example.com">trinhtuandan1601@gmail.com</a>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                                <div class="contact-form-area">
                                    <h3 class="contact-form-title text-black">Liên Lạc Với Chúng Tôi</h3>
                                    <!--== Start Contact Form ==-->
                                    <form class="contact-form" id="contact-form"
                                        action="https://htmldemo.net/elehaus/elehaus/assets/php/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-input-item">
                                                    <input class="form-control" type="text" name="con_name" id="name"
                                                        placeholder="Họ Tên">
                                                    <i class="icon fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input-item">
                                                    <input class="form-control" type="email" name="con_email" id="mail"
                                                        placeholder="Gmail">
                                                    <i class="icon fa fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input-item">
                                            <input class="form-control" type="text" name="con_subject" id="subject"
                                                placeholder="Số Điện Thoại">
                                            <i class="icon fa fa-phone-square"></i>
                                        </div>
                                        <div class="form-input-item">
                                            <textarea class="form-control" name="con_message" id="message"
                                                placeholder="Nội Dung"></textarea>
                                        </div>
                                        <button class="btn btn-theme btn-submit mt-2" type="submit">Gửi<i
                                                class="icon fa fa-arrow-right"></i></button>
                                    </form>
                                    <!--== End Contact Form ==-->

                                    <!--== Message Notification ==-->
                                    <div class="form-message"></div>
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
<?php include_once("partical/footer.php"); ?>
<!--== End Footer Area Wrapper ==-->

</html>