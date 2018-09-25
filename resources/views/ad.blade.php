@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item disabled"><span>{{ $ad->title }}</span></li>
    </ol>
</nav>
<div class="adpage shadow">
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
    @if (Auth::check() && $ad->author_name == Auth::user()->name)
        <div class="ad_controls">
            <a href="/edit/{{ $ad->id }}" class="ad_controls_item">Edit</a>
            <a href="/delete/{{ $ad->id }}" class="ad_controls_item">Remove</a>
        </div>
    @endif
</div>
@endsection