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

    {{-- Modal Add Plan --}}
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
                        placeholder="Descripción" wire:model.defer="plan_description" id="description"
                        rows="3"></textarea>

            </div>

            <!-- Modal footer -->
            <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center">
                <x-jet-button type="submit">
                    Crear
                </x-jet-button>
                </form>
                <x-jet-secondary-button onclick="closeModal('modalAddPlan')">Cerrar</x-jet-secondary-button>

            </div>
        </div>
    </div>

    {{-- End Modal Add Plan --}}
    {{-- Modal add Price --}}
    <div id="modalAddPrice"
        class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
        <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">
            <!-- Modal header -->
            <div class="flex justify-between items-center bg-primary text-white text-xl rounded-t-md px-4 py-2">
                <h3>Crear un precio fijo</h3>
                <button onclick="closeModal('modalAddPrice')">x</button>
            </div>

            <!-- Modal body -->
            <div class="w-full  p-4">

                <form wire:submit.prevent="createPrice">
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
                        placeholder="Descripción" wire:model.defer="plan_description" id="description"
                        rows="3"></textarea>

            </div>

            <!-- Modal footer -->
            <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center">
                <x-jet-button type="submit">
                    Crear
                </x-jet-button>
                </form>
                <x-jet-secondary-button onclick="closeModal('modalAddPrice')">Cerrar</x-jet-secondary-button>

            </div>
        </div>
    </div>

    {{-- End Modal Add Price --}}

    {{-- Modal inscription --}}
    <div id="modalAddInscription"
        class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
        <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">
            <!-- Modal header -->
            <div class="flex justify-between items-center bg-primary text-white text-xl rounded-t-md px-4 py-2">
                <h3>Fijar precio de inscripción</h3>
                <button onclick="closeModal('modalAddInscription')">x</button>
            </div>

            <!-- Modal body -->
            <div class="w-full  p-4">

                <form wire:submit.prevent="createInscription">

                    <label for="price">Precio: </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Precio" wire:model.defer="plan_amount" id="price"><br>
            

            </div>

            <!-- Modal footer -->
            <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center">
                <x-jet-button type="submit">
                    Crear
                </x-jet-button>
                </form>
                <x-jet-secondary-button onclick="closeModal('modalAddInscription')">Cerrar</x-jet-secondary-button>

            </div>
        </div>
    </div>
    {{-- End modal inscription --}}

    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

        <dt class="text-sm font-medium text-gray-500">
            Precios y planes
        </dt>
        <div>
            <x-jet-button onclick="openModal('modalAddPlan')">Crear Plan</x-jet-button>
            <x-jet-button onclick="openModal('modalAddPrice')">Crear Precio</x-jet-button>
            <x-jet-button onclick="openModal('modalAddInscription')">Inscripción</x-jet-button>
        </div>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3 ">
            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">

                        <span class="ml-2 flex-1 w-0 truncate">
                            Nombre
                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                            Descripción
                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                            Monto
                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                            Tipo de plan
                        </span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                        Acciones
                    </div>
                </li>
                @foreach ($plans as $plan)
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">

                            <span class="ml-2 flex-1 w-0 truncate">
                                {{ $plan->plan_name ?? 'Sin nombre' }}
                            </span>
                            <span class="ml-2 flex-1 w-0 truncate">
                                {{ $plan->plan_description ?? 'Sin descripcion' }}
                            </span>
                            <span class="ml-2 flex-1 w-0 truncate">
                                $ {{ $plan->amount ?? 'Sin descripcion' }}
                            </span>
                            <span class="ml-2 flex-1 w-0 truncate">
                                {{ $plan->price_type == 1 ? ('Plan Mensual') : ($plan->price_type == 2 ? ('Pago único') : ($plan->price_type == 3 ? 'Inscripción' :'Indefinido' ))}}
                            </span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <a wire:click="deletePlan({{ $plan->id }})"
                                class="disabled font-medium text-indigo-600 hover:text-indigo-500">
                                Eliminar
                            </a>
                        </div>
                    </li>
                @endforeach

            </ul>
        </dd>
    </div>

</div>

</div>

<!-- component -->
