@extends('base.app')

@section('titulo', 'Formulário de Apresentador')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @php
        // dd($apresentador); // é igual ao var_dump()
        if (!empty($apresentador->id)) {
            $route = route('apresentador.update', $apresentador->id);
        } else {
            $route = route('apresentador.store');
        }
    @endphp
    <div class="mx-auto divide-y md:max-w-4xl">
        <div class="grid grid-cols 2 gap-4">
            <h3 class="pt-4 text-2xl font-medium text-rose-700">Formulário de Apresentador</h3>
            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4 shadow-rose-700">
                @csrf

                @if (!empty($apresentador->id))
                    @method('PUT')
                @endif

                <input type="hidden" name="id"
                    value="@if (!empty($apresentador->id)) {{ $apresentador->id }}@elseif (!empty(old('id'))){{ old('id') }}@else{{ '' }} @endif">

                <label class="block">
                    <span class="text-rose-700 font-semibold">Nome</span>
                    <input type="text" name="nome"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-40 text-gray-600
                focus:ring-0 focus:border-rose-700"
                        value="@if (!empty($apresentador->nome)) {{ $apresentador->nome }} @elseif(!empty(old('nome'))) {{ old('nome') }} @else {{ '' }} @endif">
                </label><br>

                <label class="block">
                    <span class="text-rose-700 font-semibold">Telefone</span>
                    <input type="text" name="telefone"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-40 text-gray-600
                focus:ring-0 focus:border-rose-700"
                        value="@if (!empty($apresentador->telefone)) {{ $apresentador->telefone }} @elseif(!empty(old('telefone'))) {{ old('telefone') }} @else {{ '' }} @endif">
                </label><br>

                <label class="block">
                    <span class="text-rose-700 font-semibold">Data Nascimento</span>
                    <input type="date" name="data_nascimento"
                    class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-40 text-gray-600 focus:ring-0 focus:border-rose-700"
                        value="@if(!empty($apresentador->data_nascimento)){{$apresentador->data_nascimento}}@elseif(!empty(old('data_nascimento'))){{old('data_nascimento')}}@else{{''}}@endif">
                </label><br>

                <label class="block">
                    <span class="text-rose-700 font-semibold">Biografia</span>
                    <input type="text" name="biografia"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-40 text-gray-600
                focus:ring-0 focus:border-rose-700"
                        value="@if (!empty($apresentador->biografia)) {{ $apresentador->biografia }} @elseif(!empty(old('biografia'))) {{ old('biografia') }} @else {{ '' }} @endif">
                </label><br>

                <label class="block">
                    <span class="text-rose-700 font-semibold">Website</span>
                    <input type="text" name="website"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-40 text-gray-600
                focus:ring-0 focus:border-rose-700"
                        value="@if (!empty($apresentador->website)) {{ $apresentador->website }} @elseif(!empty(old('website'))) {{ old('website') }} @else {{ '' }} @endif">
                </label><br>

                @php
                    $nome_imagem = !empty($apresentador->imagem) ? $apresentador->imagem : 'imagem/sem_imagem.jpg';
                @endphp
                <div>
                    <img class="h-40 w-40 object-cover" src="/storage/{{ $nome_imagem }}" width="300px"
                        alt="Imagem"> 
                    <br>
                    <input
                        class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-rose-100 file:text-rose-700
                                hover:file:bg-rose-200"
                        type="file" name="imagem"><br>
                </div>

                <br><br>
                <div class="grid justify-items-center">
                    <button
                        class="bg-rose-700 bg-opacity-20 text-rose-700 hover:text-white border border-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900 w-1/6"
                        type="submit"><i class="fa-regular fa-floppy-disk"></i> Salvar</button><br>
                </div>
                </form>
            <button><a class="bg-rose-700 bg-opacity-20 text-rose-700 hover:text-white border border-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900 w-1/3"
                        href="{{ route('apresentador.index') }}"><i class="fa-solid fa-arrow-left"></i> Voltar</a></button>
        </div>
    </div>
    <br><br>
@endsection
