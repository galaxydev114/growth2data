<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme="growth2data-v1">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Title -->
        <title>@if ($page == 'home') {{ env('APP_NAME') }} | {{ $title }} @else {{ $title }} - {{ env('APP_NAME') }} @endif</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Social tags -->
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img') }}/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('img') }}/favicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,600,600i,700,700i|Inter:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="{{ asset('vendor') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{ asset('vendor') }}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{ asset('vendor') }}/aos/aos.css" rel="stylesheet" />
        <link href="{{ asset('vendor') }}/animation/animation.min.css" rel="stylesheet" />

        <!-- Style CSS -->
        <link href="{{ asset('css') }}/style.css" rel="stylesheet" />

        @stack('css')
    </head>
    <body>
        <!-- Header -->
        @include('layouts.header')

        <!-- Main content -->
        @yield('content')

        <!-- Footer -->
        @include('layouts.footer')

        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor') }}/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="{{ asset('vendor') }}/aos/aos.js"></script>
        <!-- Init JS -->
        <script src="{{ asset('js') }}/init.js"></script>

        @stack('js')
    </body>
</html>