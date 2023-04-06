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
            <div class="col-md-6">
                <div class="card mb-4 mx-4">
                    <div class="card-body p-4">
                        <h1>Find your account</h1>
                        <p class="text-medium-emphasis">Please enter your email to search for your account.</p>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                                    </svg>
                                </span>
                                <input name="email" class="form-control" type="text" placeholder="Email">
                            </div>
                            @error('email')
                                <p class="alert alert-danger p-1">{{ $message }}</p>
                            @enderror
                            @if(session('status'))
                                <p class="alert alert-success p-1">{{ session('status') }}</p>
                            @endif
                            <button class="btn btn-primary px-4" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
