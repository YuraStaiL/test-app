@extends("layouts.master")
@section("title", "User")

@section("content")
<body>
    <div class="card">
        <div class="card-header">
            All users
        </div>
        <div class="card-body">
            <div class="d-md-flex justify-content-md-end mb-2 ">
                <a type="button" class="btn btn-outline-primary" href="{{ route('users.create') }}" >
                    Add User
                </a>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Registered</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a type="button" class="btn btn-outline-primary" href="{{ route('users.edit', [ 'user' => $user->id ]) }}" >
                                Edit
                            </a>
                            <a type="button" class="btn btn-outline-primary" href="{{ route('users.destroy', [ 'user' => $user->id ]) }}" >
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
