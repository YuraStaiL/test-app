<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
{{--        <title>@yield('title', 'Telegram Channel Manager')</title>--}}
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('assets/favicon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="{{asset('vendors/simplebar/css/simplebar.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendors/simplebar.css')}}">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
        <link href="{{asset('css/examples.css')}}" rel="stylesheet">

        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    </head>
    <body>
{{--    @include('layouts.sidebar')--}}
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="container-fluid d-flex h-50 justify-content-center align-items-center m-100">
            <a type="button" class="btn btn-outline-primary m-3" href="{{ route('users.index') }}" >
                Users
            </a>
            <a type="button" class="btn btn-outline-primary m-3" href="{{ route('orders.index') }}" >
                Orders
            </a>
            <a type="button" class="btn btn-outline-danger m-3" href="{{ route('logout') }}" >
                Logout
            </a>
        </header>
        <div class="container-fluid d-flex h-50 justify-content-center align-items-center p-20">
            <div class="container-fluid w-50">
                @include('layouts.alerts')
                @yield("content")
            </div>
        </div>
    </div>
</body>
</html>

