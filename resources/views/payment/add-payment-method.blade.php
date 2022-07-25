<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Add') }}
      </h2>
  </x-slot>

<div class="w-full py-8 pr-12 items-center gap-9 w-full p-5">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Nombre del sustentante
      </label>
    </div>
    <div class="md:w-2/3">
      <input id="card-holder-name" type="text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:primary"  >
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Tarjeta
      </label>
    </div>
    <div class="md:w-2/3">
      <div  id="card-element"></div>
    </div>
  </div>

  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <x-jet-button id="card-button" data-secret="{{ $intent->client_secret }}">
        Agregar
    </x-jet-button>
    </div>
  </div>
</div>


<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe=Stripe('{{env('STRIPE_KEY')}}');

    const elements=stripe.elements();
    const cardElement=elements.create('card');

    cardElement.mount('#card-element');


    const cardHolderName=document.getElementById('card-holder-name');
const cardButton=document.getElementById('card-button');
const clientSecret=cardButton.dataset.secret;

cardButton.addEventListener('click', async (e) => {
    const { setupIntent, error }=await s
    tripe.confirmCardSetup(
        clientSecret, {
            payment_method: {
                card: cardElement,
                billing_details: { name: cardHolderName.value }
            }
        }
    );

    if (error) {
        alert(error.message);
    } else {
      window.location.href = "{{route('stripe.addPaymentMethod', ['pid' => " +setupIntent.payment_method +"])}}" ;

    }
});
</script>
</x-app-layout>
