<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Yurii Faryna">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Login</title>
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

                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {!! __(session('warning')) !!}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ __(session('error')) }}
                                </div>
                            @endif

                            <h1>Login</h1>
                            <p class="text-medium-emphasis">Sign In to your account</p>
                            <form method="POST" action="{{ route('login.process') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href={{ "vendors/@coreui/icons/svg/free.svg#cil-user" }}></use>
                                        </svg>
                                    </span>
                                    <input name="email" class="form-control" type="text" placeholder="Email">
                                </div>

                                <div class="input-group mb-4">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href={{ "vendors/@coreui/icons/svg/free.svg#cil-lock-locked" }}></use>
                                        </svg>
                                    </span>
                                    <input name="password" class="form-control" type="password" placeholder="Password">
                                </div>

                                <div class="row">
                                    <div class="col-6 pb-3">
                                        <button class="btn btn-primary px-4" type="submit">Login</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a class="btn btn-link px-0" href="{{ route('password.forgot') }}">Forgot password?</a>
                                    </div>
                                    <div class="row-cols-lg-6">
                                        <p class="p-0 mb-0 text-medium-emphasis">
                                            Not a member ?
                                        </p>
                                    </div>
                                    <div class="row-6">
                                        <a class="btn btn-primary px-4" href="{{ route('register') }}">Signup</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
