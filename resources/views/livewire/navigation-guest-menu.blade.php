<div>
    @php
        //dd($diplomas->status);
        //foreach ($diplomas as $item){
        //    echo("<div>". $item . "</div>");
        //}
    @endphp
    <!--<nav class="md:p-8 md:ml-auto  w-full flex items-center justify-center text-white bg-gradient-to-b from-black">-->
    <nav class="md:p-1 md:ml-auto w-full  justify-center text-white bg-primary font-bold">
        <div class=" mx-auto px-4">
            <div class="flex justify-between">

                <div class="flex space-x-4">
                    <!-- logo -->
                    <div class="lg:flex items-center space-x-1">
                        <a href="{{ route('/') }}">
                            {{--<img class="w-3/4 m-3" src="{{ asset('storage\img\logo_afodemy_blanco.png') }}"
                                alt="">--}}
                            {{--<img  class = "mr-0.5 verti" src="{{ asset('storage\img\afologo-blanco.png') }}" style="height: 50px" alt="" loading="lazy" >--}}
                            <img  class = "py-0 px-3" src="{{ asset('storage\img\logoswebblanco.png') }}" style="height: 100px" alt="" loading="lazy" >
                        </a>
                    </div>
                    <!-- primary nav -->
                    <div class="hidden lg:flex items-center py-0 space-x-1 text-slate-400 my-5" id="diplomadosMenu">
                        {{--
                        <a href="{{ route('/') }}" class=" py-0 px-3  hover:text-white">Diplomados</a>
                        --}}
                        <x-jet-dropdown aling="left">
                            <x-slot name="trigger">
                                <div class=" hover:text-white">
                                    <button class="font-bold px-3">
                                        Diplomados
                                    </button>
                                </div>
                            </x-slot>
                            <x-slot name="content" class="bg-bgmenu py-10">
                                <!-- List Diplomados -->
                                @foreach ($diplomas as $diploma)
                                    <x-jet-dropdown-link href="{{ route('diploma.preview', $diploma->id) }}" class=" hover:text-gray-700">
                                        {{ __($diploma->title) }}
                                    </x-jet-dropdown-link>
                                @endforeach

                            </x-slot>
                        </x-jet-dropdown>

                        <!--<a href="#" class="py-5 px-3  hover:text-gray-900">Cursos</a>-->
                    </div>
                    <div class="hidden lg:flex items-center py-0 space-x-1 text-slate-400 my-5" id="abaout">

                        <div>
                            <x-jet-dropdown aling="left" width="48">
                                <x-slot name="trigger">
                                    <div class=" hover:text-white">
                                        <button class="font-bold px-3">
                                            Conócenos
                                        </button>
                                        {{--<a href="{{route('about')}}" class="py-5 px-3  hover:text-white">Conócenos(SPA)</a>--}}
                                    </div>

                                        {{--
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                :3
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                        --}}
                                </x-slot>

                                <x-slot name="content" class="bg-bgmenu">
                                    <!-- Account Management -->
                                    <x-jet-dropdown-link href="{{route('about')}}" class=" hover:text-gray-700">
                                        {{ __('¿Quiénes somos?') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link href="{{route('about')}}" class=" hover:text-gray-700">
                                        {{ __('Profesores') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link href="#" class=" hover:text-gray-700">
                                        {{ __('Certificación') }}
                                    </x-jet-dropdown-link>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    </div>

                </div>

                <!-- secondary nav -->
                        <div class="hidden lg:flex items-center space-x-1 ">
                            <a href="{{ route('login') }}"
                                class="py-2 px-3 hover:text-green-500 text-white">{{ __('Login') }}</a>
                            <!--forma boton btrounded-xl-->
                            <a href="{{ route('register') }}"
                                class="py-2 px-3 hover:text-secondary text-white bg-btn-register rounded-lg">{{ __('Register') }}</a>
                        </div>

                <!-- mobile button goes here -->
                <div class="lg:hidden flex p-5">
                    <button class="mobile-menu-button">
                        <svg class="w-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- mobile menu -->
        <div class="mobile-menu hidden lg:hidden w-full text-lg p-2">
            <a href="{{route('about')}}" class="block hover:bg-gray-200">Conócenos</a>
            <hr>
            <a href="#" class="block hover:bg-gray-200">Propuesta Academica</a>
            {{-- <a href="#" class="block py-2 px-4 hover:bg-gray-200">Profesorado</a> --}}

            <a href="{{ route('login') }}"
                class="block hover:bg-gray-200 bg-secondary text-white rounded-lg">{{ __('Login') }}</a>
            <a href="{{ route('register') }}"
                class="block py-2 px-4 hover:bg-gray-200 ">{{ __('Register') }}</a>
        </div>
    </nav>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
    </script>
</div>
