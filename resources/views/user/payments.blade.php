<x-app-layout>
<div class="text-center m-3 shadow-xl">
    <table class="w-full p-5 border-2 m-auto  bg-white">
        <thead>
            <tr class="border-2">
                <th>Importe</th>
                <th>Estatus</th>
                <th>Método</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
            <tr class="hover:bg-gray-200">

                <td class="uppercase">{{$payment->currency ??'' }} {{$payment->amount/100 ?? 'no definido'}}</td>
                <td >{{__($payment->status) ?? 'no definido'}}</td>
                <td>****{{$payment->payment_method_details->card->last4 ?? ''}}</td>
                <td>{{date("d-m-Y", $payment->created) ?? 'no definido'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
