@extends('master')
@section('title', 'Edit article')
@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        <h1>Edit article</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/article/{{$article->id}}/edit" method="post">
            @csrf
            <div class="form-group">
                <label>Article title</label>
                <input name="title" value="{{$article->title}}" type="text" class="form-control">
            </div>
            <div class="form-group pt-3">
                <label>Article Content</label>
                <textarea class="form-control" name="content" style="height: 60vh; resize: none;">{{$article->content}}</textarea>
            </div>
            <div class="d-flex justify-content-center pt-3">
                <button type="submit" class="btn btn-primary mx-auto">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection