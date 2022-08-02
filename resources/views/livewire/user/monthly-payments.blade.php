<div>
    @if (session()->has('message'))
    <div
        class="flex justify-center items-center m-1 font-medium py-1 px-2  rounded-md text-green-700 bg-green-100 border border-green-300 ">
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
    <div class="w-11-12 mx-auto ">
        <h2 class="text-lg p-5">Pagos </h2>
        <div class="flex flex-col  md:flex-row text-left ">
            <div class="flex flex-col w-full  md:w-1/5  m-auto">
                <label  for="amount">Monto</label>
                <input type="text" wire:model.defer="amount" id="amount" placeholder="Monto">
            </div>
            <div class="flex flex-col w-full md:w-1/5 m-auto">

                <label  for="inscription_id" >Inscripción</label>
                <select id="inscription_id"  wire:model.defer="inscription_id" name="inscription_id" id="">
                @foreach ($user_inscriptions as $inscription)
                    <option value="{{$inscription->id}}">{{$inscription->product->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="flex flex-col w-full md:w-1/5  m-auto">

                <label for="voucher">Voucher de pago </label>
                <input type="file" wire:model="voucher" id="voucher">
                <div wire:loading>
                    Subiendo...
                </div>
            </div>
            <div class="flex flex-col w-full md:w-1/5  m-auto">
                <label for="expires_at">Fecha de Vencimiento</label>
                <input type="date" id="expires_at" wire:model.defer="expires_at">
            </div>
        </div>
        <div  wire:loading.remove>

            <x-jet-button  wire:click="addPayment" class=" w-full mx-auto my-3">Agregar</x-jet-button>
        </div>
        <div>
        <h2 class="text-lg p-5">Pagos Registrados</h2>

            <table class="w-full">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Monto</th>
                        <th>Estatus</th>
                        <th>Expira</th>
                        <th>Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($user_payments as $payment)

                    <tr>
                        <td>{{$payment->inscription_id ?? 'no disponible'}}</td>
                        <td>{{$payment->amount ?? 'no disponible'}}</td>
                        <td>{{$payment->status_id ?? 'no disponible'}}</td>
                        <td>{{$payment->expires_at ?? 'no disponible'}}</td>
                        <td>
                        <x-jet-confirms-password wire:then="delete({{$payment->id}})">
                            <x-jet-danger-button type="button" wire:loading.attr="disabled">
                                Eliminar
                            </x-jet-danger-button>
                        </x-jet-confirms-password>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
