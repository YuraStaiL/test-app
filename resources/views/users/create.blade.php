@extends("layouts.master")

@section("title", "Users")

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-group d-block d-md-flex row">
                <div class="card col-md-7 p-4 mb-0">
                    <div class="card-body">
                        <h1>Add New User</h1>
                        <p class="text-medium-emphasis">Enter the values and click on the "Add" button</p>
                        <form method="post" action="{{ route('users.store') }}">
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
                                    <button class="btn btn-primary px-4" type="submit">Add User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
