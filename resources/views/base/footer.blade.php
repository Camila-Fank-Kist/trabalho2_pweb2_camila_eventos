<!-- Footer container -->
<footer
  class="flex flex-col items-center bg-rose-100 text-center dark:bg-rose-600 lg:text-left">
  <div class="container p-6 w-1/2">
    <div class="grid place-items-center md:grid-cols-2 lg:grid-cols-3">
      <a href="{{ route('pedido.create') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-70 hover:scale-90">Compre seu ingresso</a>
      <a href="{{ route('evento.index') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-70 hover:scale-90">Confira os eventos disponíveis</a>
      <a href="{{ route('avaliacao.create') }}" class="text-sm font-semibold leading-6 text-rose-800 hover:opacity-70 hover:scale-90">Avalie os eventos</a>
    </div>
  </div>

  <div
    class="w-full bg-rose-900 p-4 text-center text-rose-50">
    © 2023 Copyright
  </div>
</footer>