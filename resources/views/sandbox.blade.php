<x-app-layout>

    <meta property="og:url" content="{{ route('/') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Afodemy" />
    <meta property="og:description" content="Pagina de inicio" />
    <meta property="og:image" content="{{ asset('storage/img/landing_bg.webp') }}" />


    <style>



    </style>
    <div class=" bg-primary rounded-3xl sm:w-full md:">
        <section class="text-white inline-flex w-full">
            <div class="w-1/2 m-16">
                <img class="w-full" src="https://picsum.photos/200/200" alt="">
            </div>
            <div class="w-1/2 m-16">
                <h2>10 de julio</h2>
                <h2>Duracion 6 meses</h2>
                <h2>4 horas semanales</h2>
                <h2>Horario </h2>
                <h2>domingo</h2>

                <h2>UNA VEZ INSCRITOS SE LES PROPORCIONA EL CALENDARIO DE CLASES</h2>
            </div>
        </section>
        <section class="py-20 mx-auto space-y-8 sm:py-20 text-white">
            <div class="w-full container flex flex-row items-stretch  justify-center w-full max-w-4xl space-x-12"
                x-data="{ tab: 1 }">
                <div class="flex flex-col justify-start w-1/4 space-y-4 text-right border-r-4">
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                1,
                            ' transform -translate-x-2': tab !== 1
                        }"
                        href="#" @click.prevent="tab = 1">
                        PRESENTACIÓN
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                2,
                            ' transform -translate-x-2': tab !== 2
                        }"
                        href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                        OBJETIVO
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                3,
                            ' transform -translate-x-2': tab !== 3
                        }"
                        href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                        TEMARIO
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                4,
                            ' transform -translate-x-2': tab !== 4
                        }"
                        href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                        DOCENTE
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                5,
                            ' transform -translate-x-2': tab !== 5
                        }"
                        href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                        COSTOS
                    </a>
                </div>
                <div class="w-3/4">
                    <div class="space-y-6" x-show="tab === 1">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 1"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Presentación
                        </h3>

                        <p class="text-xl" x-show="tab === 1"
                            x-transition:enter="transition delay-200 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia labore nobis nesciunt
                            vitae provident. Id recusandae quia quisquam? Vel, nostrum natus? Eligendi dolore eveniet
                            temporibus quaerat voluptatum fuga aliquid doloribus ducimus cum a! Voluptatibus repudiandae
                            exercitationem, nihil quos perspiciatis est praesentium nemo nesciunt, maxime vitae
                            consectetur! Saepe nostrum illum animi!
                        </p>

                        <a href="https://twitter.com/smilesharks"
                            class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                            class="text-base" x-show="tab === 1"
                            x-transition:enter="transition delay-500 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Learn more
                        </a>
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, soluta iure nulla
                            perspiciatis minima quae, omnis debitis fugiat ab, molestiae at exercitationem commodi
                            quidem nemo rerum aut magni dolore porro?
                        </p>

                        <a href="https://twitter.com/smilesharks"
                            class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                            class="text-base" x-show="tab === 2"
                            x-transition:enter="transition delay-500 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Learn more
                        </a>
                    </div>

                    <div class="space-y-6" x-show="tab === 3">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 3"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Temario
                        </h3>

                        <p class="text-xl" x-show="tab === 3"
                            x-transition:enter="transition delay-200 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. In labore maiores atque est neque
                            adipisci mollitia ea eveniet quis culpa?
                        </p>
                        <p class="text-base" x-show="tab === 3"
                            x-transition:enter="transition delay-300 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Is this the right batman for me?
                        </p>
                        <a href="https://twitter.com/smilesharks"
                            class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                            class="text-base" x-show="tab === 3"
                            x-transition:enter="transition delay-500 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Learn more
                        </a>
                    </div>

                    <div class="space-y-6" x-show="tab === 4">
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
                            class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                            class="text-base" x-show="tab === 4"
                            x-transition:enter="transition delay-500 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Learn more
                        </a>
                    </div>

                    <div class="space-y-6" x-show="tab === 5">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 5"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Costos
                        </h3>

                        <p class="text-xl" x-show="tab === 5"
                            x-transition:enter="transition delay-200 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Fueled by his restored faith in humanity and inspired by Superman's selfless act, Bruce
                            Wayne enlists the help of his...
                        </p>
                        <p class="text-base" x-show="tab === 5"
                            x-transition:enter="transition delay-300 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Is this the right batman for me?
                        </p>
                        <a href="https://twitter.com/smilesharks"
                            class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                            class="text-base" x-show="tab === 5"
                            x-transition:enter="transition delay-500 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class=" flex-col w-1/2 text-white ml-20 p-16">
                <button class="bg-gray-800 p-2 mx-auto rounded-lg items-center ">INFORMACIÓN</button>
                <button class="bg-gray-800 p-2 mx-auto rounded-lg items-center ">INSCRIPCION</button>
                <button class="bg-gray-800 p-2 mx-auto rounded-lg   inline-flex "><svg class="w-5"
                        xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                    </svg> COMPARTIR</button>



            </div>

        </section>
        <section class="text-white mx-10">
            <p>TAMBIEN PODRIA INTERESARTE...</p>

            <div id="sync2" class="owl-carousel owl-theme my-2">
                <div class="item hover:bg-black my-1">
                    <img class="brightness-50" src="https://picsum.photos/1200/1200" alt="">
                </div>
                <div class="item hover:bg-black m-1 ">
                    <img class="brightness-50" src="https://picsum.photos/1200/1200" alt="">
                </div>
                <div class="item hover:bg-black m-1 ">
                    <img class="brightness-50" src="https://picsum.photos/1200/1200" alt="">
                </div>
                <div class="item hover:bg-black m-1 ">
                    <img class="brightness-50" src="https://picsum.photos/1200/1200" alt="">
                </div>
                <div class="item hover:bg-black m-1 ">
                    <img class="brightness-50" src="https://picsum.photos/1200/1200" alt="">
                </div>
                <div class="item hover:bg-black m-1 ">
                    <img class="brightness-50" src="https://picsum.photos/1200/1200" alt="">
                </div>
                <div class="item hover:bg-black m-1 ">
                    <img class="brightness-50" src="https://picsum.photos/1200/1200" alt="">
                </div>
                <div class="item hover:bg-black m-1 ">
                    <img class="brightness-50" src="https://picsum.photos/1200/1200" alt="">
                </div>
                <div class="item hover:bg-black m-1 ">
                    <img class="brightness-50" src="https://picsum.photos/1200/1200" alt="">
                </div>
            </div>
        </section>
    </div>


    <div id="fb-root"></div>


    <!-- Your share button code -->
    <div class="fb-share-button " data-href="{{ route('/') }}" data-layout="button_count" data-size="large">
    </div>

    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }
        (document, 'script', 'facebook-jssdk'));

        // grab everything we need
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        // add event listeners
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</x-app-layout>
