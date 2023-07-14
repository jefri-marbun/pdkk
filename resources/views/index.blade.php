<!doctype html>
<html lang="en">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ URL::asset('resources/assets/images/favicon.png') }}">
		<!-- Title -->
		<title>{!! $title !!} | SILAT-NG - Sistem Informasi Izin Layanan Cepat</title>

		<!-- Link Of CSS --> 
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/remixicon.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/boxicons.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/iconsax.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/metismenu.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/simplebar.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/calendar.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('resources/assets/css/sweetalert2.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/jbox.all.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/editor.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/loaders.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/header.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/sidebar-menu.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/footer.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('resources/assets/css/responsive.css') }}">
        @yield('custom_style')
    </head>

    <body class="body-bg-f8faff">
		<!-- Start Preloader Area -->
		<div class="preloader">
            <img src="{{ URL::asset('resources/assets/images/preloader.png') }}" alt="main-logo">
        </div>
		<!-- End Preloader Area -->

		<!-- Start All Section Area -->
        <div class="all-section-area">
            <!-- Start Header Area -->
            <div class="header-area">
                <div class="container-fluid">
                    <div class="header-content-wrapper">
                        <div class="header-content d-flex justify-content-between align-items-center">
                            <div class="header-left-content d-flex">
                                <div class="responsive-burger-menu d-block d-lg-none">
                                    <span class="top-bar"></span>
                                    <span class="middle-bar"></span>
                                    <span class="bottom-bar"></span>
                                </div>
                                <div class="main-logo">
                                    {{-- <img src="{{ URL::asset('resources/assets/images/main-logo.svg') }}" alt="main-logo"> --}}
                                    <h2 style="color: #1A237E;">SILAT <sup>NG</sup> (SISTEM INFORMASI IZIN LAYANAN CEPAT)</h2>
                                </div>
                            </div>
                            
                            <div class="header-right-content d-flex align-items-center">
                                <div class="header-right-option notification-option messenger-option dropdown">
                                    <div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="messages-btn">
                                            <img src="{{ URL::asset('resources/assets/images/icon/message.svg') }}" alt="message">
                                            <span class="badge">3</span>
                                        </div>
                                    </div>
        
                                    <div class="dropdown-menu">
                                        <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                                            <span class="title d-inline-block">1 New Message</span>
                                            <span class="mark-all-btn d-inline-block">Clear All</span>
                                        </div>
        
                                        <div class="dropdown-wrap" data-simplebar>
                                            <a href="chat.html" class="dropdown-item d-flex">
                                                <div class="icon">
                                                    <img src="{{ URL::asset('resources/assets/images/user/user-1.png') }}" alt="user-1">
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">Alex Dew</span>
                                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                    <p class="sub-text mb-0">2 sec ago</p>
                                                </div>
                                            </a>
        
                                            <a href="chat.html" class="dropdown-item d-flex">
                                                <div class="icon">
                                                    <img src="{{ URL::asset('resources/assets/images/user/user-2.png') }}" alt="user-2">
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">Anne Kew</span>
                                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                    <p class="sub-text mb-0">5 sec ago</p>
                                                </div>
                                            </a>
        
                                            <a href="chat.html" class="dropdown-item d-flex">
                                                <div class="icon">
                                                    <img src="{{ URL::asset('resources/assets/images/user/user-3.png') }}" alt="user-3">
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">Huhon Smith</span>
                                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                    <p class="sub-text mb-0">3 min ago</p>
                                                </div>
                                            </a>
        
                                            <a href="chat.html" class="dropdown-item d-flex">
                                                <div class="icon">
                                                    <img src="{{ URL::asset('resources/assets/images/user/user-4.png') }}" alt="user-4">
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">Yelax Spin</span>
                                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                    <p class="sub-text mb-0">7 min ago</p>
                                                </div>
                                            </a>
        
                                            <a href="chat.html" class="dropdown-item d-flex">
                                                <div class="icon">
                                                    <img src="{{ URL::asset('resources/assets/images/user/user-5.png') }}" alt="user-5">
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">Steven</span>
                                                    <p class="m-0">Lorem ipsum dolor sit, amet consectetur</p>
                                                    <p class="sub-text mb-0">1 sec ago</p>
                                                </div>
                                            </a>
                                        </div>
        
                                        <div class="dropdown-footer">
                                            <a href="chat.html" class="dropdown-item">View All</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Start Notification -->
                                <div class="header-right-option notification-option dropdown">
                                    <div class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="notification-btn">
                                            <img src="{{ URL::asset('resources/assets/images/icon/notification.svg') }}" alt="notification">
                                            <span class="badge">4</span>
                                        </div>
                                    </div>
        
                                    <div class="dropdown-menu">
                                        <div class="dropdown-header d-flex justify-content-between align-items-center bg-linear">
                                            <span class="title d-inline-block">6 New Notifications</span>
                                            <span class="mark-all-btn d-inline-block">Mark all as read</span>
                                        </div>
        
                                        <div class="dropdown-wrap" data-simplebar>
                                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                                <div class="icon">
                                                    <i class='bx bx-message-rounded-dots'></i>
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">Just sent a new message!</span>
                                                    <p class="sub-text mb-0">2 sec ago</p>
                                                </div>
                                            </a>
        
                                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                                <div class="icon">
                                                    <i class='bx bx-user'></i>
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">New customer registered</span>
                                                    <p class="sub-text mb-0">5 sec ago</p>
                                                </div>
                                            </a>
        
                                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                                <div class="icon">
                                                    <i class='bx bx-layer'></i>
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">Apps are ready for update</span>
                                                    <p class="sub-text mb-0">3 min ago</p>
                                                </div>
                                            </a>
        
                                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                                <div class="icon">
                                                    <i class='bx bx-hourglass'></i>
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">Your item is shipped</span>
                                                    <p class="sub-text mb-0">7 min ago</p>
                                                </div>
                                            </a>
        
                                            <a href="inbox.html" class="dropdown-item d-flex align-items-center">
                                                <div class="icon">
                                                    <i class='bx bx-comment-dots'></i>
                                                </div>
        
                                                <div class="content">
                                                    <span class="d-block">Steven commented on your post</span>
                                                    <p class="sub-text mb-0">1 sec ago</p>
                                                </div>
                                            </a>
                                        </div>
        
                                        <div class="dropdown-footer">
                                            <a href="inbox.html" class="dropdown-item">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Notification -->

                                <!-- Start Profile Menu -->
                                <div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
                                    <a class="dropdown-item dropdown-toggle avatar d-flex align-items-center" href="#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ URL::asset('resources/assets/images/avatar.png') }}" alt="avatar">
                                        <div class="d-none d-lg-block d-md-block">
                                            <h3>Joven</h3>
                                            <span>Pengusaha</span>
                                        </div>
                                    </a>
        
                                    <div class="dropdown-menu">
                                        <div class="dropdown-header d-flex flex-column align-items-center">
                                            <div class="figure mb-3">
                                                <img src="{{ URL::asset('resources/assets/images/avatar.png') }}" class="rounded-circle" alt="avatar">
                                            </div>
        
                                            <div class="info text-center">
                                                <span class="name">Joven</span>
                                                <p class="mb-3 email">
                                                    <a href="mailto:{{ session('email') }}">{{ session('email') }}</a>
                                                </p>
                                            </div>
                                            
                                        </div>
        
                                        <div class="dropdown-wrap">
                                            <ul class="profile-nav p-0 pt-3">
                                                <li class="nav-item">
                                                    <a href="profile.html" class="nav-link">
                                                        <i class="ri-user-line"></i> 
                                                        <span>Profile</span>
                                                    </a>
                                                </li>
        
                                                <li class="nav-item">
                                                    <a href="inbox.html" class="nav-link">
                                                        <i class="ri-mail-send-line"></i> 
                                                        <span>My Inbox</span>
                                                    </a>
                                                </li>
        
                                                <li class="nav-item">
                                                    <a href="edit-profile.html" class="nav-link">
                                                        <i class="ri-edit-box-line"></i> 
                                                        <span>Edit Profile</span>
                                                    </a>
                                                </li>
        
                                                <li class="nav-item">
                                                    <a href="edit-profile.html" class="nav-link">
                                                        <i class="ri-settings-5-line"></i> 
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
        
                                        <div class="dropdown-footer">
                                            <ul class="profile-nav">
                                                <li class="nav-item">
                                                    <a href="{{ URL::route('logout') }}" class="nav-link">
                                                        <i class="ri-login-circle-line"></i> 
                                                        <span>Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Profile Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Area -->

            <!-- Start Sidebar Menu Area -->
            <nav class="sidebar-menu">
                <ul class="list-group flex-column d-inline-block first-menu" data-simplebar>
                    {{-- <li class="list-group-item main-grid {!! Route::currentRouteName() == 'dashboard' ? 'active' : '' !!}">
                        <a href="{!! URL::route('dashboard') !!}" class="icon">
                            <img src="{{ URL::asset('resources/assets/images/icon/element.svg') }}" alt="element">
                        </a>
                    </li> --}}

                    <li class="list-group-item main-grid {!! Route::currentRouteName() == 'siup_migrasi_pit' || Route::currentRouteName() == 'siup_migrasi_pit_operation' ? 'active' : '' !!}">
                        <a href="#" class="icon">
                            <img src="{{ URL::asset('resources/assets/images/icon/document-copy.svg') }}" alt="document-copy">
                        </a>
                        <ul class="list-group flex-column d-inline-block submenu" data-simplebar>
                            <li class="list-group-item {!! Route::currentRouteName() == 'siup_migrasi_pit' || Route::currentRouteName() == 'siup_migrasi_pit_operation' ? 'active' : '' !!}">
                                <a href="{!! URL::route('siup_migrasi_pit') !!}">SIUP Migrasi PIT</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" style="color: #e4e3e3">SIUP Baru</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" style="color: #e4e3e3">SIUP PIT Perubahan</a>
                            </li> 
                            <li class="list-group-item">
                                <a href="#" style="color: #e4e3e3">SIUP PIT Perpanjangan</a>
                            </li> 
                            <li class="list-group-item">
                                <a href="#" style="color: #e4e3e3">SIUP Pencabutan</a>
                            </li> 
                            <li class="list-group-item">
                                <a href="#" style="color: #e4e3e3">SIUP PIT Mapping Kapal</a>
                            </li> 
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar Menu Area -->

            <!-- Start Main Content Area -->
            <main class="main-content-wrap">
                <!-- Start Content -->
                @yield('content')
                <!-- End Content -->

                <!-- Start Footer Area -->
                <div class="footer-area">
                    <div class="container-fluid">
                        <div class="footer-content">
                            <p>&copy; {!! date('Y') !!} SILAT <sup>NG</sup> (SISTEM INFORMASI IZIN LAYANAN CEPAT)</p>
                        </div>
                    </div>
                </div>
                <!-- End Footer Area -->
            </main>
            <!-- End Main Content Area -->
        </div>
        <!-- End All Section Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
        <script src="{{ URL::asset('resources/assets/js/jquery.min.js') }}"></script> 
        <script src="{{ URL::asset('resources/assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ URL::asset('resources/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/metismenu.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/simplebar.min.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/geticons.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/calendar.js') }}"></script>
        <script src="{{ URL::asset('resources/assets/js/editor.js') }}"></script>
		<script src="{{ URL::asset('resources/assets/js/form-validator.min.js') }}"></script>
		<script src="{{ URL::asset('resources/assets/js/ajaxchimp.min.js') }}"></script>
		<script src="{{ URL::asset('resources/assets/js/custom.js') }}"></script>
        @yield('custom_script')
    </body>
</html>