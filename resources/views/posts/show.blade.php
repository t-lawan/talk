@extends('layouts.app')

@section('content')

  <div class="col-md-8 col-md-offset-2">
    @include('posts.partials.post')

    <ul class="list-unstyled">
      @foreach ($post->comments as $comment)
        @include('comments.comment')
      @endforeach
    </ul>

  </div>

  <div class="col-md-8 col-md-offset-2 ">
    @include('comments.create')
  </div>





@endsection
