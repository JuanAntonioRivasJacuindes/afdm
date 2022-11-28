<div>
    <footer class="p-4 bg-primary shadow md:px-6 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{'/'}}" class="flex items-center mb-4 sm:mb-0">
                <div class="w-14">
                    @livewire('logo-footer-a')
                </div>
            </a>
            <!--facebook-->
            <a href="https://www.facebook.com/afodemy" class="text-white">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-a h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
            <!--Instagram-->
            <a href="https://www.instagram.com/afodemy" class="ml-3 text-white">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5"
                        ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                {{--
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 "></a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6"></a>
                </li>
                --}}
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Terminos y condiciones</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Politica de privacidad</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">Derechos Reservados &copy;Afodemy
        </span>
    </footer>
</div>
@php
    /*
        <footer class="text-white body-font w-full bottom-0 text-3xl  ">

        <div class="bg-primary">

            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col md:flex-row">
                <div class="w-14">
                    @livewire('logo-footer-a')
                </div>
                <div class="">
                    <span class="inline-flex md:ml-2 md:mt-0 mt-2 md:mr-10 justify-items-center md:justify-start">
                        <a href="https://www.facebook.com/afodemy" class="text-white">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-a h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <p class="text-white text-sm text-center md:text-center"> <span>Derechos Reservados &copy;Afodemy</span>
                        </p>
                        <!--facebook-->

                        {{--
                        <!--twitter-->
                        <a class="ml-3 text-white">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        --}}

                        <!--Instagram-->
                        <a href="https://www.instagram.com/afodemy" class="ml-3 text-white">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5"
                                    ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        {{--
                        <!--Linkedin-->
                        <a class="ml-3 text-white">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                        --}}
                    </span>
                </div>
                <div>
                    imets
                </div>
            </div>
        </div>
    </footer>
    */
@endphp
