@extends('layouts.master')
@section('content')

<header class="bg-white shadow bg-black-perso">
    <div class="text-center pt-6">
        <h1 class="font-bold text-center text-3xl text-gradient">IMMIGRATION</h1> 
    </div>
    <x-breadcrumbs/>
</header>

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

        <h3 class="text-gray-400 font-semibold" title="Cambriolages en France">Cambriolages : 
            <span id="cambriolageTotalCounter" title="Cambriolages en France"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Cambriolages en France">Violences sexuelles : 
            <span id="violencesSexuellesTotalCounter" title="Cambriolages en France"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Féminicides en France">Féminicides : 
            <span id="feminicides2022TotalCounter" title="Féminicides en France"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Coups et blessures en France">Coups et blessures : 
            <span id="coupsEtBlessures2022TotalCounter" title="Coups et blessures en France"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Homicides en France">Homicides : 
            <span id="homicides2022TotalCounter" title="Homicides en France"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Vols avec armes (armes à feu, armes blanches ou par destination)">Vols avec armes (armes à feu, armes blanches ou par destination) : 
            <span id="volsAvecArmes2022TotalCounter" title="Vols avec armes (armes à feu, armes blanches ou par destination)"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Vols sans arme avec violence">Vols sans arme avec violence : 
            <span id="volsViolentsSansArme2022TotalCounter" title="Vols sans arme avec violence"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Vols sans violence">Vols sans violence : 
            <span id="volsSansViolence2022TotalCounter" title="Vols sans violence"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Vols de véhicules (automobiles et 2 roues)">Vols de véhicules (automobiles et 2 roues) : 
            <span id="volsVehicules2022TotalCounter" title="Vols de véhicules (automobiles et 2 roues)"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Vols dans les véhicules">Vols dans les véhicules : 
            <span id="volsDansVehicules2022TotalCounter" title="Vols dans les véhicules"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Vols d'accessoires sur véhicules">Vols d'accessoires sur véhicules : 
            <span id="volsAccessoiresSurVehicules2022TotalCounter" title="Vols d'accessoires sur véhicules"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Destructions et dégradations volontaires">Destructions et dégradations volontaires : 
            <span id="destructionDegradationsVolontaires2022TotalCounter" title="Destructions et dégradations volontaires"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Usage de stupéfiants">Usage de stupéfiants : 
            <span id="usageStupefiants2022TotalCounter" title="Usage de stupéfiants"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Trafic de stupéfiants">Trafic de stupéfiants : 
            <span id="traficStupefiants2022TotalCounter" title="Trafic de stupéfiants"></span>
        </h3>

        <h3 class="text-gray-400 font-semibold" title="Escroqueries">Escroqueries : 
            <span id="escroqueries2022TotalCounter" title="Escroqueries"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Actes terroristes (islamistes) déjoués">Actes terroristes (islamistes) déjoués : 
            <span id="actesTerroristesIslamistesDejoues2022TotalCounter" title="Actes terroristes (islamistes) déjoués"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Actes terroristes islamistes">Actes terroristes islamistes : 
            <span id="actesTerroristesIslamistes2022TotalCounter" title="Actes terroristes islamistes"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Actes terroristes d'extrême-droite">Actes terroristes d'extrême-droite : 
            <span id="actesTerroristesED2022TotalCounter" title="Actes terroristes d'extrême-droite"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Actes antisémites">Actes antisémites : 
            <span id="actesAntisemites2022TotalCounter" title="Actes antisémites"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Agressions physiques Homophobes">Agressions physiques Homophobes : 
            <span id="agressionsPhysiquesHomophobes2022TotalCounter" title="Agressions physiques Homophobes"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Actes homophobes répertoriés">Actes homophobes répertoriés : 
            <span id="actesRepertoriesHomophobes2022TotalCounter" title="Actes homophobes répertoriés"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Nombre de fichés S">Nombre de fichés S : 
            <span id="nombreFichesSDjihadistes2021TotalCounter" title="Nombre de fichés S"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Nombre d'OQTF prononcées">Nombre d'OQTF prononcées : 
            <span id="nombreOQTFPrononces2021TotalCounter" title="Nombre d'OQTF prononcées"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Nombre d'OQTF exécutées">Nombre d'OQTF exécutées : 
            <span id="nombreOQTFExecutes2021TotalCounter" title="Nombre d'OQTF exécutées"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Nombre d'OQTF prononcées depuis 2011">Nombre d'OQTF prononcées depuis 2011 : 
            <span id="nombreOQTFPrononceDepuis2011TotalCounter" title="Nombre d'OQTF prononcées depuis 2011"></span>
        </h3>
        
        <h3 class="text-gray-400 font-semibold" title="Nombre d'OQTF exécutées depuis 2011">Nombre d'OQTF exécutées depuis 2011 : 
            <span id="nombreOQTFExecuteesDepuis2011TotalCounter" title="Nombre d'OQTF exécutées depuis 2011"></span>
        </h3>
    </div>
<div id="div_message" class="hidden border bg-green-400">
<h4 id="message" class="text-red-600"></h4>
</div>

</section>
@vite('resources/js/violence.js')
@endsection