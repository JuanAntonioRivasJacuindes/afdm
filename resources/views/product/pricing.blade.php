<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Precios</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">Elige el mejor precio para ti.</p>

          </div>
          <div class="flex flex-row -m-4">
            @foreach ($subproducts as $subproduct)
            <div class="p-4 xl:w-1/4 w-full">
              <div class="h-full p-6 rounded-lg border-2 border-primary flex flex-col relative overflow-hidden">

                <h2 class="text-sm tracking-widest title-font mb-1 font-medium">{{$subproduct->name ?? 'undefined'}}</h2>
                <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                  <span>${{$subproduct->getPlans()->first()->unit_amount/100 ?? 'no definido'}}</span>

                </h1>
                <p class="flex items-center text-gray-600 mb-2">
                  <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>Vexillologist pitchfork
                </p>



                <form action="{{route('product.checkout')}}">
                    <input type="text" name="stripe_id" value="{{$subproduct->getPlans()->first()->id}}" hidden>
                    <input type="text" name="subproduct_id" value="{{$subproduct->id}}" hidden>

                    <x-jet-button class="">ELEGIR
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </x-jet-button>
                </form>

                <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </section>


</x-app-layout>
