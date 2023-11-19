@extends('base.app')

@section('titulo', 'Index')

@section('content')

<!--<div class="mx-auto divide-y md:max-w-4xl">-->

<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white text-rose-900">Global Eventos</h1>
            <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl text-rose-900 opacity-70">Transformando momentos em memórias inesquecíveis.</p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="{{ route('evento.index') }}" class="justify-center px-4 py-2 text-sm font-medium text-rose-800 bg-white border border-rose-800 hover:bg-rose-800 hover:bg-opacity-20 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-rose-100 focus:ring-rose-800 focus:ring-opacity-30">
                    <i class="fa-solid fa-calendar-days pr-2"></i> Confira os eventos
                </a>
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex pr-40">
            <img src="{{asset('storage/imagem/evento.png')}}" alt="logo">
        </div>
    </div>
</section>
<!-- End block -->

<!-- Start block -->
<section class="bg-rose-800 bg-opacity-5 dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
        <!-- Row -->
        <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-rose-900">Descubra a magia dos eventos</h2>
                <p class="mb-8 font-light lg:text-xl text-rose-900 opacity-70">Embarque em uma jornada de experiências memoráveis! Aqui, oferecemos uma variedade incrível de eventos, desde palestras inspiradoras até shows emocionantes dos seus artistas favoritos.</p>
                <!-- List -->
                <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <i class="fa-solid fa-circle-check" style="color: #9f1239;"></i>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Variedade de opções</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <i class="fa-solid fa-circle-check" style="color: #9f1239;"></i>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Acesso a diversos derviços</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <i class="fa-solid fa-circle-check" style="color: #9f1239;"></i>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Programação paralela e atividades extras</span>
                    </li>
                </ul>
                <p class="mb-8 font-light lg:text-xl text-rose-900 opacity-70">Cada evento se transforma em um espetáculo de memórias inesquecíveis, onde cada detalhe é meticulosamente planejado para criar uma experiência única e encantadora.</p>
            </div>
            <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{asset('storage/imagem/evento2.jpg')}}" alt="evento">
        </div>
        <!-- Row -->
        <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
            <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{asset('storage/imagem/evento3.jpg')}}" alt="evento">
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-rose-900">Uma experiência única à sua espera</h2>
                <p class="mb-8 font-light lg:text-xl text-rose-900 opacity-70">Descubra o encanto dos seus eventos favoritos, projetados para criar momentos inesquecíveis. A diversidade é nossa assinatura, a qualidade é nossa promessa. Venha, viva seus eventos favoritos conosco!</p>
                <!-- List -->
                <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <i class="fa-solid fa-circle-check" style="color: #9f1239;"></i>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Planejamento profissional</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <i class="fa-solid fa-circle-check" style="color: #9f1239;"></i>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Experiência memorável</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <i class="fa-solid fa-circle-check" style="color: #9f1239;"></i>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Conveniência e organização</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <i class="fa-solid fa-circle-check" style="color: #9f1239;"></i>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Segurança e confiabilidade</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <i class="fa-solid fa-circle-check" style="color: #9f1239;"></i>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Interatividade e engajamento</span>
                    </li>
                </ul>
                <p class="font-light lg:text-xl text-rose-900 opacity-70">Onde cada detalhe conta, cada momento brilha.</p>
            </div>
        </div>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section class="bg-white">
    <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
        <div class="col-span-2 mb-8">
            <p class="text-lg font-medium text-rose-400 dark:text-purple-500">Confiança a nível mundial</p>
            <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight md:text-3xl text-rose-900">Utilizado por mais de 500 mil usuários e 10 mil apresentadores.</h2>
            <p class="font-light sm:text-xl text-rose-900 opacity-70">Nossos rigorosos padrões de segurança e conformidade estão no centro de tudo o que fazemos.</p>
            <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
                <div>
                    <a href="{{ route('avaliacao.index') }}" class="inline-flex items-center text-base font-medium text-rose-400 hover:text-rose-900 dark:text-purple-500 dark:hover:text-purple-700">
                        Veja as avaliações
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="{{ route('apresentador.index') }}" class="inline-flex items-center text-base font-medium text-rose-400 hover:text-rose-900 dark:text-purple-500 dark:hover:text-purple-700">
                        Veja os apresentadores
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
            <div>
                <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">365 dias no ano</h3>
                <p class="font-light text-rose-900 opacity-70">Agendamos eventos para todos os dias do ano</p>
            </div>
            <div>
                <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">10 Mil + Apresentadores</h3>
                <p class="font-light text-rose-900 opacity-70">De confiança para mais de 10 mil apresentadores ao redor do mundo</p>
            </div>
            <div>
                <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">50+ países</h3>
                <p class="font-light text-rose-900 opacity-70">Utilizam nossos serviços</p>
            </div>
            <div>
                <svg class="w-10 h-10 mb-2 text-rose-400 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold text-rose-900">1+ Mil</h3>
                <p class="font-light text-rose-900 opacity-70">Eventos por ano</p>
            </div>
        </div>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section class="bg-rose-800 bg-opacity-40 dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
        <figure class="max-w-screen-md mx-auto">
            <svg class="h-12 mx-auto mb-3 text-rose-100 dark:text-rose-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
            </svg>
            <blockquote>
                <p class="text-xl font-medium text-rose-900 md:text-2xl dark:text-white">"Aprenda a aproveitar cada minuto da sua vida. Seja feliz agora!"</p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                <i class="fa-solid fa-user" style="color: #9f1239;"></i>
                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                    <div class="pr-3 font-medium text-rose-900 dark:text-white">Earl Nightingale</div>
                    <div class="pl-3 text-sm font-light text-rose-100 dark:text-gray-400">Radialista norte-americano</div>
                </div>
            </figcaption>
        </figure>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section class="">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
        <div class="max-w-screen-sm mx-auto text-center">
            <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-rose-900">Agende seu evento conosco</h2>
            <p class="mb-6 font-light md:text-lg text-rose-900 opacity-70">Agende seu evento para que outrar pessoas possam visualizá-lo em nosso site.</p>
            <a href="{{ route('evento.create') }}" class="text-white bg-rose-900 hover:bg-rose-900 hover:bg-opacity-80 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Agendar evento</a>
        </div>
    </div>
</section>

<!--referência layout: https://github.com/themesberg/landwind/blob/main/index.html-->
@endsection