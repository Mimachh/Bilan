@extends('layouts.master')
@section('content')
    <main class="">
        <x-stats/>
        <x-petitions/>
        <div class="mx-8 my-4">
            <x-carousel/>
            <h2 class="text-center">Vous aussi laissez votre témoignage <a class="text-blue-perso" href="">en cliquant ici</a> </h2>
        </div>
    </main>

@vite('resources/js/main_page.js')
@endsection
