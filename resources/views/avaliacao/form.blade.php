@extends('base.app')

@section('titulo', 'Formulário de Avaliacao')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @php
        // dd($avaliacao); // é igual ao var_dump()
        if (!empty($avaliacao->id)) {
            $route = route('avaliacao.update', $avaliacao->id);
        } else {
            $route = route('avaliacao.store');
        }
    @endphp
    <div class="mx-auto divide-y md:max-w-4xl">
        <div class="grid grid-cols 2 gap-4">
            <h3 class="pt-4 text-2xl font-medium text-rose-700">Formulário de Avaliacao</h3>
            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4 shadow-rose-700">
                @csrf

                @if (!empty($avaliacao->id))
                    @method('PUT')
                @endif

                
                <input type="hidden" name="id"
                    value="@if (!empty($avaliacao->id)) {{ $avaliacao->id }}@elseif (!empty(old('id'))){{ old('id') }}@else{{ '' }} @endif">
                
                <input type="hidden" name="user_id"
                    value="{{Auth::user()->id}}">

                <label class="block">
                    <span class="text-rose-700 font-semibold">Evento</span>
                    <select name="evento_id"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-700">
                        @foreach ($eventos as $item)
                            <option value="{{ $item->id }}" @if(!empty($avaliacao->id)){{ ( $item->id == $avaliacao->evento_id) ? 'selected' : '' }}@else{{ '' }}@endif >{{ $item->nome }}</option>
                        @endforeach
                    </select>
                </label><br>

                <label class="block">
                    <span class="text-rose-700 font-semibold">Nota</span>
                    <input type="number" name="nota"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-40 text-gray-600
                focus:ring-0 focus:border-rose-700"
                        value="@if(!empty($avaliacao->nota)){{ $avaliacao->nota }}@elseif(!empty(old('nota'))){{ old('nota') }}@else{{ '' }}@endif">
                </label><br>

                <label class="block">
                    <span class="text-rose-700 font-semibold">Descrição</span>
                    <input type="text" name="descricao"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-40 text-gray-600
                focus:ring-0 focus:border-rose-700"
                        value="@if (!empty($avaliacao->descricao)) {{ $avaliacao->descricao }} @elseif(!empty(old('descricao'))) {{ old('descricao') }} @else {{ '' }} @endif">
                </label><br>

                @php
                    $nome_imagem = !empty($avaliacao->imagem) ? $avaliacao->imagem : 'imagem/sem_imagem.jpg';
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
                        href="{{ route('avaliacao.index') }}"><i class="fa-solid fa-arrow-left"></i> Voltar</a></button>
        </div>
    </div>
    <br><br>
@endsection
