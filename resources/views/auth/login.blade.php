@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-default">
              <div class="panel-body">Login</div>
          </div>

            <div class="panel panel-default">
                <br />
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <div class="col-md-6 col-md-offset-3">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder = "email" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6 col-md-offset-3">
                                <input id="password" type="password" class="form-control" name="password" placeholder = "password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        @include('layouts.errors')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
