<x-app-layout>






    <div x-data="{ currentTab: 1 }" class="flex flex-col ">
        <div class="m-auto w-full flex flex-col items-center">

            <div class="container w-full  flex flex-col">
                <!-- Tabs -->
                <ul class="flex w-full overflow-x-scroll">
                    <li>
                        <a href="#" @click.prevent="currentTab = 1"
                            :class="currentTab === 1 ? 'bg-white' : 'bg-gray-100'"
                            class="inline-flex justify-center items-center rounded-t py-4 px-6 font-medium transition">
                           Información General
                        </a>
                    </li>
                    <li class="ml-1">
                        <a href="#" @click.prevent="currentTab = 2"
                            :class="currentTab === 2 ? 'bg-white' : 'bg-gray-100'"
                            class="inline-flex justify-center items-center rounded-t py-4 px-6 font-medium transition">
                            Descripción
                        </a>
                    </li>
                    <li class="ml-1">
                        <a href="#" @click.prevent="currentTab = 3"
                            :class="currentTab === 3 ? 'bg-white' : 'bg-gray-100'"
                            class="inline-flex justify-center items-center rounded-t py-4 px-6 font-medium transition">
                            Temas
                        </a>
                    </li>
                    <li class="ml-1">
                        <a href="#" @click.prevent="currentTab = 4"
                            :class="currentTab === 4 ? 'bg-white' : 'bg-gray-100'"
                            class="inline-flex justify-center items-center rounded-t py-4 px-6 font-medium transition">
                            Videos
                        </a>
                    </li>
                    <li class="ml-1">
                        <a href="#" @click.prevent="currentTab = 5"
                            :class="currentTab === 5 ? 'bg-white' : 'bg-gray-100'"
                            class="inline-flex justify-center items-center rounded-t py-4 px-6 font-medium transition">
                          Sub Productos
                        </a>
                    </li>
                </ul>

                <!-- Tabs content -->
                <div x-show="currentTab === 1"
                    class="flex flex-wrap w-full overflow-x-scroll bg-white p-6 rounded-b rounded-tr shadow-md">
                    <p class="leading-6 w-full overflow-scroll">
                        @livewire('diploma.update-diploma-form', ['diploma_id' => $diploma->id])

                        @livewire('diploma.update-images', ['diploma_id' => $diploma->id])


                    </p>
                </div>
                <div x-show="currentTab === 2"
                    class="flex flex-wrap w-full overflow-x-scroll bg-white p-6 rounded-b rounded-tr shadow-md">
                    <p class="leading-6">


                            @livewire('info.diploma.index',['diploma_id'=>$diploma->id])
                        </div>
                    </p>
                </div>
                <div x-show="currentTab === 3"
                    class="flex flex-wrap w-full overflow-x-scroll bg-white p-6 rounded-b rounded-tr shadow-md">
    @livewire('subject.index',['diploma_id'=>$diploma->id])
    <p class="leading-6"></p>
                </div>
                <div x-show="currentTab === 4"
                    class="flex flex-wrap w-full overflow-x-scroll bg-white p-6 rounded-b rounded-tr shadow-md">
                    <p class="leading-6">    @livewire('video.subject-videos',['diploma_id'=>$diploma->id])
                    </p>
                </div>
            {{--
                <div x-show="currentTab === 5"
                    class="flex flex-wrap w-full overflow-x-scroll bg-white p-6 rounded-b rounded-tr shadow-md">
                    <p class="leading-6">
                        php@livewire('subproduct.index',['product_id'=>$diploma->product->id])
                    </p>
                </div>
            --}}
            </div>
        </div>
    </div>

    </div>
</x-app-layout>
