<div class="min-h-screen">
    <h1 class="text-center text-4xl text-gray-300 font-semibold">NOS PETITIONS</h1>
    <div class="grid grid-cols-6 gap-4 mx-12 mt-24 mb-12">
        @foreach($petitions as $petition)
        <div class="col-start-3 col-span-2 py-3 space-y-3 text-center hover:bg-gray-800 shadow hover:shadow-red-600 hover:shadow-md border rounded-lg border-1 px-3">
            <h2 class="text-white">{{ $petition->title }}</h2>
            <div class="text-gray-200">
                @if($petition->signatures->count() > 0)
                    <p>Nombre de signataires : <span>{{ $petition->signatures->count() }}</span> </p>
                @endif
            </div>
            <div class="ml-6" id="objectifPetition">
                <div class="flex text-lg progressPetition">
                    <div class="progress-petition-value" style="width:{{$percent_objectif}}%;">{{$percent_objectif}}%</div>
                    <span class="pl-12 pt-1 text-sm">Objectif actuel : {{ $objectif_first_step }}</span>
                </div>
            </div> 
            <div class="my-1.5">
                <a class="hover:bg-cyan-400 hover:text-black text-white bg-blue-perso px-1 py-1 rounded" href="{{ route('petitions.create', $petition) }}">
                    Signer
                </a>
            </div>   
        </div>
        @endforeach
        {{ $petitions->links() }}
    </div>
   
</div>
<hr>

<div class="min-h-screen py-20 px-10 bg-gray-100">
  <div class="grid grid-cols-1 gap-20 lg:grid-cols-2 lg:gap-10">
    <div class="flex items-center flex-wrap max-w-md px-10 bg-white shadow-xl rounded-2xl h-20"
       x-data="{ circumference: 50 * 2 * Math.PI, percent: 12 }" >
          <div class="flex items-center justify-center -m-6 overflow-hidden bg-white rounded-full">
            <svg class="w-32 h-32 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
              <circle class="text-gray-300" stroke-width="10" stroke="currentColor" fill="transparent"
                r="50" cx="60" cy="60" />
              <circle class="text-blue-600" stroke-width="10" :stroke-dasharray="circumference"
                :stroke-dashoffset="circumference - percent / 100 * circumference"
                stroke-linecap="round" stroke="currentColor" fill="transparent"
                r="50" cx="60" cy="60"/>
            </svg>
            <span class="absolute text-2xl text-blue-700" x-text="`${percent}%`"></span>
          </div>
          <p class="ml-10 font-medium text-gray-600 sm:text-xl">Performance</p>
          <span class="ml-auto text-xl font-medium text-blue-600 hidden sm:block">+25%</span>
      </div>
    
    
    <div class="flex items-center flex-wrap max-w-md px-10 bg-white shadow-xl rounded-2xl h-20"
       x-data="{ circumference: 50 * 2 * Math.PI, percent: 90 }">
          <div class="flex items-center justify-center -m-6 overflow-hidden bg-white rounded-full">
            <svg class="w-32 h-32 transform translate-x-1 translate-y-1" x-cloak aria-hidden="true">
              <circle
                class="text-gray-300"
                stroke-width="10"
                stroke="currentColor"
                fill="transparent"
                r="50"
                cx="60"
                cy="60"
                />
              <circle
                class="text-red-600"
                stroke-width="10"
                :stroke-dasharray="circumference"
                :stroke-dashoffset="circumference - percent / 100 * circumference"
                stroke-linecap="round"
                stroke="currentColor"
                fill="transparent"
                r="50"
                cx="60"
                cy="60"
               />
            </svg>
            <span class="absolute text-2xl text-red-700" x-text="`${percent}%`"></span>
          </div>
          <p class="ml-10 font-medium text-gray-600 sm:text-xl">Storage</p>

          <span class="ml-auto text-xl font-medium text-red-600 hidden sm:block">20GB</span>
      </div>
  </div>
</div>


<div class="w-full px-4 lg:w-5/12">
  <div class="mb-12">
    <div class="bg-light relative h-[10px] w-full rounded-2xl">
      <div class="bg-red-600 absolute top-0 left-0 h-full w-1/2 rounded-2xl">
        <span class="bg-red-600 absolute -right-4 bottom-full mb-2 rounded-sm py-1 px-2 text-xs font-semibold text-white">
          <span class="bg-red-600 absolute bottom-[-2px] left-1/2 -z-10 h-2 w-2 -translate-x-1/2 rotate-45 rounded-sm"></span>
          50%
        </span>
      </div>
    </div>
  </div>
</div>
