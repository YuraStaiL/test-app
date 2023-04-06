@extends("layouts.master")

@section("title", "Edit User")

@section("content")
    <div class="bg-light min-vh-80 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <h1>User Info</h1>
                                <p class="text-medium-emphasis">
                                    Enter the new values and click on the "Update" button
                                </p>
                                <form method="post" action="{{ route('users.update' , [ 'user' => $user->id ]) }}">
                                    @csrf
                                    <h5 class="mb-0">
                                        <label for="name" class="form-label">
                                            Name
                                        </label>
                                    </h5>
                                    <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                        </svg>
                                    </span>
                                        <input id="first_name" name="first_name" value="{{ $user->first_name }}" class="form-control" type="text" placeholder="Name">
                                    </div>

                                    <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                        </svg>
                                    </span>
                                        <input id="last_name" name="last_name" value="{{ $user->last_name }}" class="form-control" type="text" placeholder="Name">
                                    </div>

                                    <h5 class="mb-0">
                                        <label for="email" class="form-label">
                                            Email
                                        </label>
                                    </h5>
                                    <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/brand.svg#cib-minutemailer') }}"></use>
                                        </svg>
                                    </span>
                                        <input id="email" name="email" value="{{ $user->email }}" class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <h1>Change password</h1>
                                <p class="text-medium-emphasis">
                                    Enter the new values and click on the "Change" button
                                </p>
                                <form method="post" action="{{ route('users.password.update' , [ 'user' => $user->id ]) }}">
                                    @csrf
                                    <h5 class="mb-0">
                                        <label for="old_password" class="form-label">Old password</label>
                                    </h5>
                                    <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                        </svg>
                                    </span>
                                        <input id="old_password" name="old_password" class="form-control" type="password" placeholder="Old password">
                                    </div>
                                    <h5 class="mb-0">
                                        <label for="new_password" class="form-label">
                                            New password
                                        </label>
                                    </h5>

                                    <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                        </svg>
                                    </span>
                                        <input id="new_password" name="new_password" class="form-control" type="password" placeholder="New password">
                                    </div>

                                    <h5 class="mb-0">
                                        <label for="new_password_confirmation" class="form-label">Confirm password</label>
                                    </h5>
                                    <div class="input-group mb-4">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                        </svg>
                                    </span>
                                        <input id="new_password_confirmation" name="new_password_confirmation" class="form-control" type="password" placeholder="Confirm password">
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">
                                                Change
                                            </button>
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
@endsection
