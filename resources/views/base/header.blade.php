<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="{{asset('storage/imagem/global_eventos_logo.jpg')}}" class="-m-1 p-1" target="_blank">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="{{asset('storage/imagem/global_eventos_logo.jpg')}}" alt="logo">
      </a>
    </div>

    <!--<div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button> 
      </div>-->

    <div class="hidden lg:flex lg:gap-x-12">
      <a href="{{ route('index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-house"></i> Início</a>
      <a href="{{ route('apresentador.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-microphone"></i> Apresentadores</a>
      <a href="{{ route('local.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-location-dot"></i> Locais</a>
      <a href="{{ route('apresentacao.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110">Apresentações</a>
      <a href="{{ route('evento.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-calendar-days"></i> Eventos</a>
      <a href="{{ route('evento_apresentacao.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110">Ev. Apresentações</a>
      <a href="{{ route('pedido.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-ticket"></i> Pedidos</a>
      <a href="{{ route('avaliacao.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-star"></i> Avaliações</a>
      <a></a>
    </div>

    <!--<div class="dropdown">
      <button class="dropbtn">{{ Auth::user()->name }}</button>
      <div class="dropdown-content">
        <a href="{{url('profile')}}">Perfil</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="route('logout')" onclick="event.preventDefault();
                                  this.closest('form').submit();">
            {{ __('Sair') }}
          </a>
        </form>
        
      </div>
    </div>-->

    @php
        $idUsuario = Auth::user()->id;
    @endphp

    <!-- component -->
    <div class="relative inline-block text-left">
      <button id="dropdown-button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-rose-800 bg-white border border-rose-800 hover:bg-rose-800 hover:bg-opacity-20 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-rose-100 focus:ring-rose-800 focus:ring-opacity-30">
        {{ Auth::user()->name }}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </button>

      <div id="dropdown-menu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
        <div class="py-2 p-2" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
          <a class="flex block rounded-md px-4 py-2 text-sm text-rose-800 hover:bg-rose-800 hover:bg-opacity-20 active:bg-rose-100 cursor-pointer" role="menuitem" href="{{url('profile')}}">
            <i class="fa-regular fa-user pr-2 pt-1"></i> Perfil
          </a>
          <hr class="my-2 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
          <a class="flex block rounded-md px-4 py-2 text-sm text-rose-800 hover:bg-rose-800 hover:bg-opacity-20 active:bg-rose-100 cursor-pointer" role="menuitem" 
            href="{{ route('pedidosUsuario.index', $idUsuario) }}"> <!-- Auth::user()->id -->
            <i class="fa-solid fa-cart-shopping pr-2 pt-1"></i> Meus pedidos
          </a>
          <!--<a class="flex block rounded-md px-4 py-2 text-sm text-rose-800 hover:bg-rose-800 hover:bg-opacity-20 active:bg-rose-100 cursor-pointer" role="menuitem" 
            href="{{-- route('avaliacoesUsuario.index', $idUsuario) --}}">
            <i class="fa-regular fa-star pr-2 pt-1"></i> Minhas avaliações
          </a>-->
          <hr class="my-2 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="flex block rounded-md px-4 py-2 text-sm text-rose-800 hover:bg-rose-800 hover:bg-opacity-20 active:bg-rose-100 cursor-pointer" role="menuitem" href="route('logout')" onclick="event.preventDefault();
                                  this.closest('form').submit();">
              <i class="fa-solid fa-arrow-right-from-bracket pr-2 pt-1"></i>
              {{ __('Sair') }}
            </a>
          </form>
          <hr class="my-2 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
          <a class="flex block rounded-md px-4 py-2 text-sm text-rose-800 hover:bg-rose-800 hover:bg-opacity-20 active:bg-rose-100 cursor-pointer" role="menuitem" 
            href="{{ route('user.index') }}">
            <i class="fa-solid fa-users pr-2 pt-1"></i> Usuários
          </a>
          
          <!--<a href="{{url('profile')}}">Minhas avaliações</a>-->
        </div>
      </div>
    </div>
    <script>
      const dropdownButton = document.getElementById('dropdown-button');
      const dropdownMenu = document.getElementById('dropdown-menu');
      let isDropdownOpen = true; // Set to true to open the dropdown by default, false to close it by default

      // Function to toggle the dropdown
      function toggleDropdown() {
        isDropdownOpen = !isDropdownOpen;
        if (isDropdownOpen) {
          dropdownMenu.classList.remove('hidden');
        } else {
          dropdownMenu.classList.add('hidden');
        }
      }

      // Initialize the dropdown state
      toggleDropdown();

      // Toggle the dropdown when the button is clicked
      dropdownButton.addEventListener('click', toggleDropdown);

      // Close the dropdown when clicking outside of it
      window.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
          dropdownMenu.classList.add('hidden');
          isDropdownOpen = false;
        }
      });
    </script>

  </nav>
</header>