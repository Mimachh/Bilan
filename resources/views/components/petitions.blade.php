<section class="bg-blue-dark py-12 min-h-screen">
    <h2 class="text-center text-white text-2xl font-bold py-4">Nos pétitions</h2>
    <div class="mx-12 min-h-screen mb-4 grid grid-cols-1 gap-4 lg:grid-cols-3 sm:grid-cols-2">
        <div class="w-full md:px-4 max-h-62 lg:px-0 col-start-2">
            <div class="text-center p-3 bg-white rounded shadow-md hover:shadow-2xl">
                <div>
                    <div class="rounded aspect-w-1 aspect-h-1  overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                        <img src="{{ asset('storage/petitions/' . $petition->photo) }}" alt="Photo de la pétition" 
                            class="mx-auto w-full h-full rounded  rounded-lg object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="flex-auto p-2 justify-evenly">
                        <div class="flex flex-wrap">
                            <div class="flex items-center justify-between w-full min-w-0 ">
                                <h2 class="mr-auto text-lg cursor-pointer hover:text-gray-900" id="title" title="Titre de la pétition">
                                {{ $petition->title }}
                                </h2>
                                @if($petition->signatures->count() > 0)
                                    <p class="text-gray-200">Nombre de signataires : <span>{{ $petition->signatures->count() }}</span> </p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <!-- Progress bar -->
                                <div class="w-full px-4">
                                    <div class="my-8">
                                        <div class="bg-gray-400 relative h-[10px] w-full rounded-2xl">
                                            <div class="bg-nav absolute top-0 left-0 h-full rounded-2xl" style="width:{{$percent_objectif}}%;">
                                                <span class="bg-nav absolute -right-4 bottom-full mb-2 rounded-sm py-1 px-2 text-xs font-semibold text-white">
                                                <span class="bg-nav absolute bottom-[-2px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm"></span>
                                                {{$percent_objectif}}%
                                                </span>
                                            </div>
                                        </div>
                                        <p>Notre objectif : {{ $petition->objectif }} signatures</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="w-full mt-2 hover:bg-cyan-400 hover:text-black text-white bg-blue-perso rounded-xl py-2" href="{{ route('petitions.signature', $petition) }}">
                    <button class="w-1/2">
                        Voir la pétition
                    </button>  
                </a>
            </div>
        </div>
    </div>
</section>
<hr>




