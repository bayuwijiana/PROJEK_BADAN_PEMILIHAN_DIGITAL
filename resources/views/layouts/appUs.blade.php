<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BPD KABUPATEN BANYUMAS</title>
    <link rel="icon" href="assets2/img/logo.png" type="image/x-icon">
    <!-- loader-->
    <link href="/assets3/css/pace.min.css" rel="stylesheet" />
    <script src="/assets3/js/pace.min.js"></script>
    <!--favicon-->

    <!-- Vector CSS -->
    <link href="/assets3/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="/assets3/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="/assets3/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="/assets3/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="/assets3/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="/assets3/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="/assets3/css/app-style.css" rel="stylesheet" />

    <style>
        .oke {
            position: relative;
            -webkit-animation-name: example;
            /* Chrome, Safari, Opera */
            -webkit-animation-duration: 2s;
            /* Chrome, Safari, Opera */
            animation-name: example;
            animation-duration: 2s;
        }

        @-webkit-keyframes example {
            0% {
                top: 200px;
            }

            100% {
                top: -20px;
            }
        }

        .oke2 {
            background-color: white;
            border-radius: 20px;
            height: 40px;

        }

        .oke3 {
            border-radius: 20px;
            height: 100px;
            padding: 20px;

        }

        .has2 {
            background-color: white;
            color: black;
            border-radius: 30px;
        }

        .pan {
            border-radius: 20px;
            border: orange 3px solid;
            height: 100px;
            width: 800px;
            padding: 20px;


        }

        .log {
            height: 100px;
            margin-left: 10px;
            margin-right: 20px;

        }
    </style>
</head>

<body class="bg-theme bg-theme1">


    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="">
                    <img src="/assets2/img/kpu.png" style="height:40px">
                    <h5 class="logo-text">BPD BANYUMAS</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ Route('user.index') }}">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>DASHBOARD</span>
                    </a>
                </li>

                <li>
                    <a href="{{ Route('viewuser.index') }}">
                        <i class="zmdi zmdi-invert-colors"></i> <span>PEMILIHAN</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('viewuser.create') }}">
                        <i class="zmdi zmdi-grid"></i> <span>KANDIDAT</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pencoblosan.index') }}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>PENCOBLOSAN</span>
                        <small class="badge float-right badge-light">New</small>
                    </a>
                </li>
                <li>
                    <a href="/logout">
                        <i class="zmdi zmdi-calendar-check"></i> <span>LOG OUT</span>
                    </a>
                </li>



                <li class="sidebar-header">LABELS</li>
                <li><a href="fromemail"><i class="zmdi zmdi-coffee text-danger"></i>
                        <span>Kritikan</span></a>
                </li>
                <li>
                    <a href="{{ route('uspan.index') }}">
                        <i class="zmdi zmdi-share text-info"></i>
                        <span>Panduan</span>
                    </a>
                </li>

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
                            href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110"
                                    class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                            <p class="user-subtitle">mccoy@example.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                @yield('content')


                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="row m-0 row-group text-center border-top border-light-3">
                            </div>
                            <!--End Row-->


                            <!--End Dashboard Content-->

                            <!--start overlay-->
                            <div class="overlay toggle-menu"></div>
                            <!--end overlay-->

                        </div>
                        <!-- End container-fluid-->

                    </div>
                    <!--End content-wrapper-->
                    <!--Start Back To Top Button-->
                    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
                    <!--End Back To Top Button-->

                    <!--Start footer-->
                    <footer class="footer">
                        <div class="container">
                            <div class="text-center">
                                BPD 8.0 betha - version 2022
                            </div>
                        </div>
                    </footer>
                    <!--End footer-->

                    <!--start color switcher-->
                    <div class="right-sidebar">
                        <div class="switcher-icon">
                            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
                        </div>
                        <div class="right-sidebar-content">

                            <p class="mb-0">Gaussion Texture</p>
                            <hr>

                            <ul class="switcher">
                                <li id="theme1"></li>
                                <li id="theme2"></li>
                                <li id="theme3"></li>
                                <li id="theme4"></li>
                                <li id="theme5"></li>
                                <li id="theme6"></li>
                            </ul>

                            <p class="mb-0">Gradient Background</p>
                            <hr>

                            <ul class="switcher">
                                <li id="theme7"></li>
                                <li id="theme8"></li>
                                <li id="theme9"></li>
                                <li id="theme10"></li>
                                <li id="theme11"></li>
                                <li id="theme12"></li>
                                <li id="theme13"></li>
                                <li id="theme14"></li>
                                <li id="theme15"></li>
                            </ul>

                        </div>
                    </div>
                    <!--end color switcher-->

                </div>
                <!--End wrapper-->

                <!-- Bootstrap core JavaScript-->
                <script src="/assets3/js/jquery.min.js"></script>
                <script src="/assets3/js/popper.min.js"></script>
                <script src="/assets3/js/bootstrap.min.js"></script>

                <!-- simplebar js -->
                <script src="/assets3/plugins/simplebar/js/simplebar.js"></script>
                <!-- sidebar-menu js -->
                <script src="/assets3/js/sidebar-menu.js"></script>
                <!-- loader scripts -->
                <script src="/assets3/js/jquery.loading-indicator.js"></script>
                <!-- Custom scripts -->
                <script src="/assets3/js/app-script.js"></script>
                <!-- Chart js -->

                <script src="/assets3/plugins/Chart.js/Chart.min.js"></script>

                <!-- Index js -->
                <script src="/assets3/js/index.js"></script>

</body>

</html>
