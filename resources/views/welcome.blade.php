@extends('layouts.master')
@section('content')
    <main class="">
        <x-stats/>

        <x-petitions/>

        <div class="mx-8 my-4">
            <x-carousels/>
        </div>
    </main>

@vite('resources/js/main_page.js')
@endsection
