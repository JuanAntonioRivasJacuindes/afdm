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

    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

        <dt class="text-sm font-medium text-gray-500">
            Unidades del diplomado

        </dt>
        <div>
          <div class="">

          <div class="mb-4">

            <label  for="unitName">Nombre de la unidad</label>
            <input wire:model ="unitName" type="text"  id="unitName" name="" value="">
          </div>
          <div class="mb-4">
            <label for="unitKey">Clave de la unidad</label>
            <input type="text" wire:model ="unitKey" id="unitKey" name="" value="">
          </div>
          <div class="mb-4">
            <label for="unitKey">Horas</label>
            <input type="text" wire:model ="hours" id="unitKey" name="" value="">
          </div>
          <div class="mb-4">
            <label for="unitKey">Créditos</label>
            <input type="text" wire:model ="credits" id="unitKey" name="" value="">
          </div>
            <x-jet-button wire:click="addUnit">Agregar Unidad</x-jet-button>
        </div>

        </div>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-3 ">
            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">

                    <div class="w-0 flex-1 flex items-center">

                        <span class="ml-2 flex-1 w-0 truncate">
                            #
                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                            Nombre
                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                            Cláve
                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                            Horas
                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                            Créditos
                        </span>
                        <div class="ml-4 flex-shrink-0">
                          Acciones
                        </div>
                    </div>
                </li>

                @foreach($subjects as $subject)
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center">

                            <span class="ml-2 flex-1 w-0 truncate">
                                {{$subject->unit_index ?? 'No Definido' }}
                            </span>
                            <span class="ml-2 flex-1 w-0 truncate">
                              {{$subject->name ?? 'No Definido' }}

                            </span>
                            <span class="ml-2 flex-1 w-0 truncate">
                              {{$subject->key ?? 'No Definido' }}

                            </span>
                            <span class="ml-2 flex-1 w-0 truncate">
                              {{$subject->hours ?? 'No Definido' }}

                            </span>
                            <span class="ml-2 flex-1 w-0 truncate">
                              {{$subject->credits ?? 'No Definido' }}

                            </span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <a  wire:click="deleteUnit({{$subject->id}})"
                                class="disabled font-medium text-indigo-600 hover:text-indigo-500">
                                Eliminar
                            </a>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <a  wire:click="deleteUnit({{$subject->id}})"
                                class="disabled font-medium text-indigo-600 hover:text-indigo-500">
                                -
                            </a>
                        </div>
                    </li>

                @endforeach

                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">

                        <span class="ml-2 flex-1 w-0 truncate">
                          -
                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                          -

                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                          -

                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                          Total : {{$totalHours}}

                        </span>
                        <span class="ml-2 flex-1 w-0 truncate">
                        Total:   {{$totalCredits}}

                        </span>
                    </div>

                </li>
            </ul>
        </dd>
    </div>

</div>

</div>

