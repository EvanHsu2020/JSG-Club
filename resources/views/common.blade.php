
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>index</title>
        @yield('css')
    </head>
    <body>
        <!-- top-alert -->
        @yield('topalert')
        <!-- header -->
        <header>
            <div class="header-box">
                @yield('header-nav-menu')
                <div class="features">
                    @yield('logo-main')
                    @yield('header-search')
                </div>
            </div>
        </header>
        <!-- main -->
        <div class="main">
        </div>
        @yield('footer')
        <!-- script -->
        @yield('js')
    </body>
</html>
