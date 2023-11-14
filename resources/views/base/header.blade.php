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

    <!-- component -->
    <div class="relative inline-block text-left">
      <button id="dropdown-button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
        {{ Auth::user()->name }}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </button>

      <div id="dropdown-menu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
        <div class="py-2 p-2" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
          <a class="flex block rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer" role="menuitem" href="{{url('profile')}}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" id="light" width="18px" class="mr-2">
              <path d="M19 9.199h-.98c-.553 0-1 .359-1 .801 0 .441.447.799 1 .799H19c.552 0 1-.357 1-.799 0-.441-.449-.801-1-.801zM10 4.5A5.483 5.483 0 0 0 4.5 10c0 3.051 2.449 5.5 5.5 5.5 3.05 0 5.5-2.449 5.5-5.5S13.049 4.5 10 4.5zm0 9.5c-2.211 0-4-1.791-4-4 0-2.211 1.789-4 4-4a4 4 0 0 1 0 8zm-7-4c0-.441-.449-.801-1-.801H1c-.553 0-1 .359-1 .801 0 .441.447.799 1 .799h1c.551 0 1-.358 1-.799zm7-7c.441 0 .799-.447.799-1V1c0-.553-.358-1-.799-1-.442 0-.801.447-.801 1v1c0 .553.359 1 .801 1zm0 14c-.442 0-.801.447-.801 1v1c0 .553.359 1 .801 1 .441 0 .799-.447.799-1v-1c0-.553-.358-1-.799-1zm7.365-13.234c.391-.391.454-.961.142-1.273s-.883-.248-1.272.143l-.7.699c-.391.391-.454.961-.142 1.273s.883.248 1.273-.143l.699-.699zM3.334 15.533l-.7.701c-.391.391-.454.959-.142 1.271s.883.25 1.272-.141l.7-.699c.391-.391.454-.961.142-1.274s-.883-.247-1.272.142zm.431-12.898c-.39-.391-.961-.455-1.273-.143s-.248.883.141 1.274l.7.699c.391.391.96.455 1.272.143s.249-.883-.141-1.273l-.699-.7zm11.769 14.031l.7.699c.391.391.96.453 1.272.143.312-.312.249-.883-.142-1.273l-.699-.699c-.391-.391-.961-.455-1.274-.143s-.248.882.143 1.273z"></path>
            </svg> Perfil
          </a>
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="flex block rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer" role="menuitem" href="route('logout')" onclick="event.preventDefault();
                                  this.closest('form').submit();">
              {{ __('Sair') }}
            </a>
          </form>
          <!--<a href="{{url('profile')}}">Meus pedidos</a>-->
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