<nav class="flex flex-wrap items-center justify-between w-full
          py-4 md:py-4 px-4 text-lg text-white bg-nav font-bold bg-transparent">
       <div>
          <a class="text-3xl font-black ml-4 tracking-wide" href="{{ route('/') }}">
            BRAVO MACRON.
          </a>
        </div>
       
          <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
       
       <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
          <ul
            class="
              pt-4
              text-base
              md:flex
              md:justify-between 
              md:pt-0"
          >
            <li>
              <a class="md:p-4 py-2 block hover:text-purple-400" href="{{ route('testimonials.create') }}"
                >Témoignages</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block hover:text-purple-400" href="{{ route('faq') }}"
                >FAQ</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block hover:text-purple-400" href="#"
                >Nous soutenir</a
              >
            </li>
          </ul>
        </div>
    </nav>