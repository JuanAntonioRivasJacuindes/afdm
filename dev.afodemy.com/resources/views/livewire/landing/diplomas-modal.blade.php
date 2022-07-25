<div>
    <section class="py-20 mx-auto space-y-8 sm:py-20">
        <div style='width:800px;' class="container flex flex-row items-stretch justify-center w-full max-w-4xl space-x-12" x-data="{tab: 1}">
            <div class="flex flex-col justify-start w-1/4 space-y-4">
                <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 1, ' transform -translate-x-2': tab !== 1}" href="#" @click.prevent="tab = 1">
                    BATMAN & ROBIN
                </a>
                <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 2, ' transform -translate-x-2': tab !== 2}" href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                    BATMAN V SUPERMAN: DAWN OF JUSTICE (2016)
                </a>
                <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 3, ' transform -translate-x-2': tab !== 3}" href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                    BATMAN FOREVER (1995)
                </a>
                <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 4, ' transform -translate-x-2': tab !== 4}" href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                    BATMAN: THE KILLING JOKE (2016)
                </a>
                <a class="px-4 py-2 text-sm" :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 5, ' transform -translate-x-2': tab !== 5}" href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                    JUSTICE LEAGUE (2017)
                </a>
            </div>
            <div class="w-3/4">
                <div class="space-y-6" x-show="tab === 1">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 1" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        BATMAN & ROBIN
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 1" x-transition:enter="transition delay-100 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                         Rottentomatoes 12%
                    </p>
                    <p class="text-xl" x-show="tab === 1" x-transition:enter="transition delay-200 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Batman & Robin try to keep their relationship together even as they must stop Mr. Freeze and Poison Ivy from...
                    </p>
                    <p class="text-base" x-show="tab === 1" x-transition:enter="transition delay-300 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks" class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg" class="text-base" x-show="tab === 1" x-transition:enter="transition delay-500 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 2">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 2" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        BATMAN V SUPERMAN: DAWN OF JUSTICE (2016)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 2" x-transition:enter="transition delay-100 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Rottentomatoes 40%
                    </p>
                    <p class="text-xl" x-show="tab === 2" x-transition:enter="transition delay-200 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Batman (Ben Affleck) and Superman (Henry Cavill) share the screen in this Warner Bros./DC Entertainment co-production penned by David S....
                    </p>
                    <p class="text-base" x-show="tab === 2" x-transition:enter="transition delay-300 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks" class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg" class="text-base" x-show="tab === 2" x-transition:enter="transition delay-500 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 3">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 3" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        BATMAN FOREVER (1995)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 3" x-transition:enter="transition delay-100 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Rottentomatoes 12%
                    </p>
                    <p class="text-xl" x-show="tab === 3" x-transition:enter="transition delay-200 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Rottentomatoes 38%
                    </p>
                    <p class="text-base" x-show="tab === 3" x-transition:enter="transition delay-300 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks" class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg" class="text-base" x-show="tab === 3" x-transition:enter="transition delay-500 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 4">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 4" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        BATMAN: THE KILLING JOKE (2016)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 4" x-transition:enter="transition delay-100 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Rottentomatoes 39%
                    </p>
                    <p class="text-xl" x-show="tab === 4" x-transition:enter="transition delay-200 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Fathom Events, Warner Bros. and DC Comics invite you to a premiere event when Batman: The Killing Joke comes to...
                    </p>
                    <p class="text-base" x-show="tab === 4" x-transition:enter="transition delay-300 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks" class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg" class="text-base" x-show="tab === 4" x-transition:enter="transition delay-500 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 5">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 5" x-transition:enter="transition duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        JUSTICE LEAGUE (2017)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 5" x-transition:enter="transition delay-100 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Rottentomatoes 40%
                    </p>
                    <p class="text-xl" x-show="tab === 5" x-transition:enter="transition delay-200 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Fueled by his restored faith in humanity and inspired by Superman's selfless act, Bruce Wayne enlists the help of his...
                    </p>
                    <p class="text-base" x-show="tab === 5" x-transition:enter="transition delay-300 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks" class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg" class="text-base" x-show="tab === 5" x-transition:enter="transition delay-500 duration-500 transform ease-in" x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js'></script>
</div>
