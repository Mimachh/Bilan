<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Merci Macron, Bravo Macron, Bilan Macron, Immigration, Violence, France">
        <meta name="description" content="Un bilan en temps réel du président Emmanuel Macron...">


        <title>Bravo Macron</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @vite(['resources/css/app.css', 'resources/css/perso.css'])
        <div>
            @include('includes.navbar')
       </div>
    </head>
    <body class="font-tommy antialiased">


        <div>
                @yield('content')
        </div>

        <footer>
            @include('includes.footer')
        </footer>

        @vite('resources/js/app.js')
    </body>
</html>