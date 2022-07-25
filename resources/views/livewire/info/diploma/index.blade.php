<div>
    <div>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Información Extra
                </h3>
                <x-jet-secondary-button class="{{ $editorModeNegation }}" wire:click="edit">Editar
                </x-jet-secondary-button>
                <x-jet-button wire:click="save" class="{{ $editorMode }}">Listo</x-jet-button>
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
                            Introducción
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <textarea wire:model.lazy="intro" {{ $field }} class="w-full disabled:bg-gray-200" name="" id="" rows="4"></textarea>

                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Objetivos
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                            <textarea wire:model.lazy="objectives" {{ $field }} class="w-full disabled:bg-gray-200" name="" id="" rows="4"></textarea>
                        </dd>
                    </div>
                    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Dirigido a
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <textarea wire:model.lazy="target" {{ $field }} class="w-full disabled:bg-gray-200" name="" id="" rows="4"></textarea>
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Conocimientos Adquiridos
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <textarea wire:model.lazy="skills" {{ $field }} class="w-full disabled:bg-gray-200" name="" id="" rows="4"></textarea>
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Número de Contacto
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <textarea wire:model.lazy="contact" {{ $field }} class="w-full disabled:bg-gray-200" name="" id="" rows="4"></textarea>
                        </dd>
                    </div>
                    {{-- Pendiente la edicion de imagenes --}}


            </div>

        </div>
    </div>
