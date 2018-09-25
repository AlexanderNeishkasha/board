@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item disabled">
            <span>
                @if (isset($ad))
                    Edit ({{ $ad->title }})
                @else
                    Create Ad
                @endif
            </span>
        </li>
   </ol>
</nav>
@if (isset($ad))
    @php
        $action = "/edit/{$ad->id}";
    @endphp
@else
    @php
        $action = '/add';
    @endphp
@endif
<form action="{{ $action }}" class="edit shadow" method="post">
    @csrf

    @if (isset($ad))
        <input type="hidden" name="id" value="{{ $ad->id }}">
    @endif

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $ad->title ?? old('title') }}">
        @if ($errors->has('title'))
            <small id="title_error" class="form-text text-danger">
                {{ $errors->first('title') }}
            </small>
        @endif
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $ad->description ?? old('description') }}</textarea>
        @if ($errors->has('description'))
                <small id="description_error" class="form-text text-danger">
                    {{ $errors->first('description') }}
                </small>
        @endif
    </div>
    <div class="edit_buttons">
        <button type="submit" class="btn btn-primary">
            @if (isset($ad))
                Save
            @else
                Create
            @endif
        </button>
    </div>
</form>
@endsection