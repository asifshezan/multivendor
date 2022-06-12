<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>Dashboard | Minia - Minimal Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('contents/admin')}}/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{asset('contents/admin')}}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{asset('contents/admin')}}/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('contents/admin')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('contents/admin')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('contents/admin')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('contents/admin')}}/images/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('contents/admin')}}/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Minia</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('contents/admin')}}/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">Shawn L.</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="{{ route('admin.dashboard.index') }}">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-apps">Users</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('user.index') }}">
                                            <span data-key="t-calendar">All User</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('user.create') }}">
                                            <span data-key="t-chat">Add User</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">Products</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('product.create') }}" data-key="t-login">Add New Products</a></li>
                                    <li><a href="{{ route('product.index') }}" data-key="t-register">All Product</a></li>
                                    <li><a href="{{ route('category.index') }}" data-key="t-recover-password">Category</a></li>
                                    <li><a href="{{ route('brand.index') }}" data-key="t-lock-screen">Brand</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-seller">Partner</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('partner.index') }}">
                                            <span data-key="t-calendar">All Partner</span>
                                        </a>
                                    </li>
                                    <li><a href="{{ route('partner.create') }}">Add Partner</a></li>
                                </ul>
                            </li>

                            <li class="menu-title mt-2" data-key="t-components">Advance Manage</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="briefcase"></i>
                                    <span data-key="t-components">Banner</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('banner.index') }}" data-key="t-alerts">All Banner</a></li>
                                    <li><a href="{{ route('banner.create') }}" data-key="t-buttons">Add Banner</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="gift"></i>
                                    <span data-key="t-ui-elements">Seller</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="extended-lightbox.html" data-key="t-lightbox">All Seller</a></li>
                                    <li><a href="extended-rangeslider.html" data-key="t-range-slider">Add Seller</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="box"></i>
                                    <span data-key="t-forms">Settings</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html" data-key="t-form-elements">Basic Information</a></li>
                                    <li><a href="form-validation.html" data-key="t-form-validation">Contact Information</a></li>
                                    <li><a href="form-advanced.html" data-key="t-form-advanced">Social Media</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="cpu"></i>
                                    <span data-key="t-icons">Blank</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="map"></i>
                                    <span data-key="t-maps">Recycle Bin</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="share-2"></i>
                                    <span data-key="t-multi-level">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                    @yield('content')

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Minia.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('contents/admin')}}/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="{{asset('contents/admin')}}/libs/pace-js/pace.min.js"></script>

        <!-- apexcharts -->
        <script src="{{asset('contents/admin')}}/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="{{asset('contents/admin')}}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{asset('contents/admin')}}/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="{{asset('contents/admin')}}/js/pages/dashboard.init.js"></script>

        <script src="{{asset('contents/admin')}}/js/app.js"></script>
        <script src="{{asset('contents/admin')}}/js/custom.js"></script>

    </body>
</html>
