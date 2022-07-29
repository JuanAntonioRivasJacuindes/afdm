<div class="">
    <header class="border-b border-solid border-gray-300 bg-white">
        <h2 class="p-6">Diplomados</h2>
    </header>
    <section class="m-4 bg-white border border-gray-300 border-solid rounded shadow">
        <header class="border-b border-solid border-gray-300 p-4 text-lg font-medium">
            Diplomados
        </header>
        <section class=" flex flex-row flex-wrap items-center text-center border-b border-solid border-gray-300">
            <div class="p-4 w-full sm:w-1/2 lg:w-1/4 border-b border-solid border-gray-300 md:border-b-0 sm:border-r">
                <span class="text-xs font-medium text-gray-500 uppercase">Crear Nuevo</span>
                <div class="py-4 flex items-center justify-center text-center">
                    <a onclick="openModal('modalCreateDiploma')"
                        class="block text-white bg-primary hover:bg-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        Crear Diplomado
                    </a>
                </div>
            </div>
            <div class="p-4 w-full sm:w-1/2 lg:w-1/4 border-b border-solid border-gray-300 md:border-b-0 sm:border-r">
                <span class="text-xs font-medium text-gray-500 uppercase">Total de diplomados</span>
                <div class="py-4 flex items-center justify-center text-center">
                    <span class="mr-4 text-3xl">{{ $diplomas->count() }}</span>
                    <!-- <span
                        class="inline-flex items-center bg-green-500 h-6 px-2 rounded text-white text-xs">00</span> -->
                </div>
            </div>
            <div class="p-4 w-full sm:w-1/2 lg:w-1/4 border-b border-solid border-gray-300 md:border-b-0 sm:border-r">
                <span class="text-xs font-medium text-gray-500 uppercase">Suscripciones Activas</span>
                <div class="py-4 flex items-center justify-center text-center">
                    <span class="mr-4 text-3xl">--</span>
                    <!-- <span class="inline-flex items-center bg-red-500 h-6 px-2 rounded text-white text-xs">00</span> -->
                </div>
            </div>
            <div
                class="p-4 w-full sm:w-1/2 lg:w-1/4 border-b border-solid border-gray-300 md:border-b-0 sm:border-r flex flex-col items-center">
                <span class="text-xs font-medium text-gray-500 uppercase">Total</span>
                <span class="block py-4 text-gray-500 text-3xl">00</span>

            </div>
        </section>
        <div class="w-full px-4">
            <div class="w-full ">
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-primary text-center">
                            <th
                                class="
                           w-1/6

                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           border-l border-transparent
                           ">
                                Nombre
                            </th>
                            <th
                                class="
                           w-1/6

                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                                Estatus
                            </th>
                            <th
                                class="
                           w-1/6

                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           ">
                                Total

                            </th>
                            <th
                                class="
                       w-1/6

                       text-lg
                       font-semibold
                       text-white
                       py-4
                       lg:py-7
                       px-3
                       lg:px-4
                       ">
                                Opciones

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diplomas as $diploma)
                            <tr>
                                <td
                                    class="
                                    text-center text-dark
                                    font-medium
                                    text-base
                                    py-5
                                    px-2
                                    bg-[#F3F6FF]
                                    border-b border-l border-[#E8E8E8]
                                    ">
                                    {{ $diploma->name }}

                                    <form action="{{ route('diploma.edit', ['diploma' => $diploma->id]) }}"
                                        method="get">
                                        <input type="hidden" name="id" value="{{ $diploma->id }}">
                                        <button class="text-blue-500 hover:text-blue-700">{{ $diploma->title }}</button>
                                    </form>

                                </td>

                                <td
                                    class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                                    {{ $diploma->status->name }}
                                </td>
                                <td
                                    class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                                  {{$diploma->product->suscribedUsers()->count()}}
                                </td>
                                <td>

                                    @livewire('diploma.delete-diploma-button', ['diploma_id' => $diploma->id])
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <section class="">
            <canvas id="myChart" width="200" height="200"></canvas>
        </section>

    </section>


</div>


<div id="modalCreateDiploma"
    class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

        <!-- Modal header -->
        <div class="flex justify-between items-center bg-primary text-white text-xl rounded-t-md px-4 py-2">
            <h3>Crear Diplomado</h3>
            <button onclick="closeModal('modalCreateDiploma')">x</button>
        </div>

        <!-- Modal body -->
        @livewire('diploma.create-diploma-form')

        <!-- Modal footer -->

    </div>
</div>
