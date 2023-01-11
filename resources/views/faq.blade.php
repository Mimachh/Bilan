@extends('layouts.master')
@section('content')
<div class="mt-12 ml-4 md:ml-12">
    @livewire('button-back')
</div>
<div>

<h1 class="text-center text-white text-3xl font-semibold mt-10">FAQ</h1>
<p class="mt-5 text-center text-gray-600">Si vous ne trouvez pas la réponse à votre question vous pouvez nous contacter <a class="text-blue-perso" href="{{ route('contact.create') }}">ici</a>.</p>
    <div class="md:max-w-1/2 md:w-1/2 mx-4 md:mx-auto">
    @foreach($faqs as $faq)
    <h2 class="mt-12 text-xl text-white">{{ $faq->id }}</h2>
    <div class="mb-2 font-medium text-white mr-auto max-w-1/2 w-1/2">
        <p class="font-light">Question :</p>
        <p>{{ $faq->question }} </p>
    </div>
    <div class="mb-12 mb-2 font-medium ml-auto text-gray-400 max-w-1/2 w-1/2">
        <p class="font-light">Réponse :</p>
        <p>{{ $faq->answer }}</p>
    </div>
    <hr>
    @endforeach
    </div>
    
</div>
@endsection
