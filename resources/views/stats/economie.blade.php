@extends('layouts.master')
@section('content')
<section class="min-h-screen">
    <!-- Economy Part -->
    <div class="grid grid-cols-3 gap-4 pt-12 ml-8">
        <div class="col-span-2">
            <h2 class="underline text-xl font-semibold mb-6" title="Economie française">Les chiffres de l'économie en France</h2>
            <div class="flex text-blue-perso">
                <h3 class="font-semibold" title="Dette publique">Montant total de la dette publique :</h3>
                <p class="mx-1">bouton de partage</p>
                <h3 class="text-black font-bold" id="detteTotalCounter" title="Dette publique"></h3>                
            </div>
            <div class="flex text-blue-perso space-x-2">
                <h3 class="font-semibold" title="deficits cumulés">Déficits publics cumulés depuis le 1er Janvier :</h3>
                <h3 class="text-black font-bold" id="deficitTotalCounter" title="deficits cumulés"></h3>
            </div>

            <div class="flex text-blue-perso space-x-2">
                <h3 class="font-semibold" title="Fraude à la carte vitale">Fraude à la carte vitale</h3>
                <h3 class="text-black font-bold" id="fraudeVitaleTotal2023Counter" title="Fraude à la carte vitale"></h3>
            </div>

        </div>
        <div class="bg-red-600">PUB</div>
    </div>
</section>
@vite('resources/js/economie.js')
@endsection