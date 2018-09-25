@extends('layouts.app')
@section('content')
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
            @if (Auth::check() && $ad->author_name == Auth::user()->name)
                <div class="ad_controls">
                    <a href="/edit/{{ $ad->id }}" class="ad_controls_item">Edit</a>
                    <a href="/remove/{{ $ad->id }}" class="ad_controls_item">Remove</a>
                </div>
            @endif
        </div>
    @endforeach
</div>
{{ $ads->links('vendor.pagination.default') }}
@endsection