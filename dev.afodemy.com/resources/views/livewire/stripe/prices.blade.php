<div>


    <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
            Precios
        </dt>
        <div>
            <x-jet-button onclick="openModal('modalAddPrice')">Crear Plan</x-jet-button>

        </div>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                {{-- @foreach ($plans as $plan) --}}
                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                        <!-- Heroicon name: solid/paper-clip -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="ml-2 flex-1 w-0 truncate">
                            Poster.pdf
                        </span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Cambiar
                        </a>
                    </div>
                </li>
                {{-- @endforeach --}}
            </ul>
        </dd>
    </div>
    <div id="modalAddPrice"
        class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
        <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-md">

            <!-- Modal header -->
            <div class="flex justify-between items-center bg-primary text-white text-xl rounded-t-md px-4 py-2">
                <h3>Modal header</h3>
                <button onclick="closeModal('modalAddPrice')">x</button>
            </div>

            <!-- Modal body -->
            <div class="max-h-48  p-4">

                <form wire:submit="createPrice">
                    <input type="text" wire:model="name">

                    <input type="text" name="exam" value="aaa">
                    <input type="text" wire:model="email">


                    <button type="submit">Save Contact</button>
                </form>

                <x-jet-secondary-button onclick="closeModal('modalAddPrice')">Cerrar</x-jet-secondary-button>

            </div>

        </div>

    </div>
</div>
