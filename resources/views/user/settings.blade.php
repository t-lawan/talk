@extends('layouts.app')

@section('content')
  @if (Auth::guest())

  @else

    @include('user.partials.form')
    @include('user.partials.preferences')
  @endif
@endsection
