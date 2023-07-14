<!doctype html>
<html lang="en">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php echo e(URL::asset('resources/assets/images/favicon.png')); ?>">
		<!-- Title -->
		<title><?php echo $title; ?> | SILAT-NG - Sistem Informasi Izin Layanan Cepat</title>

		<!-- Link Of CSS --> 
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/bootstrap.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/owl.theme.default.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/owl.carousel.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/animate.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/remixicon.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/boxicons.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/iconsax.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/metismenu.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/simplebar.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/calendar.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/sweetalert2.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/jbox.all.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/editor.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/font-awesome.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/loaders.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/header.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/sidebar-menu.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/footer.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/style.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('resources/assets/css/responsive.css')); ?>">
        <style>
            @media only screen and (min-width: 1000px) and (max-width: 1000px) {
                body {
                    overflow: hidden;
                }
            }
        </style>
    </head>

    <body class="body-bg-f8faff">
		<!-- Start Preloader Area -->
        <div class="preloader">
            <img src="<?php echo e(URL::asset('resources/assets/images/preloader.png')); ?>" alt="main-logo">
        </div>
		<!-- End Preloader Area -->

		<!-- Start Account Area -->
        <div class="account-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="account-content">
                            <div class="account-header">
                                <a href="index.html">
                                    <img src="<?php echo e(URL::asset('resources/assets/images/login.png')); ?>" alt="main-logo" style="max-width:75px;">
                                </a>
                            </div>
        
                            <form id="loginForm" class="account-wrap" action="do_login" method="POST" style="max-width: 300px; margin: 0 auto;">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" name="r" value="<?php echo e(\Request::get('r')); ?>">
                                <div class="form-group mb-24 icon">
                                    <input type="text" name="username" class="form-control" placeholder="Nama Pengguna">
                                    <img src="<?php echo e(URL::asset('resources/assets/images/icon/username.png')); ?>" alt="username" style="max-width: 24px;">
                                </div>
                                <div class="form-group mb-24 icon">
                                    <input type="password" name="password" class="form-control" placeholder="Kata Sandi">
                                    <img src="<?php echo e(URL::asset('resources/assets/images/icon/password.png')); ?>" alt="key" style="max-width: 24px;">
                                </div>
                                <div class="form-group mb-24">
                                    <center><?php echo $captcha['image']; ?></center>
                                </div>
                                <div class="form-group mb-24 icon">
                                    <input type="text" name="captchacode" class="form-control" placeholder="Konfirmasi Kode">
                                    <img src="<?php echo e(URL::asset('resources/assets/images/icon/captcha.png')); ?>" alt="key" style="max-width: 25px;">
                                </div>
                                <div class="form-group mb-24">
                                    <button id="login" class="default-btn">Masuk</button>
                                </div>
                                <div class="form-group mb-20 text-center">
                                    <p class="account">&copy; <?php echo date('Y'); ?> SILAT <sup>NG</sup> ( SISTEM INFORMASI IZIN LAYANAN CEPAT )</p>
                                    <p style="font-size: 9px;">
                                        Hak Cipta Oleh Direktorat Perizinan dan Kenelayanan | Direktorat Jenderal Perikanan Tangkap | Kementerian Kelautan dan Perikanan
                                        <br/>Alamat: Gedung Mina Bahari II Lantai 8 | Jalan Medan Merdeka Timur No. 16 Jakarta Pusat 10110 | Telp/Fax +62 21 3519070, +62 21 3860536
                                        <br/>Email: hrp@kkp.go.id | Website: http://www.perizinan.kkp.go.id | WA Center: 082181008888
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!-- End Account Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
        <script src="<?php echo e(URL::asset('resources/assets/js/jquery.min.js')); ?>"></script> 
        <script src="<?php echo e(URL::asset('resources/assets/js/bootstrap.bundle.min.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('resources/assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('resources/assets/js/metismenu.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('resources/assets/js/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('resources/assets/js/geticons.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('resources/assets/js/sweetalert2.all.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('resources/assets/js/jbox.all.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('resources/assets/js/editor.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('resources/assets/js/form-validator.min.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('resources/assets/js/contact-form-script.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('resources/assets/js/ajaxchimp.min.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('resources/assets/js/custom.js')); ?>"></script>
        <script type="text/javascript">
            $(document).on('click', '#login', function(e) {
                e.preventDefault();
                var isSubmit = true;
                if ( $('input[name=username]').val() == '' ) {
                    isSubmit = false;
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi kesalahan ...',
                        text: 'Nama Pengguna tidak boleh kosong!',
                    });
                    $('input[name=username]').focus();
                    return false;
                }
                if ( $('input[name=password]').val() == '' ) {
                    isSubmit = false;
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi kesalahan ...',
                        text: 'Kata Sandi tidak boleh kosong!',
                    });
                    $('input[name=password]').focus();
                    return false;
                }
                if ( $('input[name=captchacode]').val() == '' ) {
                    isSubmit = false;
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi kesalahan ...',
                        text: 'Konfirmasi Kode tidak boleh kosong!',
                    });
                    $('input[name=username]').focus();
                    return false;
                }
                if ( isSubmit == true ) {
                    $("#loginForm").submit();
                }
            });
            <?php if( session()->has('success') ): ?>
                Swal.fire(
                    '',
                    '<?php echo e(session()->get("success")); ?>',
                    'success'
                );
            <?php endif; ?>
            <?php if( $errors->all() != null ): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Terjadi kesalahan ...',
                    text: '<?php echo $message; ?>',
                });
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </script>
    </body>
</html><?php /**PATH C:\laragon\www\kkp\resources\views/modules/login/index.blade.php ENDPATH**/ ?>