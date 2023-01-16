<section class="bg-blue-dark py-12 min-h-screen">
    <h2 class="text-center text-white text-2xl font-bold py-4">Nos pétitions</h2>
@foreach($petitions as $petition)
<div class="flex justify-center my-4">
  <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
    <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{ asset('storage/petitions/' . $petition->photo) }}" alt="" />
    <div class="p-6 flex flex-col justify-start">
      <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $petition->title }}</h5>
        @if($petition->signatures->count() > 0)
            <p class="text-gray-200">Nombre de signataires : <span>{{ $petition->signatures->count() }}</span> </p>
        @endif

            <div id="objectifPetition">
                <div class="flex text-lg progressPetition">
                    <div class="progress-petition-value" style="width:{{$percent_objectif}}%;">{{$percent_objectif}}%</div>
                    <span class="pl-12 pt-1 text-sm">Objectif actuel : {{ $petition->objectif }}</span>
                </div>
            </div>
            <div class="pt-4 text-center">
                <a class="mt-2 hover:bg-cyan-400 hover:text-black text-white bg-blue-perso px-2 py-3 rounded-xl" href="{{ route('petitions.signature', $petition) }}">
                    Voir la pétition
                </a>
            </div>
    </div>
  </div>
</div>
<div class="mx-12">
    {{ $petitions->links() }}
</div>

@endforeach
</section>
<hr>

