<form action="/login" class="user" method="post">
    @csrf

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="name" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <small id="username_error" class="form-text text-danger">
                {{ $errors->first('name') }}
            </small>
        @endif
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        @if ($errors->has('password'))
            <small id="password_error" class="form-text text-danger">
                {{ $errors->first('password') }}
            </small>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>