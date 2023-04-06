<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Login</title>
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ asset('css/examples.css') }}" rel="stylesheet">
</head>
<body>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">
                        <div class="card-body">
                                <div class="container-fluid">
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            Errors:
                                            <br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {!! __(session('success')) !!}
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ __(session('error')) }}
                                        </div>
                                    @endif

                                    @if (session('warning'))
                                        <div class="alert alert-warning">
                                            {!! __(session('warning')) !!}
                                        </div>
                                    @endif
                                </div>
                            </div>

                        <h1>Register</h1>
                        <p class="text-medium-emphasis">Enter the values and click on the "confirm" button</p>
                        <form method="post" action="{{ route('register.process') }}">
                            @csrf
                            <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                        </svg>
                                    </span>
                                <input id="first_name" name="first_name" class="form-control" type="text" placeholder="first_name">
                            </div>

                            <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                        </svg>
                                    </span>
                                <input id="last_name" name="last_name" class="form-control" type="text" placeholder="last_name">
                            </div>

                            <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/brand.svg#cib-minutemailer') }}"></use>
                                        </svg>
                                    </span>
                                <input id="email" name="email"  class="form-control" type="text" placeholder="Email">
                            </div>

                            <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                        </svg>
                                    </span>
                                <input id="password" name="password" class="form-control" type="password" placeholder="Password">
                            </div>

                            <div class="input-group mb-4">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                        </svg>
                                    </span>
                                <input id="password_confirmation" name="password_confirmation" class="form-control" type="password" placeholder="Confirm password">
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">Confirm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
