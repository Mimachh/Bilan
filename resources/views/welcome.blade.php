@extends('layouts.master')
@section('content')
    <main class="">
   
        <x-welcome-page/>
        <div id="div_message" class="hidden border bg-green-400">
<h4 id="message" class="text-red-600"></h4>
</div>
        <x-stats/>
        <x-categories/>
        <x-petitions/>
       
        <div class="mx-8 my-4">
            <x-carousels/>
        </div>
    </main>

@vite('resources/js/main_page.js')
@endsection
