<x-jet-action-section>
    <x-slot name="title">
        {{ __('Payment Method') }}
    </x-slot>


    <x-slot name="description">
        {{ __('Agrega y guarda tarjetas de crédito a tu cuenta y úsalas para comprar cursos o domiciliar tus pagos.') }}
    </x-slot>

    <x-slot name="content">
        <x-jet-button
            class="w-full h-12 px-5  transition-colors duration-150 bg-indigo-600 rounded-lg focus:shadow-outline "
            onclick="window.location='{{ route('create_payment_method') }}'">+ Agregar una tarjeta</x-jet-button>
        <div class="py-5  bg-gray-100 px-10">
            @foreach ($paymentMethods as $card)
                <div
                    class="px-8 max-w-md mx-auto bg-gradient-to-tr from-black via-gray-500 to-black rounded-lg overflow-hidden md:max-w-sm hover:scale-110 duration-150 shadow-2xl">
                    <div class="md:flex">
                        <div class="w-full p-4">
                            <div class="flex justify-between items-center text-white"> <span
                                    class="text-2xl font-bold uppercase">{{ $card->card->brand }}</span> </div>
                            <div class="flex justify-between items-center mt-10">

                                <div class="flex flex-row"> <span class="text-white text-2xl mr-1 font-bold">**** ****
                                        **** {{ $card->card->last4 }}</span> </div>
                            </div>

                            <div class="mt-8 flex justify-between items-center text-white">
                                <div class="flex flex-col"> <span
                                        class="font-bold text-gray-300 text-sm">{{ $card->card->funding }}</span> <span
                                        class="font-bold">{{ $card->billing_details->name }}</span> </div>
                                <div class="flex flex-col"> <span class="font-bold text-gray-300 text-sm">Expira</span>
                                    <span class="font-bold">{{ $card->card->exp_month }} /
                                        {{ $card->card->exp_year }}</span> </div>

                            </div>

                            <x-jet-danger-button class="w-full h-12  " wire:click="deleteCard('{{ $card->id }}')">
                                Eliminar</x-jet-danger-button>
                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </x-slot>

</x-jet-action-section>
