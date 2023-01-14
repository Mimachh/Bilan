<div class="min-h-screen">
    <h1 class="text-center text-4xl text-gray-300 font-semibold">NOS PETITIONS</h1>
    <div class="grid grid-cols-6 gap-4 mx-12 mt-24 mb-12">
        @foreach($petitions as $petition)
        <div class="col-start-3 col-span-2 py-3 space-y-3 text-center hover:bg-gray-800 shadow hover:shadow-red-600 hover:shadow-md border rounded-lg border-1 px-3">
            <div>
                <img class="rounded w-full h-1/2" src="{{ asset('storage/petitions/' . $petition->photo) }}" alt="">
            </div>
            <h2 class="text-white">{{ $petition->title }}</h2>
            <div class="text-gray-200">
                @if($petition->signatures->count() > 0)
                    <p>Nombre de signataires : <span>{{ $petition->signatures->count() }}</span> </p>
                @endif
            </div>
            
            <div class="ml-6" id="objectifPetition">
                <div class="flex text-lg progressPetition">
                    <div class="progress-petition-value" style="width:{{$percent_objectif}}%;">{{$percent_objectif}}%</div>
                    <span class="pl-12 pt-1 text-sm">Objectif actuel : {{ $petition->objectif }}</span>
                </div>
            </div> 
            <div class="my-1.5">
                <a class="hover:bg-cyan-400 hover:text-black text-white bg-blue-perso px-1 py-1 rounded" href="{{ route('petitions.signature', $petition) }}">
                    Signer
                </a>
            </div>   
        </div>
        @endforeach
        {{ $petitions->links() }}
    </div>
   
</div>
<hr>

