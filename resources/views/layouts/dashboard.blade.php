<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard_assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href=" {{ asset('dashboard_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('dashboard_assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('dashboard_assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href=" {{ asset('dashboard_assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src=" {{ asset('dashboard_assets/js/modernizr.min.js') }}"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{ asset('dashboard_assets/images/logo.png') }}" alt="" height="25">
                    </span>
                    <i>
                        <img src="{{ asset('dashboard_assets/images/logo-sm.png') }}" alt="" height="28">
                    </i>
                </a>
            </div>
            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-pink noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg"
                            aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1
                                        min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">1 min
                                        ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1
                                        min ago</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>{{ Auth::user()->name }}</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                            </a>

                            <!-- item-->


                            <form action="{{ route('logout') }}" method="POST">
                              @csrf  


                              <a   class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                             </a>

                            </form>


                           

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Navigation</li>
                        <li>
                            <a href="{{ route('dashboard') }}"> <i class="fi-air-play"></i><span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('categories.index') }}"><i class="fi-help"></i><span> Category </span></a>
                        </li>

                        <li>
                            <a href="{{ route('faq.index') }}"><i class="fi-help"></i><span> FAQ </span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);"><i class="fi-box"></i><span> Dropdown </span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="icons-colored.html">Colored Icons</a></li>
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                <li><a href="icons-feather.html">Feather Icons</a></li>
                                <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                <li><a href="icons-flags.html">Flag Icons</a></li>
                                <li><a href="icons-file.html">File Icons</a></li>
                                <li><a href="icons-pe7.html">PE7 Icons</a></li>
                                <li><a href="icons-typicons.html">Typicons</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title float-left">Starter Page</h4>

                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Starter Page</li>
                                </ol>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-------Page Content Start ------>

                    @yield('content')
                    
                    <!-------Page Content End -------->

                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2017 © Adminox. - Coderthemes.com
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- jQuery  -->
    <script src="{{ asset('dashboard_assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
    <script src="{{ asset('dashboard_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/waves.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/jquery.slimscroll.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('dashboard_assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/jquery.app.js') }}"></script>

</body>

</html>
