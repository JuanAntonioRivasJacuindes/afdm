<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Añadir método de pago') }}
        </h2>
    </x-slot>
    {{--altert campo nombre--}}
    <div id="alertNombre" style="display: none">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Por favor!</strong>
            <span class="block sm:inline">Coloque en nombre del sustentante</span>
            <span id="closeAlertName" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    </div>
    {{--alert tarejta añanida--}}
    <div id="alertTarjetaAdd" style="display: none" class="">
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
              <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
              <div>
                <p class="font-bold">Todo en orden</p>
                <p class="text-sm">Metodo de pago añanido correctamente</p>
              </div>
            </div>
        </div>
    </div>
    {{--metodo de pago--}}
    <div class="w-full ">
        <div class="w-auto p-5 bg-white">
            <label for="card-holder-name">Nombre del Sustentante:</label>
            <input class="w-full rounded-md" placeholder="Nombre en el plástico" id="card-holder-name" type="text">

            <!-- Stripe Elements Placeholder -->
            <div class="w-full p-5 border-2 my-2" id="card-element"></div>

            <x-jet-button class="w-full" id="card-button" data-secret="{{ $intent->client_secret }}">
                {{__('Añadir')}}
            </x-jet-button>
        </div>
    </div>


</x-app-layout>

<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe("{{ env('STRIPE_KEY') }}");

    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');
</script>
<script>
    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;
    const alertName = document.getElementById('alertNombre');
    const alertCardAdd = document.getElementById('alertTarjetaAdd');
    const closeAlertButton = document.getElementById("closeAlertName");

    cardButton.addEventListener('click', async (e) => {
        //cardElement.mount('#card-element');
        if(cardHolderName.value=="" || cardHolderName.value == null){

            alertName.style.display = "block";
            alertName.classList.add('transition-opacity');
            setTimeout(()=>{
                //console.log("done");
                alertName.style.display = "none";
            }, 5000);

        }else{
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            );

        if (error) {
            alert(error.message);

        } else {
            alertCardAdd.style.display =  "block";
            window.location.href = "{{ route('stripe.addPaymentMethod', ['seti' => $intent->id]) }}";
            //window.location.href = "#";
        }
        }
    });

    closeAlertButton.addEventListener('click', function () {
        if( alertName.style.display == "block"){
            alertName.style.display = "none";
        }
    });
</script>
