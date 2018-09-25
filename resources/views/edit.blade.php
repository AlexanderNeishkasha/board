@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
   </ol>
</nav>
<form action="/add" class="edit shadow" method="post">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        @if ($errors->has('title'))
            <small id="title_error" class="form-text text-danger">
                {{ $errors->first('title') }}
            </small>
        @endif
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        @if ($errors->has('description'))
                <small id="description_error" class="form-text text-danger">
                    {{ $errors->first('description') }}
                </small>
        @endif
    </div>
    <div class="edit_buttons">
        <button type="submit" class="btn btn-primary">Create Ad</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>
@endsection