<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Bravo Macron</title>
        @include('components/header')
    </head>
    <body class="font-tommy antialiased relative">
        <div>
            @include('includes.navbar')
       </div>
        <div>
                @yield('content')
        </div>
        @include('components/button-music')
        <footer>
            @include('includes.footer')
        </footer>
        @vite('resources/js/global.js')
        @vite('resources/js/app.js')
    </body>
</html>