@extends('base.app')

@section('titulo', 'Listagem de Locais')

@section('content')

<!--<div class="mx-auto divide-y md:max-w-4xl">-->
<div class="grid grid-cols 4 gap-4">
<div
  class="block rounded-lg bg-rose-800 p-6 mb-4 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
  <h5
    class="pt-4 text-2xl font-medium leading-tight text-white">
    Locais
  </h5>
  <p class="pt-2 pb-2 mb-2 text-base text-white">
  Confira os locais de eventos!
  </p>
</div> 
<!--<h3 class="pt-4 text-2xl font-medium text-rose-800">Listagem de Sabores</h3>-->
    <div
        class="block w-full flex space-x-3 rounded-lg bg-white pl-3 pr-7 dark:bg-neutral-700">

        <form action="{{ route('local.search') }}" method="post">
            @csrf <!-- cria um hash de segurança -->
            <div class="grid grid-cols-3 gap-6 flex space-x-4">
                <div class="relative mb-1">
                    <select name="tipo"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-800 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-800">
                        <option value="nome">Nome</option>
                        <!--<option value="ingredientes">Ingredientes</option>
                        <option value="precoBRL">Preço</option>-->
                    </select>
                </div>
                <div class="relative mb-1">
                    <input
                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-800 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-800"
                        type="text" name="valor" placeholder="Pesquisar...">
                </div>

                <div class="relative mb-1">
                    <button type="submit"
                        class="bg-rose-800 bg-opacity-20 text-rose-800 hover:text-white border border-rose-800 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900">
                        <i class="fa-solid fa-magnifying-glass"></i> Buscar
                    </button>
                    
                    <a class="bg-rose-800 bg-opacity-20 text-rose-800 hover:text-white border border-rose-800 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900"
                        href="{{ route('local.create') }}">
                        <i class="fa-solid fa-plus"></i>  
                        Cadastrar
                    </a>
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
                                <th scope="col" class="px-6 py-4 text-rose-800">Nome</th>
                                <th scope="col" class="px-6 py-4 text-rose-800">Tipo Local</th>
                                <th scope="col" class="px-6 py-4 text-rose-800">Capacidade</th>
                                <th scope="col" class="px-6 py-4 text-rose-800">Website</th>
                                <th scope="col" class="px-6 py-4 text-rose-800">Telefone</th>
                                <!--<th scope="col" class="px-6 py-4 text-rose-800">Endereço</th>
                                <th scope="col" class="px-6 py-4 text-rose-800">Descricao</th>-->
                                <th scope="col" class="px-6 py-4 text-rose-800">Ações</th>
                                <th scope="col" class="px-6 py-4 text-rose-800">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locais as $item)
                                @php
                                    $nome_imagem = !empty($item->imagem) ? $item->imagem : 'imagem/sem_imagem.jpg';
                                    if(File::exists($nome_imagem)) {
                                        $nome_imagem = "/public/storage/".$nome_imagem; 
                                    }else{
                                        $nome_imagem = "/storage/".$nome_imagem;
                                    }
                                    //var_dump($nome_imagem);
                                @endphp
                                <tr 
                                    class="border-b border-rose-800 transition duration-300 ease-in-out hover:bg-rose-100">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium border-rose-800 text-rose-800">{{ $item->id }}</td>
                                    <td class="h-32 w-32 object-cover"><img src="{{ $nome_imagem }}" width="100px"
                                            alt="imagem"></td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->nome }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->tipo_local->nome }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->capacidade }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->website }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->telefone }}</td>
                                    <!--<td class="whitespace-nowrap px-6 py-4">{{ $item->endereco }}</td>-->
                                    <!--<td class="whitespace-nowrap px-6 py-4">{{ $item->descricao }}</td>-->
                                    <td class="whitespace-nowrap px-6 py-4 text-rose-800 hover:scale-110 font-semibold hover:opacity-80"><a
                                            href="{{ route('local.edit', $item->id) }}">
                                            <i class="fa-regular fa-pen-to-square"></i> Editar</a></td>
                                    <td class="whitespace-nowrap px-6 py-4 text-rose-800 hover:scale-110 font-semibold hover:opacity-80"><a
                                            href="{{ route('local.destroy', $item->id) }}"
                                            onclick="return confirm('Deseja Excluir?')">
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
