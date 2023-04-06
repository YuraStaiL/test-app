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
                                <h1>Order Info</h1>
                                <p class="text-medium-emphasis">
                                    Enter the new values and click on the "Update" button
                                </p>
                                <form method="post" action="{{ route('orders.update' , [ 'order' => $order->id ])}}">
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
                                        <input id="order_name" name="order_name" value="{{ $order->order_name }}" class="form-control" type="text" placeholder="order_name">
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
                                        <select class="form-select" aria-label="Default select example" name="user_id">
                                            @foreach($users as $user)
                                                <option selected="{{ $order->user->id }}" value="{{ $user->id }}">{{ $user->last_name ?  $user->last_name : $user->first_name }}({{$user->id}})</option>
                                            @endforeach
                                        </select>
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
    </div>
@endsection
