<x-app-layout class="bg-primary">
  <style>
      .clear-left {
          clear: left;
      }

      /* .hero-image::after {
          display: block;
          position: absolute;
          background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #F3F4F6 100%);
          bottom: 0;
          left: 0;
          right: 0;
          height: 75vh;
          width: 100%;
          content: '';
      } */

  </style>

  <section class="bg-gradient-to-bl from-primary via-secondary ">
      <!--     <div class="min-h-screen hero-image bg-center bg-cover flex" style="background-image: url(https://images.unsplash.com/photo-1491438590914-bc09fcaaf77a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ);"> -->

      <div class="min-h-screen hero-image bg-right-bottom bg-cover flex " {{-- style="background-image: url(https://picsum.photos/1920/1080/?blur);" --}}>
          <div class="relative container mx-auto p-4 flex items-end z-10">
              <div>
                  <div class="content float-left py-4 px-5 my-5">
                      <section class="text-gray-600 body-font overflow-hidden">
                          <div class="container px-5 py-24 mx-auto">
                              <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                  <img alt="flyer"
                                      class="lg:w-1/2 sm:w-full lg:h-auto h-auto object-cover object-center rounded z-50 shadow-2xl"
                                      src="{{ asset($course->flyer_url()) }}">
                                  <div
                                      class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 bg-gradient-to-t bg-gradient-to-r from-gray-200 to-gray-100 opacity-80 shadow-inner z-10 shadow-2xl ">

                                      <h2 class="text-sm title-font text-gray-500 tracking-widest">DIPLOMADO</h2>
                                      <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
                                          {{ $course->title }}</h1>
                                      <div class="flex mb-4">
                                          <span class="flex items-center">
                                              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"
                                                  class="w-4 h-4 text-primary" viewBox="0 0 24 24">
                                                  <path
                                                      d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                  </path>
                                              </svg>
                                              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"
                                                  class="w-4 h-4 text-primary" viewBox="0 0 24 24">
                                                  <path
                                                      d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                  </path>
                                              </svg>
                                              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"
                                                  class="w-4 h-4 text-primary" viewBox="0 0 24 24">
                                                  <path
                                                      d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                  </path>
                                              </svg>
                                              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"
                                                  class="w-4 h-4 text-primary" viewBox="0 0 24 24">
                                                  <path
                                                      d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                  </path>
                                              </svg>
                                              <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"
                                                  class="w-4 h-4 text-primary" viewBox="0 0 24 24">
                                                  <path
                                                      d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                  </path>
                                              </svg>
                                              <span class="text-gray-600 ml-3">4 Reviews</span>
                                          </span>
                                          <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                                              <a class="text-gray-500">
                                                  <svg fill="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                      viewBox="0 0 24 24">
                                                      <path
                                                          d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z">
                                                      </path>
                                                  </svg>
                                              </a>
                                              <a class="text-gray-500">
                                                  <svg fill="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                      viewBox="0 0 24 24">
                                                      <path
                                                          d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                                      </path>
                                                  </svg>
                                              </a>
                                              <a class="text-gray-500">
                                                  <svg fill="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                      viewBox="0 0 24 24">
                                                      <path
                                                          d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                      </path>
                                                  </svg>
                                              </a>
                                          </span>
                                      </div>

                                      <p class="leading-relaxed text-justify w-full px-4">
                                          {{ $course->description }}</p>

                                      <div class="flex bottom-5 right-0 py-6 px-5">
                                          @can($course->product->getPermissionName())
                                              <form method="get">
                                                  <x-jet-button class=" ml-auto  py-2 px-6 ">Ir allá</x-jet-button>
                                              </form>
                                          @else
                                              <form action="{{ route('product.pricing', $course->product_id) }}" method="get">
                                                  <x-jet-button class=" ml-auto  py-2 px-6 ">Inscribirme</x-jet-button>
                                              </form>
                                          @endcan

                                          <button
                                              class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4 py-5">
                                              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                  <path
                                                      d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                                  </path>
                                              </svg>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
                  <div class="cta clear-left px-5">
                      <a class="
    no-underline
    btn btn-primary
    block sm:inline-block global-transition
    text-white"
                          href="" target="">

                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section>



  <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Raw Denim Heirloom
              <br class="hidden sm:block">Selfies Wayfarers
          </h1>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
              <div class="p-4 md:w-1/3 flex">
                  <div
                      class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary mb-4 flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                          <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                      </svg>
                  </div>
                  <div class="flex-grow pl-6">
                      <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Shooting Stars</h2>
                      <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                          vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard
                          ugh iceland kickstarter tumblr live-edge tilde.</p>
                      <a class="mt-3 text-primary inline-flex items-center">Learn More
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                              <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                      </a>
                  </div>
              </div>
              <div class="p-4 md:w-1/3 flex">
                  <div
                      class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary mb-4 flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                          <circle cx="6" cy="6" r="3"></circle>
                          <circle cx="6" cy="18" r="3"></circle>
                          <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                      </svg>
                  </div>
                  <div class="flex-grow pl-6">
                      <h2 class="text-gray-900 text-lg title-font font-medium mb-2">The Catalyzer</h2>
                      <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                          vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard
                          ugh iceland kickstarter tumblr live-edge tilde.</p>
                      <a class="mt-3 text-primary inline-flex items-center">Learn More
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                              <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                      </a>
                  </div>
              </div>
              <div class="p-4 md:w-1/3 flex">
                  <div
                      class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary mb-4 flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                          <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                          <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                  </div>
                  <div class="flex-grow pl-6">
                      <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Neptune</h2>
                      <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                          vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard
                          ugh iceland kickstarter tumblr live-edge tilde.</p>
                      <a class="mt-3 text-primary inline-flex items-center">Learn More
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                              <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section>

</x-app-layout>
