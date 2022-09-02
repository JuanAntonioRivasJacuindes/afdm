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

        @foreach ($paymentMethods as $card)
            <div class="text-center bg-gray-100 my-2 p-2 rounded-md border-2 hover:bg-gray-200 flex flex-row">
                <div>
                    {{ $card->card->funding }}
                </div>
                <div>
                    {{ $card->card->brand }}
                </div>
                <div>

                  XXXX-XXXX-XXXX-{{ $card->card->last4 }}
                </div>
                <div>
                    {{ $card->card->exp_month }}/{{ $card->card->exp_year }}
                </div>
                <div>
                    <x-jet-danger-button  wire:click="deleteCard('{{ $card->id }}')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </x-jet-danger-button>
                </div>
            </div>
        @endforeach


    </x-slot>

</x-jet-action-section>
