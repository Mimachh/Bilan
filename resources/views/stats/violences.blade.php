@extends('layouts.master')
@section('content')
<section class="min-h-screen">

<!-- Violence Part -->
    <div>
        <h2 class="underline text-md font-semibold" title="Les chiffres de la violence en France">Les chiffres de la violence en France</h2>
        <h3 class="text-gray-400 text-sm font-semibold" title="Coups et blessures en France">Coups et blessures : 
            <span id="delinquanceTotalCounter" title="Coups et blessures en France"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Viols en France">Viols : 
            <span id="rapeTotalCounter" title="Viols en France"></span>
        </h3>
    </div>

</section>
@vite('resources/js/violence.js')
@endsection