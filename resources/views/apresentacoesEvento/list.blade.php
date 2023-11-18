@extends('base.app')

@section('titulo', 'Listagem de Eventos')

@section('content')

<!--<div class="mx-auto divide-y md:max-w-4xl">-->
@foreach ($eventosApresentacaoEvento as $item)
@php
$nome_imagem = !empty($item->evento->imagem) ? $item->evento->imagem : 'imagem/sem_imagem.jpg';
if(File::exists($nome_imagem)) {
$nome_imagem = "/public/storage/".$nome_imagem;
}else{
$nome_imagem = "/storage/".$nome_imagem;
}
@endphp
@endforeach

<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white text-rose-900">{{ $eventosApresentacaoEvento[0]->evento->nome }}</h1>
            <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl text-rose-900 opacity-70">{{ $eventosApresentacaoEvento[0]->evento->descricao ?? '' }}</p>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex pr-40">
        <img src="{{ $nome_imagem }}" alt="evento">
    </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">

</section>

<section class="bg-rose-800 bg-opacity-5 dark:bg-gray-800">
<div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
        <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
            <div>
                <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">Id</h3>
                <p class="font-light text-rose-900 opacity-70">{{ $eventosApresentacaoEvento[0]->evento->id }}</p>
            </div>
            <div>
            <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">Categoria</h3>
                <p class="font-light text-rose-900 opacity-70">{{ $eventosApresentacaoEvento[0]->evento->categoria_evento->nome ?? '' }}</p>
            </div>
            <div>
                <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">Local</h3>
                <p class="font-light text-rose-900 opacity-70">{{ $eventosApresentacaoEvento[0]->evento->local->nome ?? '' }}</p>
            </div>
            <div>
            <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">Data</h3>
                <p class="font-light text-rose-900 opacity-70">{{ $eventosApresentacaoEvento[0]->evento->data ?? '' }}</p>
            </div>
        </div>
        <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
            <div>
            <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">Preço R$</h3>
                <p class="font-light text-rose-900 opacity-70">{{ $eventosApresentacaoEvento[0]->evento->precoBRL ?? '' }}</p>
            </div>
            <div>
                <!--<svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">Descr</h3>
                <p class="font-light text-rose-900 opacity-70">De confiança para mais de 10 mil apresentadores ao redor do mundo</p>
-->
            </div>
            <div>
            <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">Hora início</h3>
                <p class="font-light text-rose-900 opacity-70">{{ $eventosApresentacaoEvento[0]->evento->hora_inicio ?? '' }}</p>
            </div>
            <div>
            <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">Hora fim</h3>
                <p class="font-light text-rose-900 opacity-70">{{ $eventosApresentacaoEvento[0]->evento->hora_fim ?? '' }}</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h3 class="max-w-1xl mb-4 text-2xl font-extrabold leading-none tracking-tight md:text-2xl xl:text-3xl dark:text-white text-rose-900">Apresentações</h3>
            <p class="mb-6 font-light text-rose-900 opacity-70">Confira a programação de {{ $eventosApresentacaoEvento[0]->evento->nome }}.</p>
        </div>
    </div>
</section>


<!--<h3 class="pt-4 text-2xl font-medium text-rose-800">Listagem de Eventos</h3>-->
<div class="block w-full flex space-x-3 rounded-lg bg-white pl-3 pr-7 dark:bg-neutral-700">

    <form action="{{ route('evento.search') }}" method="post">
        @csrf <!-- cria um hash de segurança -->
        <div class="grid grid-cols-4 gap-6 flex space-x-4">
            <div class="relative mb-1">
                <select name="tipo" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-800 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-800">
                    <option value="nome">Nome</option>
                    <option value="descricao">Descrição</option>
                    <option value="precoBRL">Preço</option>
                </select>
            </div>
            <div class="relative mb-1">
                <input class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-800 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-800" type="text" name="valor" placeholder="Pesquisar...">
            </div>
            <div class="relative mb-1">
                <button type="submit" class="bg-rose-800 bg-opacity-20 text-rose-800 hover:text-white border border-rose-800 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900">
                    <i class="fa-solid fa-magnifying-glass"></i> Buscar
                </button>

                <a class="bg-rose-800 bg-opacity-20 text-rose-800 hover:text-white border border-rose-800 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900" href="{{ route('evento.create') }}">
                    <i class="fa-solid fa-plus"></i>
                    Cadastrar
                </a>
            </div>
            <div class="relative mb-1">
                <button type="button" class="bg-rose-800 bg-opacity-20 text-rose-800 hover:text-white border border-rose-800 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900">
                    <a href="{{ route('evento.report') }}">
                        <i class="fa-solid fa-file"></i> Relatório</a>
                </button>
            </div>
        </div>
    </form>
</div>

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">
                    <thead class="border-b border-rose-800 font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-rose-800">Id</th>
                            <th scope="col" class="px-6 py-4 text-rose-800">Imagem</th>
                            <th scope="col" class="px-6 py-4 text-rose-800">Título</th>
                            <th scope="col" class="px-6 py-4 text-rose-800">Apresentador</th>
                            <th scope="col" class="px-6 py-4 text-rose-800">Categoria</th>
                            <th scope="col" class="px-6 py-4 text-rose-800">Descição</th>
                            <th scope="col" class="px-6 py-4 text-rose-800">Hora início</th>
                            <th scope="col" class="px-6 py-4 text-rose-800">Hora fim</th>
                            <th scope="col" class="px-6 py-4 text-rose-800">Ações</th>
                            <th scope="col" class="px-6 py-4 text-rose-800">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventosApresentacaoEvento as $item)
                        @php
                        //var_dump($item->apresentacao->imagem);
                        $nome_imagem = !empty($item->apresentacao->imagem) ? $item->apresentacao->imagem : 'imagem/sem_imagem.jpg';
                        if(File::exists($nome_imagem)) {
                        $nome_imagem = "/public/storage/".$nome_imagem;
                        }else{
                        $nome_imagem = "/storage/".$nome_imagem;
                        }
                        //var_dump($nome_imagem);
                        @endphp
                        <tr class="border-b border-rose-800 transition duration-300 ease-in-out hover:bg-rose-100">
                            <td class="whitespace-nowrap px-6 py-4 font-medium border-rose-800 text-rose-800">{{ $item->apresentacao->id }}</td>
                            <td class="h-32 w-32 object-cover"><img src="{{ $nome_imagem }}" width="100px" alt="imagem"></td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->apresentacao->titulo }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->apresentacao->apresentador->nome ?? '' }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->apresentacao->categoria_apresentacao->nome ?? '' }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->apresentacao->descricao ?? '' }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->hora_inicio ?? '' }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->hora_fim ?? '' }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-rose-800 hover:scale-110 font-semibold hover:opacity-80"><a href="{{ route('evento.edit', $item->id) }}">
                                    <i class="fa-regular fa-pen-to-square"></i> Editar</a></td>
                            <td class="whitespace-nowrap px-6 py-4 text-rose-800 hover:scale-110 font-semibold hover:opacity-80"><a href="{{ route('evento.destroy', $item->id) }}" onclick="return confirm('Deseja Excluir?')">
                                    <i class="fa-solid fa-trash"></i> Excluir</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!--</div>-->
<br><br>
@endsection