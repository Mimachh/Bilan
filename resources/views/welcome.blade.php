<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bravo Macron</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/css/perso.css'])
        @livewireStyles
    </head>
    <body class="antialiased">
           <div class="text-red-600 dark:bg-gray-900">
          
           </div>

        <main class="">
            <x-logo/>
            <x-stats/>
            <x-dons/>
        </main>

        <footer class="row">
            @include('includes.footer')
        </footer>

        @livewireScripts
        @vite('resources/js/app.js')
    </body>
</html>
