<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <title>@yield('titulo') - SisACAD</title>
</head>

<body class="w-screen">
    @include('base.header') <!--inclui o conteúdo do arquivo 'base.header'-->
    <div class="md:container md:mx-auto "> <!--px-8-->
        @yield('content') <!--diretiva blade que define uma seção chamada 'content'. 
        O objetivo principal dessa diretiva é permitir que o conteúdo específico da página seja inserido dinamicamente neste local.-->
        <!--em uma página específica que usa este layout, você pode definir um bloco de conteúdo com o mesmo nome ('content') usando a diretiva @section('content') ... @endsection -->
    </div>
    @include('base.footer') <!--inclui o conteúdo do arquivo 'base.footer'-->
</body>
</html>
