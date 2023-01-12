@extends('layouts.master')
@section('content')

<section class="h-screen h-screen place-content-center grid justify-items-center text-center">
<h1 class="text-white text-3xl" title='{{ $petition->title }}'>
    Pétition n°{{ $petition->id }} : <br> {{ $petition->title }}</h1>

<p>C'est à vous de voter !</p>


<livewire:response-petition :petition_id='$petition_id'/>
</section>
@endsection