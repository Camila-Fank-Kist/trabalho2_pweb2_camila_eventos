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

    <!-- 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          fontFamily: {
            sans: ["Roboto", "sans-serif"],
            body: ["Roboto", "sans-serif"],
            mono: ["ui-monospace", "monospace"],
          },
        },
        corePlugins: {
          preflight: false,
        },
      };
    </script>-->

    <style>
        .dropbtn {
            background-color: #9f1239;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #FFEBF0;
            color: #9f1239;
            min-width: 118px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #9f1239;
        }

        .dropdown-content a:hover {
            background-color: #9f1239;
            color: #FFEBF0;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #E8C4CE;
            /*opacity: 0.5;*/
            color: #9f1239;
        }
    </style>
</head>

<body class="w-screen">
    <!-- TW Elements JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    -->
    @include('base.header') <!--inclui o conteúdo do arquivo 'base.header'-->
    <div class="md:container md:mx-auto "> <!--px-8-->
        @yield('content') <!--diretiva blade que define uma seção chamada 'content'. 
        O objetivo principal dessa diretiva é permitir que o conteúdo específico da página seja inserido dinamicamente neste local.-->
        <!--em uma página específica que usa este layout, você pode definir um bloco de conteúdo com o mesmo nome ('content') usando a diretiva @section('content') ... @endsection -->
    </div>
    @include('base.footer') <!--inclui o conteúdo do arquivo 'base.footer'-->
</body>

</html>