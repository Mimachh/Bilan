<nav class="flex flex-wrap items-center justify-between w-full
          py-4 px-4 text-lg text-white bg-nav font-bold">
       <div class="flex">
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
              <div class="dropdown relative">
                <a class=" md:p-4 py-2 block hover:text-purple-400" href="#" id="dropdownMenuButton1" 
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Le bilan
                </a>
                <ul class="space-y-3 dropdown-menu min-w-max absolute
                  hidden bg-nav z-50 float-left
                  py-2 list-none text-left rounded-lg
                  shadow-lg mt-1 hidden ease-in duration-300
                  m-0 bg-clip-padding border-none left-auto right-0
                " aria-labelledby="dropdownMenuButton1">
                  <li>
                    <a class=" text-left
                      dropdown-item py-2
                      pl-4 pr-24 block w-full whitespace-nowrap
                      bg-transparent
                      text-white hover:text-purple-400
                    " href="{{ route('stats.economie') }}">Economie</a>
                  </li>
                  <li>
                    <a class=" text-left
                      dropdown-item py-2
                      pl-4 pr-24 block w-full whitespace-nowrap
                      bg-transparent
                      text-white hover:text-purple-400
                    " href="{{ route('stats.immigration') }}">Immigration</a>
                  </li>
                  <li>
                    <a class=" text-left
                      dropdown-item py-2
                      pl-4 pr-24 block w-full whitespace-nowrap
                      bg-transparent
                      text-white hover:text-purple-400
                    " href="#">Société</a>
                  </li>
                  <li>
                    <a class=" text-left
                      dropdown-item py-2
                      pl-4 pr-24 block w-full whitespace-nowrap
                      bg-transparent
                      text-white hover:text-purple-400
                    " href="{{ route('stats.violences') }}">Insécurité</a>
                  </li>
                  <li>
                    <a class=" text-left
                      dropdown-item py-2
                      pl-4 pr-24 block w-full whitespace-nowrap
                      bg-transparent
                      text-white hover:text-purple-400
                    " href="#">Ruralité</a>
                  </li>
                  <li>
                    <a class=" text-left
                      dropdown-item py-2
                      pl-4 pr-24 block w-full whitespace-nowrap
                      bg-transparent
                      text-white hover:text-purple-400
                    " href="#">Ecologie</a>
                  </li>
                  <li>
                    <a class=" text-left
                      dropdown-item py-2
                      pl-4 pr-24 block w-full whitespace-nowrap
                      bg-transparent
                      text-white hover:text-purple-400
                    " href="#">Chômage</a>
                  </li>
                </ul>
              </div>
            </li>
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
    