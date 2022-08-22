<x-app-layout>

    <section class="bg-gray-100">
        <div class="container max-w-full mx-auto py-12 px-6">
            <h1 class="text-center text-4xl text-black font-medium leading-snug tracking-wider">
                Precios
            </h1>
            <p class="text-center text-lg text-gray-700 mt-2 px-6">
                Elige el precio que mas prefieras
            </p>
            <div class="h-1 mx-auto bg-secondary w-24 opacity-75 mt-4 rounded"></div>

            <div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
                <div class="relative block flex flex-col md:flex-row items-center">
                    <div
                        class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-mr-4">
                        <div class="bg-white text-black rounded-lg border-t border-gray-100 shadow-lg overflow-hidden">
                            <div
                                class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                                <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                                    Inscripción
                                </h1>
                                <h2 class="text-sm text-gray-500 text-center pb-6">$x / mo</h2>

                                Aparta tu lugar al diplomado y obtén acceso a durante tu primera semana.
                            </div>

                            <div class="flex flex-wrap mt-3 px-6">
                                <ul>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Inscripción</span>
                                    </li>
                                   <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Acceso a tu primera semana</span>
                                    </li>
                                    {{--  <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Limited Integration</span>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class=" flex items-center p-8  uppercase">
                                @foreach ($product->subproducts as $sp)
                                    @if ($sp->type==1)

                                    <form action="{{route('product.checkout')}}">
                                        <input type="text" name="subproduct_id" value="{{$sp->stripe_id}}" hidden>
                                        <x-jet-button class="w-full">Elegir</x-jet-button>
                                    </form>
                                    @endif

                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div
                        class="w-full max-w-md sm:w-2/3 lg:w-1/3 sm:my-5 my-8 relative z-10 bg-white rounded-lg shadow-lg">
                        <div
                            class="text-sm leading-none rounded-t-lg bg-secondary text-white font-semibold uppercase py-4 text-center tracking-wide">
                            Más Rentable
                        </div>
                        <div class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                            <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                                Pago Único
                            </h1>
                            <h2 class="text-sm text-gray-500 text-center pb-6"><span class="text-3xl">$x</span> / mo
                            </h2>
                          Paga todo de un chingadazo
                        </div>
                        <div class="flex pl-12 justify-start sm:justify-start mt-3">
                            <ul>
                                <li class="flex items-center">
                                    <div class="rounded-full p-2 fill-current text-green-700">
                                        <svg class="w-6 h-6 align-middle" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 text-lg ml-3">Inscripción</span>
                                </li>
                                <li class="flex items-center">
                                    <div class=" rounded-full p-2 fill-current text-green-700">
                                        <svg class="w-6 h-6 align-middle" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 text-lg ml-3">6 mensualidades</span>
                                </li>
                                <li class="flex items-center">
                                    <div class=" rounded-full p-2 fill-current text-green-700">
                                        <svg class="w-6 h-6 align-middle" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 text-lg ml-3">Alguna otra cosa</span>
                                </li>
                            </ul>
                        </div>

                        <div class=" flex items-center p-8  uppercase">
                            <a href="/register"
                                class="mt-3 text-lg font-semibold bg-primary w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-secondary text-center">Elegir</a>
                        </div>
                    </div>
                    <div
                        class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-ml-4">
                        <div class="bg-white text-black rounded-lg  shadow-lg overflow-hidden">
                            <div
                                class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6">
                                <h1 class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide">
                                    Inscripción + Mensualidad
                                </h1>
                                <h2 class="text-sm text-gray-500 text-center pb-6">$30 / mo</h2>
                                Inscribete al curso y adelanta tu primera mensualidad
                            </div>
                            <div class="flex flex-wrap mt-3 px-6">
                                <ul>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Up to 10 Courses</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">Unlimited Students</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class=" rounded-full p-2 fill-current text-green-700">
                                            <svg class="w-6 h-6 align-middle" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-lg ml-3">All Integrations</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="block items-center p-8  uppercase">
                                <a href="/register"
                                    class="mt-3 text-lg font-semibold bg-primary w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-secondary text-center">Elegir</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</x-app-layout>
