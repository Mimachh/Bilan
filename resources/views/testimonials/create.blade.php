@extends('layouts.master')
@section('content')

<section class="min-h-screen md:relative bg-white">
<div class="grid text-black md:grid-cols-3 gap-4">
  <div class="md:col-span-2 space-y-8 px-4 md:pr-8 py-4">
    <div class="space-y-2">
        <h1 class="font-bold text-md">Titre</h1>
        <p class="text-sm lead-tight">
            Quelques mots d'explication
        </p>
    </div>
    <div class="space-y-2">
        <div id="carouselTemoignages" class="carousel slide carousel-fade relative"
            data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                @foreach($carousels as $carousel)
                <button type="button" data-bs-target="#carouselTemoignages"
                    data-bs-slide-to="{{ ($carousel->id) - 1 }}" class="{{ $carousel->id === 1 ? 'active' : ''}}" aria-current="true" aria-label="Slide {{$carousel->id}}">
                </button>
                @endforeach
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                @foreach($carousels as $carousel)
                <div class="{{ $carousel->id === 1 ? 'active' : ''}} carousel-item float-left w-full">
                    <div class=" rounded-xl text-center text-white bg-black-perso h-96 grid content-center">
                        <div class="rounded py-12 md:py-24 mx-24">
                            <blockquote class="italic px-2 py-2">{{$carousel->testimonial->content}}
                            </blockquote>
                            <small class="italic">Posté 
                                @if(isset($carousel->testimonial->name) && ($carousel->testimonial->last_name))
                                 par : {{ $carousel->testimonial->name}} {{ $carousel->testimonial->last_name}}
                                @endif
                                le : {{ $carousel->testimonial->created_at() }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselTemoignages"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselTemoignages"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <!-- Button share -->
    <div class="flex justify-end space-x-1 pt-4 bg-red-500">
        Pub 
    </div>
  </div>
  <div class="bg-blue-perso mt-2 rounded-lg ">
    <div class="pb-12 max-w-[700px] mx-auto px-3 lg:px-6">
        <h2 class="text-2xl text-white font-bold text-center mt-4 mb-2">Envoyer un témoignage</h2>
        <small class="text-white">Les champs marqué de <span class="text-red-600 text-lg">*</span> sont obligatoires</small>
        <form method='POST' action="{{ route('testimonials.store') }}">
            @csrf
            <div class="form-group mb-6">
                <input name="name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
                placeholder="Votre nom">
                @error('name') <small class="text-red-600 italic"> {{ $errors->first('name') }}</small>@enderror
            </div>
            <div class="form-group mb-6">
                <input name="last_name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="last_name"
                placeholder="Votre prénom">
                @error('last_name') <small class="text-red-600 italic"> {{ $errors->first('last_name') }}</small>@enderror
            </div>
            <div class="form-group mb-6">
                <textarea name="content" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="message" rows="3" placeholder="Votre témoignage*"></textarea>
                @error('content') <small class="text-red-600 italic"> {{ $errors->first('content') }}</small>@enderror
            </div>
            <div class="form-group mb-6">
                <input name="email" type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email"
                placeholder="Votre mail*">
                @error('email') <small class="text-red-600 italic"> {{ $errors->first('email') }}</small>@enderror
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
            <div class="form-group form-check text-center mb-6">
                <input name="statut" type="checkbox"
                    value="1" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-red-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                    id="statut">
                <label class="form-check-label inline-block text-white" for="statut">
                    Recevoir la newsletter
                </label>
                @error('newsletter') <small class="text-red-600 italic"> {{ $errors->first('newsletter') }}</small>@enderror
            </div>
            
            <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium
            text-md font-bold uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg 
            transition duration-150 ease-in-out">
            Témoigner
            </button>
        </form>
    </div>
  </div>
</div>
</section>
@vite('resources/js/testimonial.js')
@endsection