<div>
    {{-- <x-jet-button   x-data="{id:'modal'}"
    x-on:click="$dispatch('modal-overlay',{id})">Contactar un asesor</x-jet-button> --}}
    <section >
        <div class=" fixed inset-0 z-10 flex flex-col items-center justify-end overflow-y-auto bg-black bg-opacity-80 sm:justify-start"
            x-data="{ modal: false }" x-show="modal"
            x-on:modal-overlay.window="if ($event.detail.id == 'modal') modal=true"
            x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

            <div class="w-full px-2 py-20 transition-all transform sm:max-w-2xl" role="dialog" aria-modal="true"
                aria-labelledby="modal-headline" x-show="modal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" x-on:click.away="modal=false">
                <div class="bg-white rounded-sm shadow-sm">
                    <div class="m-2 p-5">

                        <form action=""  enctype="multipart/form-data" method="POST">
                            @csrf
                        <div class="flex flex-col mx-auto my-2">
                            <label for="full_name">Nombre Completo: </label>
                            <input class="rounded-sm capitalize" type="text" name="full_name" id="full_name" placeholder="Ej. Alejandro Reyes Plata" required>
                        </div>
                        <div class="flex flex-col mx-auto my-2">
                            <label for="email">Correo Electrónico: </label>
                            <input class="rounded-sm" type="text" name="email" id="email" placeholder="ejemplo@example.com" required>
                        </div>
                        <div class="flex flex-col mx-auto my-2">
                            <label for="phone_number">Número Celular: </label>
                            <input class="rounded-sm" type="text" name="phone_number" id="phone_number" placeholder="Ej. 5598765432 "required>
                        </div>

                        <div class="flex flex-col mx-auto my-5 text-center">
                            <x-jet-button class="text-center">Enviar</x-jet-button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

    </section>
</div>
