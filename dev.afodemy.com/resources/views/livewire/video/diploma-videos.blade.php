<div x-data="{ src: '(/)' , title:'Seleccione un video'}">

    <section  class="w-full flex flex-col lg:flex-row bg-gray-100">

        <div class="w-full lg:w-8/12 flex flex-col">
            <div class="aspect-16/9" style="padding:45.55% 0 0 0;position:relative;"><iframe x-bind:src="src"
                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                    style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
            <div class="w-full border-2 h-20 p-3 flex flex-row">
                <div class="w-full text-left my-auto">
                    <b>
                        <h3 class="text-xl" x-text="title"></h3>
                    </b>
                </div>
                <div class="w-1/4">
                    <a href="" class=" left-0 p-3 w-full my-1 text-lg rounded-md bg-[#2D8CFF]  text-white">
                        Abrir Zoom
                    </a>
                </div>

            </div>
        </div>
        <div>
            <section>
                <div
                    class="absolute invisible md:visible md:fixed text-center right-5   lg:w-1/4   bg-gray-100 overflow-y-scroll ">

                    <h2 class="my-3 text-lg border-2 border-gray-400 rounded-sm">
                        Contenido del Curso
                    </h2>
                    <div class="list divided " x-data="{ selected: null }">
                        @foreach ($diploma->subjects() as $key => $subject)
                            <div class=" bg-primary text-lg w-full my-1 text-white ">
                                <div class="body">
                                    <p class="p-3 text-sm item cursor-pointer"
                                        x-on:click="selected !== {{ $key }} ? selected = {{ $key }} : selected = null">
                                        {{ $subject->name }}
                                    </p>
                                </div>
                            </div>

                            <div x-show="selected == {{ $key }}" class=""
                                x-transition.duration.200ms>
                                <ol class="list-decimal text-left">
                                    @foreach ($subject->videos() as $key => $video)
                                        <button x-on:click="src = '{{ $video->iframe }}' , title='{{$video->name}}'"
                                            class="p-1 border-2 border-gray-600 truncate cursor-pointer">
                                            {{ $key + 1 }}.- {{ $video->name }}
                                        </button>
                                    @endforeach
                                </ol>

                            </div>
                        @endforeach


                    </div>


                </div>
            </section>
        </div>

    </section>
    <section class="mx-auto md:p-20 text-black ">
        <div class=" md:flex md:flex-row items-stretch  justify-center " x-data="{ tab: 4 }">
            <div
                class=" w-full md:w-1/4 inline-flex items-baseline overflow-x-auto md:flex md:flex-col justify-start space-y-4 text-right ">
                <a class="px-4 py-2 text-sm lg:hidden"
                    :class="{
                        'z-20 border-b-2  transform translate-x-2 border-primary  font-bold': tab ===
                            4,
                        ' transform -translate-x-2': tab !== 4
                    }"
                    href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                    CONTENIDO
                </a>
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


            </div>
            <div class="w-full p-7">
                <div class="space-y-6" x-show="tab === 4">

                    <div class="text-xl" x-show="tab === 4"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        <div>

                            {{-- playlist --}}
                            <section  >
                                <div class="lg:hidden text-center right  w-full my-5  bg-gray-100 overflow-y-scroll max-h-screen">

                                    <h2 class="my-3 text-lg border-2 border-gray-400 rounded-sm">
                                        Contenido del Curso
                                    </h2>
                                    <div class="list divided " x-data="{ selected: null }">
                                        @foreach ($diploma->subjects() as $key => $subject)
                                            <div class=" bg-primary text-lg w-full my-1 text-white ">
                                                <div class="body">
                                                    <p class="p-3 text-sm item cursor-pointer"
                                                        x-on:click="selected !== {{ $key }} ? selected = {{ $key }} : selected = null">
                                                        {{ $subject->name }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div x-show="selected == {{ $key }}" class=""
                                                x-transition.duration.200ms>
                                                <ol class="list-decimal text-left">
                                                    @foreach ($subject->videos() as $key => $video)
                                                        <button x-on:click="src = '{{ $video->iframe }}',title='{{$video->name}}'"
                                                            class="p-1 border-2 border-gray-600 truncate cursor-pointer w-full">
                                                            {{ $key + 1 }}.- {{ $video->name }}
                                                        </button>
                                                    @endforeach
                                                </ol>

                                            </div>
                                        @endforeach


                                    </div>


                                </div>
                            </section>
                        </div>



                    </div>


                </div>

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



            </div>
        </div>
    </section>
</div>
