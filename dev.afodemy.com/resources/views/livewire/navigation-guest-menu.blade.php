<div>
    <nav class="md:p-8 md:ml-auto  w-full flex items-center justify-center text-white bg-gradient-to-b from-black">
        <div class=" mx-auto px-4">
            <div class="flex justify-between">

                <div class="flex space-x-4">
                    <!-- logo -->
                    <div>
                        <a href="{{ route('/') }}">
                            <img class="w-3/4 m-3 " src="{{ asset('storage\img\logo_afodemy_blanco.png') }}"
                                alt="">
                        </a>
                    </div>
                    <!-- primary nav -->
                    <div class="hidden lg:flex items-center space-x-1 text-white my-5">
                        <a href="{{route('about')}}" class="py-5 px-3  hover:text-gray-900">Conócenos</a>
                        {{-- <a href="#" class="py-5 px-3  hover:text-gray-900">Propuesta Academica</a> --}}
                        {{-- <a href="#" class="py-5 px-3  hover:text-gray-900">Profesorado</a> --}}

                    </div>
                </div>

                <!-- secondary nav -->
                        <div class="hidden lg:flex items-center space-x-1 ">
                            <a href="{{ route('login') }}"
                                class="py-2 px-3 hover:text-gray-900 bg-secondary text-white rounded-lg">{{ __('Login') }}</a>
                            <a href="{{ route('register') }}"
                                class="py-2 px-3 hover:text-gray-900 rounded-xl">{{ __('Register') }}</a>
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
</div>
