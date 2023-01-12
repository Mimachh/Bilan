@extends('layouts.master')
@section('content')

<div class="my-48">
    <div class="swal-icon swal-icon--success">
        <span class="bg-green-400 swal-icon--success__line swal-icon--success__line--long"></span>
        <span class="bg-green-400 swal-icon--success__line swal-icon--success__line--tip"></span>
        <div class="swal-icon--success__ring"></div>
        <div class="swal-icon--success__hide-corners"></div>
    </div>

    <div class="text-center space-y-4">
        <h1 class="text-green-400 font-medium text-xl">Votre signature est prise en compte, merci !</h1>
        <a href="{{ route('/') }}" class="text-blue-600">Retourner sur la page principale </a>  
    </div>
</div>
@endsection