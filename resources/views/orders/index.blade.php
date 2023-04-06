@extends("layouts.master")
@section("title", "User")

@section("content")
<body>
    <div class="card">
        <div class="card-header">
            All orders
        </div>
        <div class="card-body">
            <div class="d-md-flex justify-content-md-end mb-2 ">
                <a type="button" class="btn btn-outline-primary" href="{{ route('orders.create') }}" >
                    Add Order
                </a>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">user_id</th>
                    <th scope="col">order_name</th>
                    <th scope="col">Registered</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->order_name }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>
                            <a type="button" class="btn btn-outline-primary" href="{{ route('orders.edit', [ 'order' => $order->id ]) }}" >
                                Edit
                            </a>
                            <a type="button" class="btn btn-outline-primary" href="{{ route('orders.destroy', [ 'order' => $order->id ]) }}" >
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
