<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bravo Macron</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @vite(['resources/css/app.css', 'resources/css/perso.css'])

    </head>
    <body class="antialiased bg-black-perso">
       

        <div>
                @yield('content')
        </div>

        <footer class="">
            @include('includes.footer')
        </footer>

        @vite('resources/js/app.js')
    </body>
</html>