<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/leaflet.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/map.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets/css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="{{asset('assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script type="text/javascript" src="{{asset('assets/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
    <div class="page_loader"></div>
    <!-- Top header start -->
    <header class="top-header hidden-xs" id="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-social-media pull-left">
                        <li>
                            <a href="{{ route('home') }}" class="sign-in"><i class="lnr lnr-home"></i> Home </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Top header end -->

    <!-- Content area start -->
    @yield('content')
    <!-- Content area end -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-2.2.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-submenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/rangeslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.mb.YTPlayer.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/leaflet.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/leaflet-providers.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/leaflet.markercluster.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dropzone.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/maps.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>
    <!-- Custom javascript -->
    <script type="text/javascript" src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>

</body>
</html>
