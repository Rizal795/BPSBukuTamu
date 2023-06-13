<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>E-Tamu | Dashboard</title>
    <!-- Favicons -->
    <link href="tamu/img/Logo_BPS.png" rel="icon">
    <link href="tamu/img/Logo_BPS.png" rel="apple-touch-icon">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    @stack('css')
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header" >
            <div class="page-brand" style="background-color: #f8f8f9">
                <a class="link" href="{{ route('home') }}">
                    <span class="brand">
                        <img class="mb-3" src="{{ asset('login-asset/img/Logo_BPS.png') }}" style="width: 40px;" alt="logo">
                        <span class="brand-tip"><b>{{config('app.name')}}</b></span>
                    </span>
                    <span class="brand-mini">
                        <img class="mb-3" src="{{ asset('login-asset/img/Logo_BPS.png') }}" style="width: 30px;" alt="logo">
                    </span>
                </a>
            </div>
            <div class="flexbox flex-1" style="background-color: #23b7e5">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="./assets/img/admin-avatar.png" />
                            <span></span>{{ Auth::user()->name }}<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('user') }}"><i class="fa fa-user"></i>Profile</a>
                            {{-- <a class="dropdown-item" href="{{ route('user') }}"><i class="fa fa-cog"></i>Settings</a> --}}
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="fa fa-power-off"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        @includeIf('layouts.sidebar')
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            @yield('content')
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">Copyright <b>PKL IST 2023</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <script src="./assets/vendors/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
	<script src="{{asset('assets/vendors/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    {{-- <script src="./assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script> --}}
    @stack('js')
</body>

</html>