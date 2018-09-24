<div class="user user--info">
    <div class="user_name">Hello, <strong>{{ Auth::user()->name }}!</strong></div>
    <div class="user_actions">
        <a href="/edit" class="btn btn-primary">Create Ad</a>
        <a href="/logout" class="">Logout</a>
    </div>
</div>