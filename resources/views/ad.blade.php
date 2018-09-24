@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <main class="col-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                    </ol>
                </nav>
                <div class="adpage">
                    <h1 class="adpage_title">{{ $ad->title }}</h1>
                    <div class="adpage_desc">
                        {{ $ad->description }}
                    </div>
                    <div class="adpage_info">
                        <div class="created">
                            {{ $ad->created_at->format('H:i d.m.Y') }}
                        </div>
                        <div class="author">{{ $ad->author_name }}</div>
                    </div>
                </div>
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
@endsection