<div>
        <!-- Sidebar -->
        <div class="bg-gray-700 rounded-r-3xl fixed flex flex-col top-0 left-0 w-14 hover:w-52 md:w-52 bg-perso h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1 text-sm">
                    <li class="px-5 mb-4 hidden md:block">
                        <div class="flex flex-row items-center justify-center h-12 bg-blue-100 rounded-full">
                        <h1 class="text-black">ADMIN</h1>
                        </div>
                    </li>

                    <!-- Partie Home -->
                    <li>
                        <button wire:click="goToHome" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                            <p class="inline-flex justify-center items-center ml-2">Home</p>
                        </button>
                    </li>
                    <!-- /Partie Home-->

                    <!-- Partie Newsletters -->
                    <li>
                        <button wire:click="goToNewsletters" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                            <p class="inline-flex justify-center items-center ml-2">Newsletters</p>
                        </button>
                    </li>
                    <!-- /Partie Newsletters -->
                    
                    <!-- Partie Pétitions-->
                    <li>
                        <button wire:click="goToPetitions" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                            <p class="inline-flex justify-center items-center ml-2">Pétitions</p>
                        </button>
                    </li>
                    <!-- /Partie Pétitions-->

                    <!-- Partie Messages -->
                    <li>
                        <button wire:click="goToMessages" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                        <p class="inline-flex justify-center items-center ml-2">Messages</p>
                        </button>
                    </li>
                    <!-- /Partie Messages -->

                    <!-- Partie testimonial -->
                    <div class="py-1" x-data="{ open: false }">
                        <button x-on:click="open = ! open" class="pl-2 w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">Témoignages</button>
                        <div x-show="open">
                            <li class="py-2">
                                <button wire:click="goToTestimonialsWaiting" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <p class="inline-flex justify-center items-center ml-2">Témoignages en attente</p>
                                </button>
                            </li>
                            <li>
                                <button wire:click="goToTestimonialsOnline" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <p class="inline-flex justify-center items-center ml-2">Témoignages en ligne</p>
                                </button>
                            </li>
                            <li>
                                <button wire:click="goToTestimonialsArchived" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <p class="inline-flex justify-center items-center ml-2">Témoignages archivés</p>
                                </button>
                            </li>
                        </div>
                    </div>
                    <!-- /Partie testimonial -->

                    <!-- Partie FAQ -->
                    <li>
                        <button wire:click="goToFAQ" type="button" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                        <p class="inline-flex justify-center items-center ml-2">FAQ</p>
                        </button>
                    </li>
                    <!-- /Partie FAQ -->

                    <li>
                        <a href="{{ route('/') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                            <span class="ml-2 tracking-wide truncate">Aller sur le site</span>
                        </a>
                    </li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="pl-2 relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6" 
                                :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                Me déconnecter
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./Sidebar -->
    
    @if($currentPage === 1)
        <div class="ml-52 mt-10">
            @livewire('admin.home')
        </div>
    @endif

    @if($currentPage === 2)
        <div class="ml-52 mt-10">
            @livewire('admin.newsletters')
        </div>
    @endif

    @if($currentPage === 3)
        <div class="ml-52 mt-10">
            @livewire('admin.petitions')
        </div>
    @endif

    @if($currentPage === 4)
        <div class="ml-52 mt-10">
            @livewire('admin.messages')
        </div>
    @endif

    @if($currentPage === 5)
        <div class="ml-52 mt-10">
            @livewire('admin.f-a-q-s')
        </div>
    @endif

    @if($currentPage === 6)
        <div class="ml-52 mt-10">
            @livewire('admin.testimonials-waiting')
        </div>
    @endif

    @if($currentPage === 7)
        <div class="ml-52 mt-10">
            @livewire('admin.testimonials-online')
        </div>
    @endif

    @if($currentPage === 8)
        <div class="ml-52 mt-10">
            @livewire('admin.testimonials-archived')
        </div>
    @endif

</div> 