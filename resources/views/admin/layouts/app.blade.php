<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme="growth2data-admin-v1">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Title -->
        <title>{{ $pageTitle }} - G2D Admin</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Social tags -->
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin-assets/images') }}/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('admin-assets/images') }}/favicon.png">

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin-assets/css') }}/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin-assets/css') }}/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin-assets/css') }}/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- Custom Css -->
        <link href="{{ asset('admin-assets/css') }}/custom.css" id="app-style" rel="stylesheet" type="text/css" />

        @stack('css')
    </head>
    <body data-sidebar="dark">
       <div id="layout-wrapper">
            <!-- Top Navbar Start -->
            @include('admin.layouts.topbar')
            <!--/. Top Navbar End -->

            <!--  Left Sidebar Start  -->
            @include('admin.layouts.sidebar')
            <!--/. Left Sidebar End -->

            @yield('content')
       </div>
    </body>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin-assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin-assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin-assets') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('admin-assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin-assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('admin-assets') }}/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="{{ asset('admin-assets') }}/js/app.js"></script>
    
    @stack('scripts')
</html>