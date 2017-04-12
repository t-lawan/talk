@extends('layouts.app')

@section('content')
  @if (Auth::guest())

  @else

    @include('user.partials.bio')

    @foreach ($posts as $post)
      @if($post->user->id === auth()->user()->id)
        @include('user.partials.post')
      @endif
    @endforeach
    
  @endif
@endsection
