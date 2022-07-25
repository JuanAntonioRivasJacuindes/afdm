<div>

    <div>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $course->title ?? ''}}


                </h3>
                <x-jet-secondary-button onclick="openModal('modalUpdatePrice')">Editar Datos</x-jet-secondary-button>

                <p class="mt-1 max-w-2xl text-sm text-gray-500">


                </p>
                <p>

                </p>
            </div>
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
            
            <div class="bg-white px-4 py-5 sm:px-6">
                <dl>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Nombre
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $course->title ?? 'Sin Nombre' }}

                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Fecha de inicio
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $course->date->starts_at ?? 'Sin Fecha' }}
                        </dd>
                    </div>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Fecha Termino
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $course->date->ends_at ?? 'Sin Fecha' }}
                        </dd>
                    </div>

                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Descripcion
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $course->description ?? 'Sin Descripcion' }}
                        </dd>
                    </div>
                    {{-- Pendiente la edicion de imagenes --}}
              
                 
        </div>

    </div>

    <!-- component -->


    <div id="modalUpdatePrice" class="fixed hidden z-50 inset-0 bg-gray-800 bg-opacity-60 overflow-y-auto h-full w-full px-4">
        <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

            <!-- Modal header -->
            <div class="flex justify-between items-center bg-primary text-white text-xl rounded-t-md px-4 py-2">
                <h3>Actualizar Datos</h3>

                <button onclick="closeModal('modalUpdatePrice')">x</button>
            </div>

            <!-- Modal body -->
            <div class="w-full max-w-md b">




                <form wire:submit.prevent="update" method="POST" enctype='multipart/form-data'
                    class="bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="mb-4">

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                            Titulo
                        </label>
                        <input type="text" name="title" id="title" wire:model.defer="title"><br>
                        @error('title') <span class="error">
                                <p class="text-red-500 text-xs italic">El título es obligatorio y no debe exceder los 22
                                    caracteres
                                </p>
                        </span><br> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                            Descripción de 30 - 50 palabras
                        </label>
                        <textarea name="description" id="description" cols="30" rows="10"
                            wire:model.defer="description"></textarea><br>
                        @error('description') <span class="error">
                                <p class="text-red-500 text-xs italic">La descripción es obligatoria</p>
                        </span><br> @enderror


                    </div>


                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="starts_at">
                            Fecha de inicio
                        </label>
                        <input type="date" name="starts_at" id="starts_at" wire:model.defer="starts_at"><br>
                        @error('starts_at') <span class="error">
                                <p class="text-red-500 text-xs italic">La fecha de inicio es obligatoria</p>
                        </span><br> @enderror
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="ends_at">
                            Fecha de finalizacion
                        </label>
                        <input type="date" name="ends_at" id="ends_at" wire:model.defer="ends_at"><br>
                        @error('ends_at') <span class="error">
                                <p class="text-red-500 text-xs italic">La fecha de finalizacion</p>
                        </span><br> @enderror
                    </div>


            </div>

            <!-- Modal footer -->
            <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
                <x-jet-secondary-button onclick="closeModal('modalUpdatePrice')">Cerrar</x-jet-secondary-button>
                <x-jet-button class="gap-y-4" wire:submit.prevent="submit">Actualizar</x-jet-button>

                </form>

            </div>
        </div>
    </div>

</div>