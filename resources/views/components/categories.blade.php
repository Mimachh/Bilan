<section id="categories" class="min-h-screen pb-8">
    <h2 class="mt-4 py-4 text-center text-white bg-nav text-xl font-bold">Quelles statistiques souhaites-tu <br> consulter ?</h2>
    <div class="mt-2 md:grid md:grid-cols-2 lg:grid-cols-4 mx-12 gap-4 bg-red-600">
        PUB
    </div>
    <div class="md:grid md:grid-cols-2 lg:grid-cols-4 mx-12 gap-4 mt-8">
        <a href="{{ route('stats.economie') }}">
            <div class="hover:opacity-70 mb-4">
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/economie.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70 " href="{{ route('stats.economie') }}">
            <div class="hover:opacity-70 mb-4">
                <img class="shadow hover:shadow-xl" src="{{ Vite::asset('public/storage/société.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70" href="{{ route('stats.ruralite') }}">
            <div class="hover:opacity-70 mb-4">
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/ruralité.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70" href="{{ route('stats.economie') }}">
            <div class="hover:opacity-70 mb-4">
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/ecologie.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70" href="{{ route('stats.economie') }}">
            <div class="hover:opacity-70 mb-4">
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/chomage.png') }}" alt="Logo de l'économie">
            </div>
        </a>
        <a class="hover:opacity-70" href="{{ route('stats.violences') }}">
            <div class="hover:opacity-70 mb-4">
                <img class="shadow hover:shadow-xl" src="{{ asset('storage/insécurité.png') }}" alt="Logo de l'économie">
            </div>
        </a>
    </div>
</section>