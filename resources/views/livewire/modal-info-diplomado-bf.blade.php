<div>
    <section id="mainModal" x-data="{ modal: false }">
        <div class=" fixed inset-0 z-50 flex flex-col items-center justify-end overflow-y-auto bg-black bg-opacity-80 sm:justify-start"
            x-show="modal" x-on:modal-overlay.window="if ($event.detail.id == 'modal-info') modal=true"
            x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

            <div class="w-full px-2 transition-all transform sm:max-w-2xl" role="dialog" aria-modal="true"
                aria-labelledby="modal-headline" x-show="modal"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" x-on:click.away="modal=false">
                <div class="bg-white rounded-sm shadow-md  ">
                    <div
                        class="flex justify-between w-full  p-10 my-5 py-5 text-center text-xl bg-blue-800 text-white">
                        <h2></h2>
                        <button class=" bg-red-500 text-white text-xl rounded-sm px-4 py-2"
                            x-on:click="modal=false">x</button>

                    </div>
                    <div class="m-2  pb-3">

                        <form action="{{ route('send.data') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="text" hidden value="Landing Beun Fin" name="source">
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                Diplomado:</label>
                            <select id="diplomados_option" name="diplomado"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 overflow-y-scroll">
                                @foreach ($diplomas_buenfin as $diploma)
                                    <option value="{{ $diploma['title'] }}">
                                        {{-- <input type="text" hidden name="diplomado_name" id="diplomado_name" value="{{$diploma['title']}}"> --}}
                                        {{ $diploma['title'] }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="flex flex-col mx-auto my-2">
                                <label for="full_name">Nombre Completo: </label>
                                <input class="rounded-sm capitalize" type="text" name="full_name" id="full_name"
                                    placeholder="Ej. Alejandro Reyes Plata" required>
                            </div>
                            <div class="flex flex-col mx-auto my-2">
                                <label for="email">Correo Electrónico: </label>
                                <input class="rounded-sm" type="text" name="email" id="email"
                                    placeholder="ejemplo@example.com" required>
                            </div>

                            <div class="flex flex-col mx-auto my-2">
                                <label for="phone">Número Celular: </label>
                                <input class="rounded-sm w-full" type="tel" id="phone" value="+52 "
                                    name="phone_number" placeholder="Ej. 5598765432 " required>
                            </div>
                            <div class=" flex flex-col mx-auto my-5 text-center">
                                <x-jet-button class="text-center" x-on:click="messagealert()">Enviar</x-jet-button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <link rel='stylesheet'
            href='https://intl-tel-input.com/node_modules/intl-tel-input/build/css/intlTelInput.css?1549804213570'>

        <script src='https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570'></script>
    </section>
</div>
<script>
    const nameLead = document.getElementById('full_name');
    const emailLead = document.getElementById('email');
    const phoneLead = document.getElementById('phone');
    console.log(phoneLead.value);

    function messagealert() {
        if (nameLead.value != "" && emailLead.value != "" && phoneLead.value != "") {
            alert("¡¡Gracias!! En un momento nos contactremos contigo");
        }

    }
    var countryData = window.intlTelInputGlobals.getCountryData(),
        input = document.querySelector("#phone"),
        addressDropdown = document.querySelector("#address-country");

    // init plugin
    var iti = window.intlTelInput(input, {
        hiddenInput: "full_phone",
        utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570" // just for formatting/placeholders etc
    });

    // populate the country dropdown
    for (var i = 0; i < countryData.length; i++) {
        var country = countryData[i];
        var optionNode = document.createElement("option");
        optionNode.value = country.iso2;
        var textNode = document.createTextNode(country.name);
        optionNode.appendChild(textNode);
        addressDropdown.appendChild(optionNode);
    }
    // set it's initial value
    addressDropdown.value = iti.getSelectedCountryData().iso2;

    // listen to the telephone input for changes
    input.addEventListener('countrychange', function(e) {
        addressDropdown.value = iti.getSelectedCountryData().iso2;
    });

    // listen to the address dropdown for changes
    addressDropdown.addEventListener('change', function() {
        iti.setCountry(this.value);
    });
</script>
