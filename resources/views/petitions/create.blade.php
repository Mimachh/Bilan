@extends('layouts.master')
@section('content')

<div class="mt-12 ml-12">
    @livewire('button-back')
</div>
<section class="h-screen place-content-center grid justify-items-center text-center">
<h1 class="text-white text-3xl" title='{{ $petition->title }}'>
    Pétition n°{{ $petition->id }} : <br> {{ $petition->title }}</h1>

<p class="text-blue-perso mt-8">C'est à vous de voter !</p>

<div class="mb-32 text-center text-white">
    <div class="max-w-[700px] mx-auto px-3 lg:px-6">
      <h2 class="text-3xl font-bold mb-12"></h2>
      <small>Les champs marqué de * sont obligatoires</small>
      <form method='POST' action="{{ route('petitions.store') }}">
        @csrf
        <div class="form-group mb-6">
        <div class="form-group mb-6">
            <input type="hidden" value="{{$petition->id}}" name="petition_id">
            <input name="email" type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
            placeholder="Votre mail*">
            @error('email') <small class="text-red-600 italic"> {{ $errors->first('email') }}</small>@enderror
        </div>
        <div class="relative form-group mb-6">
            <select name="response_id" class="text-black block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="subject">
                <option value="">-- Choisir votre réponse * --</option>
                @foreach($responses as $response)
                <option value="{{ $response->id }}">{{ $response->name }}</option>
                @endforeach
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
            @error('response_id') <small class="text-red-600 italic"> {{ $errors->first('response_id') }}</small>@enderror
        </div>   
        <div class="form-group form-check text-center mb-6">
            <input name="confirm_rule" type="checkbox"
                value="1" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-red-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                id="confirm_rule">
            <label class="form-check-label inline-block text-white" for="confirm_rule">
                Accepter les conditions d'utilisation*
            </label>
            @error('confirm_rule') <small class="text-red-600 italic"> {{ $errors->first('confirm_rule') }}</small>@enderror

        </div>
        <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium
          text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg 
          transition duration-150 ease-in-out">
          Envoyer
        </button>
      </form>
    </div>
</div>
</section>
@endsection