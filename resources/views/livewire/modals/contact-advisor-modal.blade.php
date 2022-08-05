<div>

    <section  x-data="{ modal: false }">
        <div class=" fixed inset-0 z-50 flex flex-col items-center justify-end overflow-y-auto bg-black bg-opacity-80 sm:justify-start"
            x-show="modal" x-on:modal-overlay.window="if ($event.detail.id == 'modal') modal=true"
            x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

            <div class="w-full px-2 transition-all transform sm:max-w-2xl" role="dialog" aria-modal="true"
                aria-labelledby="modal-headline" x-show="modal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" x-on:click.away="modal=false">
                <div class="bg-white rounded-sm shadow-md  ">
                    <div class="w-full  p-10 my-5 py-5 text-center text-xl bg-gray-200">
                        <h2>Ingresa tu información y un asesor se pondrá en contacto contigo.</h2>
                    </div>
                    <div class="m-2  pb-3">
                        <form action="{{route('lead.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="text" hidden name="product_id" value="{{$product_id}}" id="">
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
                                    name="phone_number" placeholder="Ej. 5598765432 "required>
                            </div>

                            <div class="flex flex-col mx-auto my-5 text-center">
                                <x-jet-button class="text-center">Enviar</x-jet-button>
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
    <script>
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
</div>
