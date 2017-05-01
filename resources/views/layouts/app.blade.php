<html>
    <head>
        <title>Talk</title>

        @include('layouts.links')
        

    </head>

    <body>

        <div class='container-fluid col-md-10 col-md-offset-1'>
          @if (Auth::guest())
            @include('layouts.nav.guest')
          @else
            @include('layouts.nav.auth')
          @endif

        </div>
        <div class="container">
          @yield('content')
          @if($flash = session('message'))
            @include('layouts.flash')
          @endif
        </div>


      @include('layouts.footer')


    </body>
</html>
