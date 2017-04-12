<html>
    <head>
        <title>App Name - @yield('title')</title>

        @include('layouts.links')

    </head>

    <body>

        <div class='app'>
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
