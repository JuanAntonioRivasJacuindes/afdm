<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Facturación
        </h2>
    </x-slot>
    <div class="w-full p-3">

        <div class="tab-wrapper w-full text-center bg-white shadow-lg min-h-screen" x-data="{ activeTab: 0 }">
            <div class="flex flex-row w-full  bg-gray-200">
                <label @click="activeTab = 0" class="tab-control mx-auto p-2 w-full"
                    :class="{ 'active bg-primary text-white': activeTab === 0 }">Pagos Pendientes</label>
                <label @click="activeTab = 1" class="tab-control mx-auto p-2 w-full"
                    :class="{ 'active bg-primary text-white': activeTab === 1 }">Historial de Pago</label>
                <label @click="activeTab = 2" class="tab-control mx-auto p-2 w-full"
                    :class="{ 'active bg-primary text-white': activeTab === 2 }">Métodos de pago</label>
            </div>
            <div class="w-full bg-gray-100 p-5">



                <div class="tab-panel" :class="{ 'active': activeTab === 0 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 0">
                    <div class="w-full overflow-x-scroll ">

                        <table class="w-full">
                            <thead>
                                <tr class="text-lg border-4 border-gray-300">
                                    <th>Id de Factura</th>
                                    <th>Estatus</th>
                                    <th>Creación</th>
                                    <th>Vencimiento</th>
                                    <th>Cantidad</th>
                                    <th>Pagar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    {{-- @dd() --}}

                                    @if ($invoice->status == 'open')
                                        {{-- @dump($invoice) --}}
                                        <tr class="p-5 w-full border-2 hover:bg-gray-200">
                                            <td class=" p-2">{{ $invoice->number ?? '-' }}</td>
                                            <td class=" p-2"><span>Pendiente</span></td>
                                            <td class=" p-2">{{ date('m/d/Y', $invoice->created) ?? '-' }}</td>
                                            <td class=" p-2">{{ date('m/d/Y', $invoice->due_date) ?? '-' }}</td>

                                            <td class=" p-2">$ {{ number_format($invoice->total / 100, 2) ?? '-' }}</td>
                                            <td class=" p-2" class="text-red-900">
                                                <x-jet-button
                                                    onclick=" window.location='{{ $invoice->hosted_invoice_url }}'">Pagar
                                                </x-jet-button>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="tab-panel" :class="{ 'active': activeTab === 1 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 1">
                    <div class="w-full overflow-x-scroll ">

                        <table class="w-full">
                            <thead>
                                <tr class="text-lg border-4 border-gray-300">
                                    <th>Id de Factura</th>
                                    <th>Estatus</th>
                                    <th>Creación</th>
                                    <th>Pagado el</th>
                                    <th>Cantidad</th>
                                    <th>Descargar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    @if ($invoice->paid)
                                        <tr class="p-5 w-full border-2 hover:bg-gray-200">
                                            <td class=" p-2">{{ $invoice->number ?? '-' }}</td>
                                            <td class=" p-2">Pagado</td>
                                            <td class=" p-2">{{ date('m/d/Y', $invoice->created) ?? '-' }}</td>
                                            <td class=" p-2">
                                                {{ date('m/d/Y', $invoice->status_transitions->finalized_at) ?? '-' }}
                                            </td>

                                            <td class=" p-2">$ {{ number_format($invoice->total / 100, 2) ?? '-' }}
                                            </td>
                                            <td class=" p-2" class="text-red-900"><a
                                                    href="{{ $invoice->invoice_pdf }}">
                                                    <svg class="w-5 mx-auto " xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 384 512">
                                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 224H88c30.9 0 56 25.1 56 56s-25.1 56-56 56H80v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V320 240c0-8.8 7.2-16 16-16zm24 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H80v48h8zm72-64c0-8.8 7.2-16 16-16h24c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H176c-8.8 0-16-7.2-16-16V240zm32 112h8c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16h-8v96zm96-128h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H304v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V304 240c0-8.8 7.2-16 16-16z" />
                                                    </svg></a></td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
                <div class="tab-panel" :class="{ 'active': activeTab === 2 }"
                    x-show.transition.in.opacity.duration.600="activeTab === 2">
                    @if (Auth::user()->stripe_id != null )
                        <div class="mt-10 sm:mt-0">
                            @livewire('payment-methods')
                        </div>
                        {{--Mostar añanadir metodo de pago a usuarios sin metodo--}}
                    @elseif (Auth::user()->stripe_id == null)
                        <div class="mt-10 sm:mt-0">
                            @livewire('payment-methods')
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
