@extends('layouts.master')
@section('content')
    <main class="">
        <x-stats/>
        <x-petitions/>
    </main>

@vite('resources/js/main_page.js')
@endsection
