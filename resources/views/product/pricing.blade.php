<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div x-data="setup()">

            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Precios y Planes</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">Elige el modo de pago que más se adapte a ti.</p>
                    <div class="flex mx-auto border-2 border-primary rounded overflow-hidden mt-6">
                        <ul class="flex justify-center items-center my-4">
                            <template x-for="(tab, index) in tabs" :key="index">
                                <li class="cursor-pointer py-2 px-4 text-gray-400 border-b-8"
                                    :class="activeTab===index ? ' text-primary border-primary' : ''"
                                    @click= "activeTab = index" x-text="tab"></li>
                            </template>
                        </ul>
                    </div>
                </div>
                {{-- Planes Mensuales --}}
                <div x-show="activeTab===0">

                    <div class="flex flex-wrap -m-4">
                      @foreach($plans as $plan)
                      <div class="p-4 sm:w-1/1 md:w-1/{{$plans->count()}} w-full">
                        <div class="h-full p-6 rounded-lg border-2 border-primary flex flex-col relative overflow-hidden">
         
                          <h2 class="text-sm tracking-widest title-font mb-1 font-medium">{{$plan->plan_name}}</h2>
                          <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span>$ {{$plan->amount}}</span>
                            <span class="text-lg ml-1 font-normal text-gray-500"> / mes + Inscripción</span>
                          </h1>
                          <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                              </svg>
                            </span>Vexillologist pitchfork
                          </p>
                          <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                              </svg>
                            </span>Tumeric plaid portland
                          </p>
                          <p class="flex items-center text-gray-600 mb-2">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                              </svg>
                            </span>Hexagon neutra unicorn
                          </p>
                          <p class="flex items-center text-gray-600 mb-6">
                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                <path d="M20 6L9 17l-5-5"></path>
                              </svg>
                            </span>Mixtape chillwave tumeric
                          </p>
                          <form action="{{route('product.plan.checkout',$plan->id)}}" >

                            <x-jet-button class="flex items-center mt-auto text-white bg-primary border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">
                              Seleccionar
                            </x-jet-button>
                          </form>
                        
                        
                          <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
                        </div>
                      </div>
                        @endforeach
                    </div>
                </div>
                {{-- end Planes Mensuales --}}
                {{-- precios Totales --}}

                <div x-show="activeTab===1">

                  <div class="flex flex-wrap -m-4">
                    @foreach($prices as $price)
                    <div class="p-4 sm:w-1/1 md:w-1/{{$prices->count()}} w-full">
                      <div class="h-full p-6 rounded-lg border-2 border-primary flex flex-col relative overflow-hidden">
       
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">{{$price->plan_name}}</h2>
                        <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                          <span>$ {{$price->amount}}</span>
                          <span class="text-lg ml-1 font-normal text-gray-500">/Único</span>
                        </h1>
                        <p class="flex items-center text-gray-600 mb-2">
                          <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                              <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                          </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                          <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                              <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                          </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                          <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                              <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                          </span>Hexagon neutra unicorn
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                          <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                              <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                          </span>Mixtape chillwave tumeric
                        </p>
                        <form action="{{route('product.price.checkout',$price->id)}}">

                          <x-jet-button class="flex items-center mt-auto text-white bg-primary border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">
                            Seleccionar
                          </x-jet-button>
                        </form>
                        <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
                      </div>
                    </div>
                    @endforeach
                  </div>
              </div>
              {{-- End Planes Totales --}}


            </div>
        </div>











        <script>
            function setup() {
                return {
                    activeTab: 0,
                    tabs: [
                        "Mensual",
                        "Total",

                    ]
                };
            };
        </script>
    </section>
</x-app-layout>
