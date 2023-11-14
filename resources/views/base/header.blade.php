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

    <div class="dropdown">
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
        <!--<a href="{{url('profile')}}">Meus pedidos</a>-->
        <!--<a href="{{url('profile')}}">Minhas avaliações</a>-->
      </div>
    </div>

    <!--<div class="relative" data-te-dropdown-ref>
      <button class="flex items-center whitespace-nowrap rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] motion-reduce:transition-none" type="button" id="dropdownMenuButton6" data-te-dropdown-toggle-ref aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
        Danger
        <span class="ml-2 w-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </span>
      </button>
      <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButton6" data-te-dropdown-menu-ref>
        <li>
          <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600" href="#" data-te-dropdown-item-ref>Action</a>
        </li>
        <li>
          <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600" href="#" data-te-dropdown-item-ref>Another action</a>
        </li>
        <li>
          <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600" href="#" data-te-dropdown-item-ref>Something else here</a>
        </li>
      </ul>
    </div>-->

  </nav>
</header>