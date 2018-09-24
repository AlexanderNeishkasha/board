@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <main class="col-8">
                <div class="ads">
                    @foreach ($ads as $ad)
                        <div class="ad">
                            <h3 class="ad_title">
                                <a href="/{{ $ad->id }}" class="ad_link">
                                    {{ $ad->title }}
                                </a>
                            </h3>
                            <div class="ad_desc">
                                {{ $ad->description }}
                            </div>
                            <div class="ad_info">
                                <div class="created">
                                    {{ $ad->created_at->format('H:i d.m.Y') }}
                                </div>
                                <div class="author">
                                    {{ $ad->author_name }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $ads->links('vendor.pagination.default') }}
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