<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Mis Cursos
        </h2>
    </x-slot>

    <div class="TN bzz aHS-YH" style="margin-left:0px"><div class="qj qr"></div><div class="aio UKr6le"><span class="nU false"><a href=" https://meet.google.com/zdu-rkdp-qrc" target="_top" class="J-Ke n0" title="Start a meeting" aria-label="Start a meeting" draggable="false">Start a meeting</a></span></div><div class="nL aif"></div></div>
    <!-- Section 1 -->
    <section class=" p-5 bg-white md:px-0">

        <div class="container items-center max-w-full px-1 md:px-4 mx-auto xl:px-5">
            @if ($user->inscriptions->count() == 0)
                <div class="w-full text-center">

                    <svg class="w-20 mx-auto text-gray-700" xmlns="http://www.w3.org/2000/svg" className="h-6 w-6"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <h2 class="text-gray-600 my-5">
                        Aún no estás inscrito en ningún curso
                    </h2>
                </div>
            @endif
            @foreach ($user->inscriptions as $pucharse)

                <a href="{{ route('diploma.show', ['product_id' => $pucharse->product->id ,'inscription_id' => $pucharse->id]) }}"
                    class="hover:shadow-lg  duration-300 w-full bg-white flex mx-auto  md:my-5  flex-wrap items-center sm:-mx-3 shadow-md">
                    <div class="   md:w-1/2 md:px-3 px-5  flex flex-row items-center">
                        <img class="w-20" src="{{$pucharse->product->productType()->flyer_thumbnail() }}" alt="">
                        <h1 class="text:sm m-5 uppercase  lg:text-lg font-extrabold tracking-tight text-gray-600 md:text-md">
                            <span >{{ $pucharse->product->name ??''}}</span>
                        </h1>
                    </div>
                </a>
            @endforeach

        </div>
    </section>
</x-app-layout>
