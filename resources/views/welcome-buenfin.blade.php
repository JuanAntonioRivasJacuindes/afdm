@php
    //dd($diplomas_data_buenfin);

    /*
                                        foreach ($diplomas_data_buenfin['diplomados'] as $data_diplomas) {
                                            echo "<pre>";
                                                print_r($data_diplomas['prices_buenfin_unidad_mes']);
                                            echo "</pre>";
                                        }
                                        */
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afodemy Buen Fin</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css'>
    @livewireScripts
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        ::-webkit-scrollbar {
            width: 0px;
        }

        #sync1 .item {
            /* background: #0c83e7; */
            width: 100%;
            color: #FFF;
            border-radius: 3px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
        }

        #sync2 .item {
            color: #FFF;
            /*border: 10px;*/
            margin: 20px;
            /*width: 220px;*/
            text-align: center;
            cursor: pointer;
        }

        @media only screen and (min-width: 360px) and (max-width: 768px) {
            #sync2 .item {
                color: #FFF;
                /*border: 10px;*/
                margin: 15px;
                text-align: center;
                cursor: pointer;
            }
        }

        @media only screen and (max-width: 576px) {

            // hacer algo
            #sync2 .item {
                color: #FFF;
                /*border: 10px;*/
                margin: 20px;
                /*width: 220px;*/
                text-align: center;
                cursor: pointer;
            }
        }

        @media only screen and (min-width: 576px) {

            // volver hacer algo
            #sync2 .item {
                color: #FFF;
                /*border: 10px;*/
                margin: 8px;
                /*width: 220px;*/
                text-align: center;
                cursor: pointer;
            }
        }

        #sync2 .item:hover {
            transform: scale(1.1);
            -webkit-transition: transform .2s ease-in-out;
            filter: brightness(2);

        }

        #sync2 .current .item {
            transform: scale(1.1);
            filter: brightness(2);
        }

        #sync1.owl-theme {
            position: relative;
        }
    </style>
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <!--Header-->
    <div class="w-full m-0 p-0 bg-cover bg-bottom"
        style="background: rgba(235, 23, 23, 0.753); height: 60vh; max-height:460px; ">
        <div class="container max-w-4xl mx-auto text-center break-normal">
            <!--Title-->
            <div class="flex justify-center pt:1">
                <img src="{{ asset('storage/img/logosweb.png') }}" alt="" style="width: 260px; height: 140px">
            </div>

            <p class="text-white font-extrabold text-3x1 md:text-5xl">
                El Buen Fin :) <br> esta aqui!
            </p>
            <p class="text-xl md:text-2xl text-gray-100 shadow-lg p-3">Bienvenidos a nuestras ofertas especiales</p>
        </div>
    </div>
    <!--Container-->
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
    </div>
    <!---crousel-->
    <div class="sm:w-full lg:px-10 p-7 justify-center items-center">
        <div class="w-full md:w-full rounded-2xl shadow-lg content-center">
            <div class=" rounded-2xl">
                <div class="" style=''>
                    <img class="object-fill h-full w-full justify-center"
                        src="{{ asset('storage/img/buenfin2022/BANNER-LANDING-PORTADA.jpg') }}" alt="" />
                </div>
            </div>
            <div id="sync2" class=" owl-carousel owl-theme my-2">
                @foreach ($diplomas_data_buenfin['diplomados'] as $data_diplomas)
                    <div class="item flex flex-row">
                        {{-- <img class="brightness-50" src="{{ $diploma->poster_url()}}" alt=""> --}}
                        <img class="sm:h-48 sm:w-80 brightness-50 object-scale-down "
                            src="{{ $data_diplomas['img_buen_fin'] }}" alt="">
                    </div>
                @endforeach
            </div>

            <div id="sync1" class="flex owl-carousel owl-theme">
                @php
                    $num_index = 0;
                @endphp
                @foreach ($diplomas_data_buenfin['diplomados'] as $data_diplomas)
                {{--
                    <div class="flex item aspect-4/3 lg:aspect-16/9 static" style="">
                        <div class="w-full md:w-2/3 rounded-t">
                            <img src="{{ $data_diplomas['img_buen_fin'] }}" class="h-full w-full shadow">
                        </div>

                        <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink ">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg l">
                                <!--<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">GETTING STARTED</p>-->
                                <div class="w-full font-bold text-xl text-gray-900 px-6 py-6">👋!! APROVECHA ¡¡ </div>
                                <br>
                                <p class="text-gray-800 font-sans font-bold text-base px-6 mb-5 text-justify">
                                    Presentación</p>

                                <p
                                    class="p-5  max-h-24 md:max-h-40 text-gray-800 font-sans text-base px-6 mb-5 text-justify overflow-y-scroll">

                                    @php
                                        $num_index_aux = $num_index++;
                                        //echo $holac;
                                    @endphp
                                    {{ $diplomas[$num_index_aux]->description }}
                                </p>

                                <div class=" w-full align-middle flex justify-around ">
                                    <!--<a href="#" class="bg-gray-800 p-3   rounded-md items-center ">SABER MÁS</a>-->
                                    <x-jet-button class="bg-gray-800 p-4 rounded-md items-center  "
                                        x-data="{ id: 'modal-info', id_d: '{{ $data_diplomas['id'] }}' }" x-on:click="$dispatch('modal-overlay',{id})">
                                        Saber más
                                    </x-jet-button>
                                    </a>


                                    <a href="https://api.whatsapp.com/send?phone=+521{{ $data_diplomas['phone_number'] }}&text=Hola,%20Tengo%20interés%20en%20{{ $data_diplomas['title'] }}%20y%20quisiera%20más%20información"
                                        target="blank" class="bg-gray-800 p-3 rounded-md items-center ">
                                        Hablar con un asesor
                                    </a>
                                    <!--<a href="#" class="bg-gray-800 p-3  rounded-lg ">BUTTON</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}
                    <div class="item flex h-full bg-white rounded overflow-hidden shadow-lg">
                        <div class="flex flex-wrap no-underline hover:no-underline">
                            <div class="w-full md:w-2/3 rounded-t">
                                <img src="{{$data_diplomas['img_buen_fin']}}"
                                    class="h-full w-full shadow">
                            </div>

                            <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Buen fin de aprednizaje</p>
                                    <div class="w-full font-bold text-xl text-gray-900 px-6">👋!! APROVECHA ¡¡</div>
                                    <p class="text-gray-800 font-sans text-base text-justify px-3 py-4 mb-5">
                                        @php
                                        $num_index_aux = $num_index++;
                                        //echo $holac;
                                        @endphp
                                        {{ $diplomas[$num_index_aux]->description }}
                                    </p>

                                    <x-jet-button class="bg-gray-800 p-4 rounded-md items-center  "
                                        x-data="{ id: 'modal-info', id_d: '{{ $data_diplomas['id'] }}' }" x-on:click="$dispatch('modal-overlay',{id})">
                                        Saber más
                                    </x-jet-button>
                                    <x-jet-button class="bg-gray-800 p-4 rounded-md items-center  "
                                    x-data="{ id: 'modal', id_d: '{{ $data_diplomas['id'] }}' }" x-on:click="$dispatch('modal-overlay',{id})">
                                        Preferio que me contacten
                                    </x-jet-button>
                                    <br>
                                    <br>
                                    <a href="https://api.whatsapp.com/send?phone=+521{{ $data_diplomas['phone_number'] }}&text=Hola,%20Tengo%20interés%20en%20{{ $data_diplomas['title'] }}%20y%20quisiera%20más%20información"
                                        target="blank" class="bg-gray-800 p-3 rounded-md items-center ">
                                        Hablar con un asesor
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="sync1ModalInf" x-data="{ modal: false }"
                class="owl-carousel owl-theme fixed inset-0 z-50 items-center justify-end overflow-y-auto bg-blue-600 bg-opacity-80 sm:justify-start"
                x-show="modal" x-on:modal-overlay.window="if ($event.detail.id == 'modal-info') modal=true"
                x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                @foreach ($diplomas_data_buenfin['diplomados'] as $data_diplomas)
                    <div class="flex flex-col  w-full px-2 transition-all transform sm:max-w-2xl" role="dialog"
                        aria-modal="true" aria-labelledby="modal-headline" x-show="modal"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4"
                        x-on:click.away="modal=false">
                        <div class=" bg-white rounded-sm shadow-md  ">
                            <div
                                class="flex justify-between w-full  p-10 my-5 py-5 text-center text-xl bg-blue-800 text-white">
                                <h2>{{ $data_diplomas['title'] }}</h2>
                                <button class=" bg-red-500 text-white text-xl rounded-sm px-4 py-2"
                                    x-on:click="modal=false">x</button>

                            </div>
                            <span class=" m-2  pb-3 font-bold text-gray-900">Mensualidad</span>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gay-800">INSCRIPCIÓN:</span>
                                <span> {{ $data_diplomas['prices_buenfin_unidad_mes']['inscripcion'] }}</span>
                            </div>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gray-800">PAGO MENSUAL:</span>
                                {{ $data_diplomas['prices_buenfin_unidad_mes']['unidad-mes'] }}
                            </div>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gray-800">INCLUYE</span>:
                                {{ $data_diplomas['prices_buenfin_unidad_mes']['caracteriticas'] }}
                            </div>

                            <span class=" m-2  pb-3 font-bold text-gray-900">Pago único 1</span>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gray-800">INSCRIPCIÓN:</span>
                                {{ $data_diplomas['price_buenfin_pagounico_1']['inscripcion'] }}
                            </div>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gray-800">PAGO MENSUAL:</span>
                                {{ $data_diplomas['price_buenfin_pagounico_1']['unidad-mes'] }}
                            </div>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gray-800">INCLUYE:</span>
                                {{ $data_diplomas['price_buenfin_pagounico_1']['caracteriticas'] }}
                            </div>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gray-800">MÁS:</span>
                                {{ $data_diplomas['price_buenfin_pagounico_1']['plus'] }}
                            </div>

                            <span class=" m-2  pb-3 font-bold text-gray-900">Pago único 2</span>
                            <div class="m-2  pb-3 text-justify">
                                <span>INSCRIPCIÓN:</span>
                                {{ $data_diplomas['price_buenfin_pagounico_2']['inscripcion'] }}
                            </div>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gray-800">PAGO MENSUAL:</span>
                                {{ $data_diplomas['price_buenfin_pagounico_2']['unidad-mes'] }}
                            </div>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gray-800">INCLUYE:</span>
                                {{ $data_diplomas['price_buenfin_pagounico_2']['caracteriticas'] }}
                            </div>
                            <div class="m-2  pb-3 text-justify">
                                <span class="text-gray-800">MÁS:</span>
                                {{ $data_diplomas['price_buenfin_pagounico_2']['plus'] }}
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!---end crousel-->
    @livewire('modal-initial-contact-bf', ['diplomas_buenfin' => $diplomas_data_buenfin])
</body>

<br>
<footer class="" style="background: rgba(235, 23, 23, 0.753);">

    <div class="flex justify-center pt:1">
        <img src="{{ asset('storage/img/imetsafodemy-n.png') }}" alt="" style="width: 300px; height: 150px">
    </div>

    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col md:flex-row">
        <p class="text-white text-sm text-center md:text-left"> <span>Derechos Reservados &copy;Afodemy</sp>
        </p>
        <span class="inline-flex md:ml-auto md:mt-0 mt-2 justify-center md:justify-start">
            <a href="https://www.facebook.com/afodemy" class="text-white">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-a h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com/afodemy" class="ml-3 text-white">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5"
                        ry="5">
                    </rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
            </a>
        </span>
    </div>

</footer>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js'></script>

<script>
    $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var sync1ModalInfo = $('#sync1ModalInf');
        var slidesPerPage = 6; //globaly define number of elements per page
        var syncedSecondary = true;
        sync1ModalInfo.owlCarousel({
            items: 1,
            slideSpeed: 4000,
            nav: false,
            autoplay: false,
            dots: false,
            loop: true,
            responsiveRefreshRate: 100,

        }).on('changed.owl.carousel', syncPosition);
        sync1.owlCarousel({
            items: 1,
            slideSpeed: 4000,
            nav: false,
            autoplay: false,
            dots: false,
            loop: true,
            responsiveRefreshRate: 100,

        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function() {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: false,
                smartSpeed: 500,
                slideSpeed: 5000,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {

            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current w-80");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
                sync1ModalInfo.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
            sync1ModalInfo.data('owl.carousel').to(number, 300, true);
        });
    });

    // grab everything we need
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // add event listeners
    /*
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
    */
</script>
</body>

</html>
