@extends('layouts.master')
@section('content')
    <main class="">
        <x-welcome-page/>
        <x-stats/>
        <x-categories/>
        <x-petitions/>

        <div class="mx-8 my-4">
            <x-carousels/>
        </div>
    </main>

@vite('resources/js/main_page.js')
@endsection
