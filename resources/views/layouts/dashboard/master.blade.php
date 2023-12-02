<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LokerIt.id - {{ $title }}</title>
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />    <!-- Data Table -->
    <link rel="icon" type="image/x-icon" href="{{ asset('landing/images/logo.png') }}" />
    <link rel="stylesheet" href="{{asset('dashboard/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
</head>

<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Main wrapper start -->
    <div id="main-wrapper">
        <!-- Nav header start -->
        <div class="nav-header d-flex justify-content-center align-items-center">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="{{ asset('landing/images/logo.png') }}" alt=""></b>
                    <span class="brand-title">
                        <img src="{{ asset('landing/images/logo-flat.png') }}" width="110px" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!-- Nav header end -->

        <!-- Header start -->
        <div class="header">
            <div class="header-content clearfix">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="dashboard/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i>
                                            <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html"><i class="icon-envelope-open"></i>
                                            <span>Inbox</span>
                                            <div class="badge gradient-3 badge-pill badge-primary">3</div>
                                            </a>
                                        </li>
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-login.html"><i class="icon-key"></i>
                                            <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header end ti-comment-alt -->

        <!-- Sidebar start -->
        <div class="nk-sidebar">
            @yield('sidebar-admin')
            @yield('sidebar-perusahaan')
        </div>
        <!-- Sidebar end -->

        <!-- Content body start -->
        <div class="content-body">
            @yield('content')
        </div>
        <!-- Content body end -->
    </div>


    <!-- Footer start -->
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018
            </p>
        </div>
        </div>
    <!-- Footer end -->
    </div>
    <!-- Main wrapper end -->

    @include('sweetalert::alert')

    <!-- Scripts -->
    <script src="{{asset('dashboard/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('dashboard/js/custom.min.js')}}"></script>
    <script src="{{asset('dashboard/js/settings.js')}}"></script>
    <script src="{{asset('dashboard/js/styleSwitcher.js')}}"></script>
    <script src="{{asset('dashboard/plugins/highlightjs/highlight.pack.min.js')}}"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>

    <!-- Data Table -->
    <script src="{{asset('dashboard/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{asset('dashboard/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
    <script>
        (function($) {
            "use strict"
            new quixSettings({
                version: "light", //2 options "light" and "dark"
                layout: "vertical", //2 options, "vertical" and "horizontal"
                navheaderBg: "color_1", //have 10 options, "color_1" to "color_10"
                headerBg: "color_1", //have 10 options, "color_1" to "color_10"
                sidebarStyle: "full", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
                sidebarBg: "color_1", //have 10 options, "color_1" to "color_10"
                sidebarPosition: "static", //have two options, "static" and "fixed"
                headerPosition: "fixed", //have two options, "static" and "fixed"
                containerLayout: "wide", //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
                direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
            });
        })(jQuery);
    </script>
    @yield('addJavascript')
</body>

</html>
