<x-app-layout>


    @section('title', "Diplomado en $diploma->title")
    @section('description', "$diploma->description" ?? 'Descripcion no disponible')
    @section('route', 'https://user.afodemy.com')
    @section('image', asset($diploma->flyer_thumbnail()))



    <div class="bg-gradient-to-b  from-gray-100 to-primary">

        @if (Session::has('message'))
            <div class="flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
                <p class="self-center">
                    {{ Session::get('message') }}
                </p>

            </div>
        @endif
        <section>
            <div class="min-h-screen hero-image bg-right-bottom bg-cover ">
                <div class="relative container mx-auto p-4">
                    <div>
                        <div class="w-full">
                            <section class=" body-font overflow-hidden">
                                <div class="container w-full  ">
                                    <div class="w-full  flex flex-col md:flex-row ">
                                        <div class="w-full md:w-1/2">
                                            <img alt="flyer" class="w-full   shadow-2xl"
                                                src="{{ asset($diploma->flyer_thumbnail()) }}">
                                                {{--<img src="http://localhost:8000/storage/course/posters/rPLilEmho76vwpoNnqDD94G4GjFDzRP6vtKjKSlC.jpg" alt="flyer" class="w-full   shadow-2xl">--}}
                                        </div>
                                        <div
                                            class="w-full md:w-1/2 p-5 md:p-10  bg-gradient-to-r from-slate-400 to-slate-100 opacity-80 z-10 shadow-2xl ">
                                            {{-- Textos llamativos --}}
                                            <div class="text-justify">

                                                <p class="mb-3">
                                                    <span class="text-xl">
                                                        DURACIÓN
                                                    </span>
                                                    <br>
                                                    <span class="text-2xl">6 MESES</span>
                                                </p>
                                                <p class="text-2xl mb-3">
                                                    <b>4 HORAS</b> SEMANALES
                                                </p>

                                                <p>
                                                    UNA VEZ INSCRITOS, SE LES PROPORCIONARÁ EL CALENDARIO DE CLASES.
                                                </p>
                                                <small>(SE CONTEMPLA LA SUSPENSIÓN DE CLASES POR DÍAS FESTIVOS)</small>
                                            </div>



                                            <div class=" mt-10 md:mt-40 mx-auto w-full ">

                                                {{--  --}}
                                                @if (Auth::check())
                                                    @if (Auth::user()->isRegistered($diploma->product_id))
                                                        <form method="get" action="{{ route('diploma.show') }}">
                                                            <input hidden type="text" name="product_id"
                                                                value="{{ $diploma->product_id }}" id="">
                                                            <input hidden type="text" name="inscription_id"
                                                                value="{{ Auth::user()->findInscription($diploma->product_id)->id }}"
                                                                id="">
                                                            <x-jet-button class=" w-full ">Ir allá</x-jet-button>

                                                        </form>
                                                    @else
                                                        <div class=" flex flex-col md:flex-row  w-full">
                                                            <a target="blank"
                                                                href="https://api.whatsapp.com/send?phone=+521{{ $diploma->info->contact ?? '5520824098' }}&text=Hola,%20Tengo%20interes%20en%20{{ $diploma->title }}"
                                                                class="w-full inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs m-1 text-white uppercase tracking-widest hover:bg-secondary active:bg-secondary focus:outline-none focus:border-secondary focus:ring disabled:opacity-25 transition">Contactar
                                                                con un asesor</a>
                                                            <a target="blank" href=" class="w-full inline-flex
                                                                items-center px-4 py-2 bg-primary border
                                                                border-transparent rounded-md font-semibold text-xs m-1
                                                                text-white uppercase tracking-widest hover:bg-secondary
                                                                active:bg-secondary focus:outline-none
                                                                focus:border-secondary focus:ring disabled:opacity-25
                                                                transition"></a>

                                                            <x-jet-button class="w-full " x-data="{ id: 'modal' }"
                                                                x-on:click="$dispatch('modal-overlay',{id})">Prefiero
                                                                que me
                                                                contacten</x-jet-button>


                                                        </div>
                                                        <form action="{{ route('product.pricing') }}" class="w-full">
                                                            <input type="text" name="product_id" id=""
                                                                value="{{ $diploma->product->id }}" hidden>
                                                            <x-jet-button>Inscribirme en linea</x-jet-button>
                                                        </form>
                                                        <a target="blank"
                                                            class="w-full inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs m-1 text-white uppercase tracking-widest hover:bg-secondary active:bg-secondary focus:outline-none focus:border-secondary focus:ring disabled:opacity-25 transition"
                                                            href="http://www.facebook.com/sharer.php?u={{ route('diploma.preview', $diploma->id) }}">Compartir</a>
                                                    @endif
                                                 @else
                                                 <div class=" flex flex-col md:flex-row  w-full">
                                                    <a target="blank"
                                                        href="https://api.whatsapp.com/send?phone=+521{{ $diploma->info->contact ?? '5520824098' }}&text=Hola,%20Tengo%20interes%20en%20{{ $diploma->title }}"
                                                        class="w-full inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs m-1 text-white uppercase tracking-widest hover:bg-secondary active:bg-secondary focus:outline-none focus:border-secondary focus:ring disabled:opacity-25 transition">Contactar
                                                        con un asesor</a>
                                                    <a target="blank" href=" class="w-full inline-flex items-center px-4
                                                        py-2 bg-primary border border-transparent rounded-md
                                                        font-semibold text-xs m-1 text-white uppercase tracking-widest
                                                        hover:bg-secondary active:bg-secondary focus:outline-none
                                                        focus:border-secondary focus:ring disabled:opacity-25
                                                        transition"></a>

                                                    <x-jet-button class="w-full " x-data="{ id: 'modal' }"
                                                        x-on:click="$dispatch('modal-overlay',{id})">Prefiero que me
                                                        contacten</x-jet-button>


                                                </div>
                                                <form action="{{ route('product.pricing') }}" class="w-full">
                                                    <input type="text" name="product_id" id=""
                                                        value="{{ $diploma->product->id }}" hidden>
                                                    <x-jet-button>Inscribirme en linea</x-jet-button>
                                                </form>
                                                <a target="blank"
                                                    class="w-full inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs m-1 text-white uppercase tracking-widest hover:bg-secondary active:bg-secondary focus:outline-none focus:border-secondary focus:ring disabled:opacity-25 transition"
                                                    href="http://www.facebook.com/sharer.php?u={{ route('diploma.preview', $diploma->id) }}">Compartir</a>


                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="mx-auto md:p-20 text-white ">
                                <div class=" md:flex md:flex-row items-stretch  justify-center "
                                    x-data="{ tab: 1 }">
                                    <div
                                        class=" w-full md:w-1/4 inline-flex items-baseline overflow-x-auto md:flex md:flex-col justify-start space-y-4 text-right ">
                                        <a class="px-4 py-2 text-sm"
                                            :class="{
                                                'z-20 border-b-2 transform translate-x-2 border-primary font-bold': tab ===
                                                    1,
                                                ' transform -translate-x-2': tab !== 1
                                            }"
                                            href="#" @click.prevent="tab = 1">
                                            PRESENTACIÓN
                                        </a>
                                        <a class="px-4 py-2 text-sm"
                                            :class="{
                                                'z-20 border-b-2  transform translate-x-2 border-primary font-bold': tab ===
                                                    2,
                                                ' transform -translate-x-2': tab !== 2
                                            }"
                                            href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                                            OBJETIVO
                                        </a>
                                        <a class="px-4 py-2 text-sm"
                                            :class="{
                                                'z-20 border-b-2  transform translate-x-2 border-primary  font-bold': tab ===
                                                    3,
                                                ' transform -translate-x-2': tab !== 3
                                            }"
                                            href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                                            TEMARIO
                                        </a>
                                        {{-- <a class="px-4 py-2 text-sm"
                                        :class="{
                                            'z-20 border-b-2  transform translate-x-2 border-primary  font-bold': tab ===
                                                4,
                                            ' transform -translate-x-2': tab !== 4
                                        }"
                                        href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                                        DOCENTE
                                    </a> --}}
                                        <a class="px-4 py-2 text-sm"
                                            :class="{
                                                'z-20 border-b-2  transform translate-x-2 border-primary  font-bold': tab ===
                                                    5,
                                                ' transform -translate-x-2': tab !== 5
                                            }"
                                            href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                                            COSTOS
                                        </a>
                                    </div>
                                    <div class="w-full p-7">
                                        <div class="space-y-6" x-show="tab === 1">
                                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 1"
                                                x-transition:enter="transition duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">
                                                Presentación
                                            </h3>

                                            <p class="text-xl" x-show="tab === 1"
                                                x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">
                                                {{ $diploma->info->introduction ?? 'No Definido' }}

                                            </p>

                                        </div>

                                        <div class="space-y-6" x-show="tab === 2">
                                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 2"
                                                x-transition:enter="transition duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">
                                                Objetivo
                                            </h3>

                                            <p class="text-xl" x-show="tab === 2"
                                                x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">
                                                {{ $diploma->info->objectives ?? 'No Definido' }}
                                            </p>


                                        </div>

                                        <div class="space-y-6" x-show="tab === 3">
                                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 3"
                                                x-transition:enter="transition duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">
                                                Temario
                                            </h3>

                                            <ol class="list-decimal leading-5" x-show="tab === 3"
                                                x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">

                                                @foreach ($diploma->subjects() as $subject)
                                                    <li>{{ $subject->name ?? 'noname' }}</li>
                                                @endforeach
                                            </ol>


                                        </div>

                                        {{-- <div class="space-y-6" x-show="tab === 4">
                                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 4"
                                            x-transition:enter="transition duration-500 transform ease-in"
                                            x-transition:enter-start="opacity-0">
                                            Docente
                                        </h3>

                                        <p class="text-xl" x-show="tab === 4"
                                            x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                            x-transition:enter-start="opacity-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, maxime?
                                        </p>

                                        <a href="https://twitter.com/smilesharks"
                                            class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-primary border-primary cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-primary focus-within:border-primary focus-within:text-white sm:text-base lg:text-lg"
                                            class="text-base" x-show="tab === 4"
                                            x-transition:enter="transition delay-500 duration-500 transform ease-in"
                                            x-transition:enter-start="opacity-0">
                                            Learn more
                                        </a>
                                    </div> --}}

                                        <div class="space-y-6 leading-5" x-show="tab === 5">
                                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 5"
                                                x-transition:enter="transition duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">
                                                Costos
                                            </h3>

                                            <div class="text-xl" x-show="tab === 5"
                                                x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">
                                                PAGO ÚNICO | $6,999 MXN <small>($375 USD)</small> <br>
                                                INSCRIPCIÓN | $499 MXN <small>($30 USD)</small> <br>
                                                MENSUALIDAD | $1,299 MXN <small>($77 USD)</small> <br>
                                                CERTIFICACIÓN | $2,700 MXN <small>($165 USD)</small>

                                            </div>
                                            <p class="text-base" x-show="tab === 5"
                                                x-transition:enter="transition delay-300 duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">
                                                <small>
                                                    ¿DESEAS HABLAR CON UN ASESOR?

                                                </small>
                                            </p>
                                            <a href="https://api.whatsapp.com/send?phone=+521{{ $diploma->info->contact ?? '5520824098' }}&text=Hola,%20Tengo%20interes%20en%20{{ $diploma->title }}"
                                                target="blank"
                                                class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-primary border-primary cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-primary focus-within:border-primary focus-within:text-white sm:text-base lg:text-lg"
                                                class="text-base" x-show="tab === 5"
                                                x-transition:enter="transition delay-500 duration-500 transform ease-in"
                                                x-transition:enter-start="opacity-0">
                                                HABLAR CON UN ASESOR
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <hr>
        <section class="text-white body-font">
            <div class="container px-5 py-24 mx-auto">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-white mb-20">Al Finalizar Este
                    Curso
                    <br class="hidden sm:block">Obtendrás
                </h1>
                <div
                    class="flex items-center lg:w-full mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-white text-lg title-font font-medium mb-2">Grabaciones</h2>
                        <p class="leading-relaxed text-base">Acceso durante medio año a las grabaciones del curso con
                            la finalidad de reforzar conocimientos.</p>

                    </div>
                </div>
                <div
                    class="flex items-center lg:w-full mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">

                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />

                        </svg>
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-white text-lg title-font font-medium mb-2">Diploma</h2>
                        <p class="leading-relaxed text-base">Un Diploma digital que acredita los conocimientos
                            adquiridos en el diplomado.</p>

                    </div>

                </div>

                <div class="flex items-center lg:w-full mx-auto sm:flex-row flex-col">
                    <div
                        class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary flex-shrink-0">

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />


                        </svg>
                    </div>
                    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                        <h2 class="text-white text-lg title-font font-medium mb-2">Certificado</h2>
                        <p class="leading-relaxed text-base">Un Certificado con validez oficial <small>*costo
                                adicional</small>, nacional e internacional, mismo que tiene su propia constancia de
                            acreditación ante la secretaria de educación superior y secretaria de innovación, ciencia y
                            tecnología, el cual puede ser apostillado .</p>

                    </div>
                </div>

            </div>
        </section>
    </div>
    <script>
        // grab everything we need
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        // add event listeners
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
    @livewire('modals.contact-advisor-modal', ['product_id' => $diploma->product->id])
</x-app-layout>
