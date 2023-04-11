<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="Test project">
        <meta name="author" content="Yurii Faryna">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>@yield('title', 'test app')</title>
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="{{asset('css/vendors/simplebar.css')}}">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
        <link href="{{asset('css/examples.css')}}" rel="stylesheet">

    </head>
    <body>
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
            <div class="container-sm">
                @include('layouts.alerts')
                @yield("content")
            </div>
        </div>
    </div>
</body>
</html>

