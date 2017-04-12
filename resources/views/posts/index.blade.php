@extends('layouts.app')

@section('content')
  @if (Auth::guest())

  @else
    @include ('posts.partials.create')
    @include ('posts.partials.tab')

  @endif
@endsection
