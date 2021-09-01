@extends('master')
@section('title', 'Create new article')
@section('content')
<div class="container">
    <h1>Create new article</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/article/add" method="post">
        @csrf
        <div class="form-group">
            <label>Article title</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="form-group pt-3">
            <label>Article Content</label>
            <textarea class="form-control" name="content" style="height: 60vh; resize: none;"></textarea>
        </div>
        <div class="d-flex justify-content-center pt-3">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
@endsection