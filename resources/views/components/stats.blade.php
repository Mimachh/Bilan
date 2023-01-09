<section class="pt-24 h-screen bg-black-perso">
    <div class="mb-24 text-center space-x-6 text-5xl font-bold">
        <h1 class="inline text-white">Merci</h1> 
        <h2 class="inline text-blue-perso">Macron</h2>
        <p>Décollage prévu dans : <span id="destitution"></span> jours</p>
    </div>


    <div class="px-12 grid grid-cols-3 gap-4">
        <div class="col-span-3 md:col-span-2 bg-green h-32">
            Quelques compteurs ici
            <div>
                <h2>Nombre de migrants depuis le 1er Janvier : <span id="generalMigrantsCounter"></span></h2>
                <div class="mx-auto progressMigrantsTotal">
                    <div class="progress-migrants-total-value"></div>
                </div>
            </div>
            
            <h3 class="text-blue-600">Nombre de migrants aujourd'hui : <span class="text-black" id="migrantsCounterFromToday"></span></h3>
                <div class="mx-auto progressMigrantsToday">
                    <div class="progress-migrants-today-value"></div>
                </div>
        </div>
        <div class="col-span-3 md:col-span-1 bg-red-600 h-32">
            Un truc d'humour en lien avec les compteurs
        </div>
    </div>
</section>
