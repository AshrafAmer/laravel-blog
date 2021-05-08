<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title> @yield('title') </title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/admin/plugins/images/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets/css/skins/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <link href="{{asset('assets/admin/css/style.min.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <style>
        svg, .z-0 span, .relative a {
            display: none !important;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <div class="page-wrapper">

            @yield('content')
            
            @include('admin.layouts.footer')
        </div>
    </div>

    <script src="{{asset('assets/admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/waves.js')}}"></script>
    <script src="{{asset('assets/admin/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('assets/admin/js/custom.js')}}"></script>
</body>

</html>