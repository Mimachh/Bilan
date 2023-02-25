@extends('layouts.master')
@section('content')
<section class="min-h-screen">

<!-- Violence Part -->
    <div>
        <h2 class="underline text-md font-semibold" title="Les chiffres de la violence en France">Les chiffres de la violence en France</h2>
        <h3 class="text-gray-400 text-sm font-semibold" title="Nombre d'agriculteurs qui se suicident">Suicide d'agriculteurs : 
            <span id="agriculteurSuicide2023Counter" title="Nombre d'agriculteurs qui se suicident"></span>
        </h3>
    </div>

</section>
@vite('resources/js/ruralite.js')
@endsection