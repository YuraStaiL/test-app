@extends("layouts.master")

@section("title", "Create order")

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-group d-block d-md-flex row">
                <div class="card col-md-7 p-4 mb-0">
                    <div class="card-body">
                        <h1>Add New Order</h1>
                        <p class="text-medium-emphasis">Enter the values and click on the "Add" button</p>
                        <form method="post" action="{{ route('orders.store') }}">
                            @csrf

                            <h5 class="mb-0">
                                <label for="name" class="form-label">
                                    Order name
                                </label>
                            </h5>
                            <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/brand.svg#cib-minutemailer') }}"></use>
                                        </svg>
                                    </span>
                                <input id="order_name" name="order_name" class="form-control" type="text" placeholder="order name">
                            </div>

                            <h5 class="mb-0">
                                <label for="email" class="form-label">
                                    User
                                </label>
                            </h5>
                            <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                        </svg>
                                    </span>
                                <select class="form-select" aria-label="Default select example" name="user id">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->last_name ?  $user->last_name : $user->first_name }}({{$user->id}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
