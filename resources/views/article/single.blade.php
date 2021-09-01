@extends('master')
@section('title', $article->id)
@section('content')
<div class="d-flex justify-content-center">
  <div class="card mx-auto text-center" style="width: 80vw;">
    <div class="card-header">
      <h5>{{$article->title}}</h5>
    </div>
    <div class="card-body">
      <p class="card-text">{{$article->content}}</p>
      <p class="card-text"><small class="text-muted">Created at: {{$article->created_at}}</small></p>
    </div>
    <div class="card-footer text-muted">
      <div class="d-flex justify-content-around">
        <a class="btn btn-primary" href="/article/{{$article->id}}/edit">Edit</a>
        <a class="btn btn-danger" href="/article/{{$article->id}}/delete" class="nav-link px-2 text-muted">Delete</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection