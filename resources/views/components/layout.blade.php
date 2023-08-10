<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hippo laravel blog</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- CSS
 ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/flaticon.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">



    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        input:not([type="submit"]):not([type="checkbox"]):not([type="radio"]):not([type="file"]),
        textarea {

            height: 60px;

        }

        .search-category {
            height: 60px;
            background: #fff;
            border-radius: 40px
        }

        @media only screen and (max-width: 767px) {
            .search-category {
                margin-bottom: 20px
            }
        }

        .search-category ul.nav-menu {
            text-align: left;
            padding-left: 40px;
        }

        .search-category .nav-menu>li {
            margin-right: 0;
            display: block;
            position: relative;

        }



        .search-category .nav-menu>li>a {
            font-size: 16px;
            font-weight: 300;
            padding: 16px 0;

            color: #0f1328;
            text-transform: uppercase;
            display: block
        }

        .search-category .nav-menu>li>a.active {
            color: #f31717
        }

        .search-category .nav-menu>li>a i {
            font-size: 9px;
            margin-left: 3px
        }

        .search-category .nav-menu>li:hover>a {
            color: #f31717
        }

        .search-category .nav-menu>li:hover .sub-menu {
            top: 100%;
            opacity: 1;
            visibility: visible
        }

        .search-category .nav-menu>li .sub-menu {
            width: 300px;
            position: absolute;
            left: 0;
            top: 110%;
            border-top: 2px solid #f31717;
            background-color: #fff;
            text-align: left;
            padding: 15px 0;
            box-shadow: 0px 10px 30px 0px rgba(1, 1, 1, 0.1);
            z-index: 99;
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s linear;
            height: 250px;
            overflow-y: auto;
        }

        .search-category .nav-menu>li .sub-menu li {
            display: block;
            padding: 0;
            transition: all 0.3s linear
        }

        .search-category .nav-menu>li .sub-menu li.active>a {
            background-color: #f31717;
            color: #fff;
            text-transform: uppercase;
        }

        .search-category .nav-menu>li .sub-menu li a {
            display: block;
            font-weight: 300;
            color: #0f1328;
            font-size: 15px;
            padding: 8px 12px;
            transition: all 0.3s linear;
            text-transform: uppercase;
        }

        .search-category .nav-menu>li .sub-menu li:hover a {
            color: #fff;
            background-color: #f31717;
            margin-right: 0
        }


        
        .dashboard-menu {
          position: relative;
        }

        .dashboard-menu:hover .sub-menu {
            top: 100%;
            opacity: 1;
            visibility: visible
        }

        .dashboard-menu .sub-menu {
            width: 220px;
            position: absolute;
            right: 30px;
            top: 110%;
            border-top: 2px solid #f31717;
            background-color: #fff;
            text-align: left;
            padding: 15px 0;
            box-shadow: 0px 10px 30px 0px rgba(1, 1, 1, 0.1);
            z-index: 99;
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s linear;
           
        }

        .dashboard-menu  .sub-menu li {
            display: block;
            padding: 0;
            transition: all 0.3s linear
        }

        .dashboard-menu  .sub-menu li.active>a {
            background-color: #f31717;
            color: #fff;
            text-transform: capitalize;
        }

        .dashboard-menu  .sub-menu li a {
            display: block;
            font-weight: 300;
            color: #0f1328;
            font-size: 15px;
            padding: 8px 12px;
            transition: all 0.3s linear;
            text-transform: capitalize;
        }

        .dashboard-menu .sub-menu li:hover a {
            color: #fff;
            background-color: #f31717;
            margin-right: 0
        }

        .nice-select.open .list {
        opacity: 1;
        pointer-events: auto;
        -webkit-transform: scale(1) translateY(0);
        -ms-transform: scale(1) translateY(0);
        transform: scale(1) translateY(0);
        width: 100%;
    }



    </style>
</head>

<body>

    <!-- Preloader start -->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <div class="main-wrapper">

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->



        {{ $slot }}








    </div>

    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/back-to-top.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
