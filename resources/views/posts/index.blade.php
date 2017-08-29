@extends('layouts.app')

@section('content')

<div id="test">

<ul>
  <li v-for="post in posts" >
  </li>
</ul>
</div>
  @if (Auth::guest())

  @else
    @include ('posts.partials.create')
    @include ('posts.partials.tab')

  @endif
@endsection
