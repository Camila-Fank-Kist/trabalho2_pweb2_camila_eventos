<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1 p-1">
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
        <a href="{{-- route('index') --}}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-house"></i> Início</a>
        <a href="{{ route('apresentador.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-microphone"></i> Apresentadores</a>
        <a href="{{ route('local.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-location-dot"></i> Locais</a>
        <a href="{{ route('apresentacao.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110">Apresentações</a>
        <a href="{{ route('evento.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-calendar-days"></i> Eventos</a>
        <a href="{{ route('evento_apresentacao.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110">Eventos Apresentações</a>
        <a href="{{ route('pedido.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-ticket"></i> Pedidos</a>
        <a href="{{ route('avaliacao.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-80 hover:scale-110"><i class="fa-solid fa-star"></i> Avaliações</a>
      </div>

      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900"><!--Sair--> <span aria-hidden="true"><!--&rarr;--></span></a>
        
      </div>

    </nav>
  </header>
