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
