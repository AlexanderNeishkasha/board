<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ads Board</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <main class="col-8">
            @yield('content')
        </main>
        <aside class="col-4">
            @guest
                @include('auth.auth_form')
            @else
                @include('user.info')
            @endguest
        </aside>
    </div>
</div>
</body>
</html>
