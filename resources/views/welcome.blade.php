@extends('layouts.master')
@section('content')
    <main class="">
        <x-logo/>
        <x-stats/>
        <x-petitions/>
    </main>

@vite('resources/js/main_page.js')
@endsection
