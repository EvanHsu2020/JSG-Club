
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
    <!-- css -->
    @yield('css')
    @yield('login-css')
</head>
<body>
    <!-- top-alert -->
    @yield('topalert')

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
        @yield('login-main')
    </div>
    @yield('footer')


</body>
@yield('js')
</html>
