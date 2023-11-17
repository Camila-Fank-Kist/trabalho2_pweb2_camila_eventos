@extends('base.app')

@section('titulo', 'Formulário de Evento Apresentacao')

@section('content')
    @if ($errors->any())
    <div class="mx-auto md:max-w-4xl max-w-sm p-6 bg-white border border-rose-200 rounded-lg shadow dark:bg-rose-800 dark:border-rose-700">
        <ul class="text-rose-800">
            <li>ATENÇÃO!!!</li>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @php
        // dd($evento_apresentacao); // é igual ao var_dump()
        if (!empty($evento_apresentacao->id)) {
            $route = route('evento_apresentacao.update', $evento_apresentacao->id);
        } else {
            $route = route('evento_apresentacao.store');
        }
    @endphp
    <div class="mx-auto divide-y md:max-w-4xl">
        <div class="grid grid-cols 2 gap-4">
            <h3 class="pt-4 text-2xl font-medium text-rose-700">Formulário de Evento Apresentacao</h3>
            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4 shadow-rose-700">
                @csrf

                @if (!empty($evento_apresentacao->id))
                    @method('PUT')
                @endif

                <input type="hidden" name="id"
                    value="@if (!empty($evento_apresentacao->id)) {{ $evento_apresentacao->id }}@elseif (!empty(old('id'))){{ old('id') }}@else{{ '' }} @endif">
 
                <label class="block">
                    <span class="text-rose-700 font-semibold">Apresentação Nome</span>
                    <select name="apresentacao_id"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-700">
                        @foreach ($apresentacoes as $item)
                            <option value="{{ $item->id }}" @if(!empty($evento_apresentacao->id)){{ ( $item->id == $evento_apresentacao->apresentacao_id) ? 'selected' : '' }}@else{{ '' }}@endif >{{ $item->titulo }}</option>
                        @endforeach
                    </select>
                </label><br>

                <label class="block">
                    <span class="text-rose-700 font-semibold">Evento</span>
                    <select name="evento_id"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-700">
                        @foreach ($eventos as $item)
                            <option value="{{ $item->id }}" @if(!empty($evento_apresentacao->id)){{ ( $item->id == $evento_apresentacao->evento_id) ? 'selected' : '' }}@else{{ '' }}@endif >{{ $item->nome }}</option>
                        @endforeach
                    </select>
                </label><br>
                
                <div class="block grid grid-cols-2 gap-2">
                    <div>
                        <label class="block">
                            <span class="text-rose-700 font-semibold">Hora início</span>
                            <input type="time" name="hora_inicio"
                            class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-700"
                                value="@if(!empty($evento_apresentacao->hora_inicio)){{date('H:i', strtotime($evento_apresentacao->hora_inicio))}}@elseif(!empty(old('hora_inicio'))){{old('hora_inicio')}}@else{{''}}@endif">
                        </label>
                    </div>
                    <div>
                        <label class="block">
                            <span class="text-rose-700 font-semibold">Hora fim</span>
                            <input type="time" name="hora_fim"
                            class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-700"
                                value="@if(!empty($evento_apresentacao->hora_fim)){{date('H:i', strtotime($evento_apresentacao->hora_fim))}}@elseif(!empty(old('hora_fim'))){{old('hora_fim')}}@else{{''}}@endif"><br><br>
                        </label>
                    </div>
                </div>

                <br><br>
                <div class="grid justify-items-center">
                    <button
                        class="bg-rose-700 bg-opacity-20 text-rose-700 hover:text-white border border-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900 w-1/6"
                        type="submit"><i class="fa-regular fa-floppy-disk"></i> Salvar</button><br>
                </div>
                </form>
            <button><a class="bg-rose-700 bg-opacity-20 text-rose-700 hover:text-white border border-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900 w-1/3"
                        href="{{ route('evento_apresentacao.index') }}"><i class="fa-solid fa-arrow-left"></i> Voltar</a></button>
        </div>
    </div>
    <br><br>
@endsection
