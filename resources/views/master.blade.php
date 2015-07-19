<!doctype html>
<html lang="en">
    <head>
        <title>Bennett Group | {{ $title }}</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald|Raleway|Archivo+Narrow' rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/nav.css') }}" rel="stylesheet" type="text/css">

        @yield('headScripts')
    </head>
    <body>
        <section id="header-block">
            @include('partials.nav')
        </section>

        <section id="main-content">
            @yield('pageContent')
        </section>

        <section id="footer">
            @yield('footerContent')
        </section>

        <section id="footer-scripts">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="{{ asset('js/nav.js') }}"></script>
            @yield('footerScripts')
        </section>
    </body>
</html>
