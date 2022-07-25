<div>
    <style>
        label:after {
            content: '+';
            position: absolute;
            right: 1em;
            color: #fff;
        }

        input:checked+label:after {
            content: '-';
            line-height: .8em;
        }

        .accordion__content {
            max-height: 0em;
            transition: all 0.4s cubic-bezier(0.865, 0.14, 0.095, 0.87);
        }

        input[name='panel']:checked~.accordion__content {
            /* Get this as close to what height you expect */
            max-height: 50em;
        }
    </style>


    <div id="modalAddPlan"
        class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
        <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

            <!-- Modal header -->
            <div class="flex justify-between items-center bg-primary text-white text-xl rounded-t-md px-4 py-2">
                <h3>Crear un plan</h3>
                <button onclick="closeModal('modalAddPlan')">x</button>
            </div>

            <!-- Modal body -->
            <div class="w-full  p-4">

                <form wire:submit.prevent="createPlan">
                    <label for="name_plan">Nombre: </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Nombre" wire:model.defer="name_plan" id="name_plan"><br>
                    <label for="price">Precio: </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Precio" wire:model.defer="plan_amount" id="price"><br>
                    <label for="description">Descripción: </label>


                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Descripción" wire:model.defer="plan_description" id="description" rows="3"></textarea>

            </div>

            <!-- Modal footer -->
            <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center">
                <x-jet-button type="submit">
                    Crear
                </x-jet-button>
                </form>
                <x-jet-secondary-button onclick="closeModal('modalAddVideo')">Cerrar</x-jet-secondary-button>

            </div>
        </div>
    </div>

    <div>
        <div class="border-t border-gray-200">
            <div>
                @if (session()->has('message'))
                    <div
                        class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
                        <div slot="avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>

                        <div class="text-xl font-normal  max-w-full flex-initial">
                            {{ session('message') }}</div>
                        <div class="flex flex-auto flex-row-reverse">
                            <div>

                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>


        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

            <dt class="text-sm font-medium text-gray-500">
                Videos del curso
            </dt>

            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3 ">


                <div class="accordion w-full  flex-col items-center justify-center h-screen">

                    @foreach ($subjects as $key => $subject)
                        <div class="w-full ">
                            <input type="checkbox" name="panel" id="panel-{{ $key }}" class="hidden">
                            <label for="panel-{{ $key }}"
                                class="relative block bg-primary text-white p-4 shadow border-b border-grey">
                                {{ $subject->name ?? 'No Definido' }}</label>

                            <div class="accordion__content overflow-hidden bg-grey-lighter m-2">
                                <label for="name">Nombre</label>
                                <input id="name" type="text" wire:model.defer="name">
                                <label for="description">Drescripcion</label>
                                <input for="description" type="text" wire:model.defer="description">
                                <label for="iframe">iFrame</label>
                                <input for="iframe" type="text" wire:model.defer="iframe">

                                <x-jet-button wire:click="addVideo({{ $subject->id }})">+ Agregar Video</x-jet-button>
                                <table class="table-auto  w-11/12 align-middle m-4 border-2">
                                    <thead class="bg-primary text-white text-center p-4 gap-3 ">
                                        <tr >
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Frame</th>
                                            <th>Acciones</th>

                                        </tr>
                                    </thead>
                                    @foreach ($subject->videos() as $video)
                                    <tr class="text-center border-2">
                                        <td>{{$video->name ?? 'no definido'}}</td>
                                        <td>{{$video->description ?? 'no definido'}}</td>
                                        <td>{{$video->iframe ?? 'no definido'}}</td>
                                        <td><x-jet-danger-button wire:click="delete({{$video->id}})" class="h-6 p-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                          </svg></x-jet-danger-button> </td>
                                    </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    @endforeach
                </div>


            </dd>
        </div>

    </div>


</div>
</div>
