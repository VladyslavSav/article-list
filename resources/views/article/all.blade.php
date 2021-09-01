@extends('master')
@section('title', 'All articles')
@section('content')
@foreach ($articles as $article)
<div class="d-flex justify-content-center mt-5">
  <div class="card mx-auto text-center" style="width: 80vw;">
    <div class="card-header">
      <a href="/article/{{$article->id}}">{{$article->title}}</a>
    </div>
    <div class="card-body">
      <!-- <p class="card-text">{{$article->content}}</p> -->
      <p class="card-text">{{ Str::limit($article->content, 150, $end='...') }}</p>
    </div>
    <div class="card-footer text-muted">
      Created at: {{$article->created_at}}
    </div>
  </div>
</div>
@endforeach
<div class="d-flex justify-content-center mt-5">
  <div>
    {{$articles->links()}}
  </div>
</div>
@endsection