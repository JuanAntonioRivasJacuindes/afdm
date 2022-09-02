<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add') }}
        </h2>
    </x-slot>
    <div class="w-full ">
        <div class="w-auto p-5 bg-white">
            <label for="card-holder-name">Nombre del Sustentante:</label>
            <input class="w-full rounded-md" placeholder="Nombre en el plástico" id="card-holder-name" type="text">

            <!-- Stripe Elements Placeholder -->
            <div class="w-full p-5 border-2 my-2" id="card-element"></div>

            <x-jet-button class="w-full" id="card-button" data-secret="{{ $intent->client_secret }}">
                {{__('Add')}}
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

    cardButton.addEventListener('click', async (e) => {
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


            window.location.href = "{{ route('stripe.addPaymentMethod', ['seti' => $intent->id]) }}";

        }
    });
</script>
