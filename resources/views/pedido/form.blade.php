@extends('base.app')

@section('titulo', 'Formulário de Pedido')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @php
        // dd($pedido); // é igual ao var_dump()
        if (!empty($pedido->id)) {
            $route = route('pedido.update', $pedido->id);
        } else {
            $route = route('pedido.store');
        }
    @endphp
    <div class="mx-auto divide-y md:max-w-4xl">
        <div class="grid grid-cols 2 gap-4">
            <h3 class="pt-4 text-2xl font-medium text-rose-700">Formulário de Pedido</h3>
            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4 shadow-rose-700">
                @csrf

                @if (!empty($pedido->id))
                    @method('PUT')
                @endif

                
                <input type="hidden" name="id"
                    value="@if (!empty($pedido->id)) {{ $pedido->id }}@elseif (!empty(old('id'))){{ old('id') }}@else{{ '' }} @endif">
                
                <input type="hidden" name="user_id"
                    value="2"> <!-- user->id ? -->

                <label class="block">
                    <span class="text-rose-700 font-semibold">Evento</span>
                    <select name="evento_id"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-700">
                        @foreach ($eventos as $item)
                            <option value="{{ $item->id }}" @if(!empty($pedido->id)){{ ( $item->id == $pedido->evento_id) ? 'selected' : '' }}@else{{ '' }}@endif >{{ $item->nome }}</option>
                        @endforeach
                    </select>
                </label><br>

                <label class="block">
                    <span class="text-rose-700 font-semibold">Quantidade</span>
                    <input type="number" name="quantidade"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-40 text-gray-600
                focus:ring-0 focus:border-rose-700"
                        value="@if(!empty($pedido->quantidade)){{ $pedido->quantidade }}@elseif(!empty(old('quantidade'))){{ old('quantidade') }}@else{{ '' }}@endif">
                </label><br>

                <label class="block">
                    <span class="text-rose-700 font-semibold">Forma de pagamento</span>
                    <select name="pagamento_id"
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-rose-700 border-opacity-30 text-gray-600
                focus:ring-0 focus:border-rose-700">
                        @foreach ($pagamentos as $item)
                            <option value="{{ $item->id }}" @if(!empty($pedido->id)){{ ( $item->id == $pedido->pagamento_id) ? 'selected' : '' }}@else{{ '' }}@endif >{{ $item->nome }}</option>
                        @endforeach
                    </select>
                </label><br> 

                <br><br>
                <div class="grid justify-items-center">
                    <button
                        class="bg-rose-700 bg-opacity-20 text-rose-700 hover:text-white border border-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900 w-1/6"
                        type="submit"><i class="fa-regular fa-floppy-disk"></i> Salvar</button><br>
                </div>
                </form>
            <button><a class="bg-rose-700 bg-opacity-20 text-rose-700 hover:text-white border border-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-rose-500 dark:text-rose-500 dark:hover:text-white dark:hover:bg-rose-600 dark:focus:ring-rose-900 w-1/3"
                        href="{{ route('pedido.index') }}"><i class="fa-solid fa-arrow-left"></i> Voltar</a></button>
        </div>
    </div>
    <br><br>
@endsection
