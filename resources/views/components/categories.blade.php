<section class="min-h-screen pb-8">
    <h2 class="mt-4 py-4 text-center text-white bg-nav text-xl font-bold">Quelles statistiques souhaites-tu <br> consulter ?</h2>
    <div class="grid grid-cols-3 mx-4 gap-4 mt-8">
        <a class=" hover:opacity-70" href="{{ route('stats.economie') }}">
            <div>
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/economie.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70" href="">
            <div>
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/société.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70" href="">
            <div>
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/ruralité.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70" href="">
            <div>
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/ecologie.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70" href="">
            <div>
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/chomage.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70" href="">
            <div>
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/insécurité.png') }}" alt="Logo de l'économie">
            </div>
        </a>
    </div>
</section>