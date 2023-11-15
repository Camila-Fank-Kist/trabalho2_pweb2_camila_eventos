<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 ml-5">
        <h2 class="text-center mb-3">{{$title}}</h2>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Id</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Local</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora Início</th>
                    <th scope="col">Hora Fim</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço R$</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eventos ?? '' as $data)
                @php
                $nome_imagem = !empty($data->imagem) ? $data->imagem : 'imagem/sem_imagem.jpg';
                if(File::exists($nome_imagem)) {
                    $nome_imagem = "/public/storage/".$nome_imagem;
                }else{
                    $nome_imagem = "/storage/".$nome_imagem;
                }
                @endphp
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td class="h-32 w-32 object-cover"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path($nome_imagem))) }}" width="100px" alt="imagem"></td>
                    <td>{{ $data->nome }}</td>
                    <td>{{ $data->categoria_evento->nome ?? '' }}</td>
                    <td>{{ $data->local->nome ?? '' }}</td>
                    <td>{{ $data->data ?? '' }}</td>
                    <td>{{ $data->hora_inicio ?? '' }}</td>
                    <td>{{ $data->hora_fim ?? '' }}</td>
                    <td>{{ $data->descricao ?? '' }}</td>
                    <td>{{ $data->precoBRL ?? '' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>