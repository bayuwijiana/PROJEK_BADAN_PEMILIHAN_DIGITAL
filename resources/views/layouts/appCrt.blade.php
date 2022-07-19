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

    <!-- Bootstrap core CSS-->
    <link href="/assets3/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="/assets3/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="/assets3/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="/assets3/css/app-style.css" rel="stylesheet" />

    <style>
        .oke {
            width: 80%;
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

        .area {
            border-radius: 20px;
            height: 180px;
            width: 600px;
            border: 4px solid lightblue;
            font-size: 20px;
        }

        .sel {
            border: 0px solid #e5eaef;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff !important;
            width: 180px;
            border-radius: 5px;
            height: 40px;
        }

        .sel1 {
            border: 0px solid #e5eaef;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff !important;
            width: 400px;
            border-radius: 5px;
            height: 40px;
        }

        .sel2 {
            border: 0px solid #e5eaef;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff !important;
            width: 100px;
            border-radius: 5px;
            height: 40px;
        }

        .sel3 {
            border: 0px solid #e5eaef;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff !important;
            width: 90%;
            border-radius: 5px;
            height: 40px;
        }

        .area3 {
            border-radius: 20px;
            height: 180px;
            width: 90%;
            border: 4px solid lightblue;
            font-size: 20px;
        }

        .v2 {
            width: 60%;
        }

    </style>
</head>

<body class="bg-theme bg-theme1">


    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="loader-wrapper">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="card card-authentication1 mx-auto my-5 oke">
            <div class="card-body ">
                <div class=" card-content p-2">
                    <div class=" text-center">
                        <img src="/assets2/img/logo.png" style="height:80px">
                        <img src="/assets2/img/kpu.png" style="height:80px">
                    </div>
                    {{-- --------------- --}}
                    @yield('content')
                    {{-- --------------- --}}
                </div>
            </div>

        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

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
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="/assets3/js/jquery.min.js">
        x`
    </script>
    <script src="/assets3/js/popper.min.js"></script>
    <script src="/assets3/js/bootstrap.min.js"></script>

    <!-- sidebar-menu js -->
    <script src="/assets3/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="/assets3/js/app-script.js"></script>

</body>

</html>
