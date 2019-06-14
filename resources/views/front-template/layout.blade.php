<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta name="image" content="https://www.frigomas.com.py/images/banners/carne.jpg">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="Frigomas">
        <meta itemprop="image" content="https://www.frigomas.com.py/images/banners/carne.jpg">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="Frigomas">
        <meta name="og:image" content="https://www.frigomas.com.py/images/banners/carne.jpg">
        <meta name="og:url" content="https://www.frigomas.com.py/">
        <meta name="og:url" content="www.frigomas.com.py/">
        <meta name="og:site_name" content="Frigomas">
        <meta name="og:locale" content="es">
        <meta name="og:type" content="website">
        <link rel="icon" href="{{'/img/ico-logo.png'}}"/>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>WebArts | @yield('tittle', 'Desarrollo web')</title>
        @include('front-template.partials.css')
        @yield('css')
    </head>
    <body>
        <header>
            @include('front-template.partials.header')
        </header>

        @yield('body')

        <footer>
            @include('front-template.partials.footer')
        </footer>

        @include('front-template.partials.js')
    </body>
</html>