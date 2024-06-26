<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />-->
</head>
<body> 
    <div class="container mt-5">
        <h2 class="text-center mb-3">{{$title}}</h2>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Id</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Forma pagamento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->user->name ?? '' }}</td>
                    <td>{{ $data->evento->nome ?? '' }}</td>
                    <td>{{ $data->quantidade ?? '' }}</td>
                    <td>{{ $data->pagamento->nome ?? '' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>