@extends('layouts.master')
@section('content')
<div class="mb-36">
    <h1 class="text-center text-black text-3xl font-semibold mt-12">FAQ</h1>
    <p class="mt-5 text-center text-gray-600">Si vous ne trouvez pas la réponse à votre question vous pouvez nous contacter <a class="text-blue-perso" href="{{ route('contact.create') }}">ici</a>.</p>
</div>

<div class="grid grid-cols-3 gap-4">
  <div class="col-span-2 ml-12 space-y-8">
    @foreach($faqs as $faq)
        <div x-data="{ open: false }">
            <div class="mb-4 font-medium">
                <button x-on:click="open = ! open"><p>{{ $faq->id }}-{{ $faq->question }} </p></button>
            </div>
            <div x-show="open" class="mb-12 mb-2 font-medium ml-auto text-black">
                <p class="font-normal">{{ $faq->answer }}</p>
            </div>
            <hr>
        </div> 
    @endforeach
  </div>
  <div class="bg-red-500">Pub</div>
</div>
@endsection
