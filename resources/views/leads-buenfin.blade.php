@php
    //dd($diplomas_data_buenfin);

    /*
                                foreach ($diplomas_data_buenfin['diplomados'] as $data_diplomas) {
                                    echo "<pre>";
                                        print_r($data_diplomas['prices_buenfin_unidad_mes']);
                                    echo "</pre>";
                                }
                                */
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AfodemyBuenfinLocal</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css'>
    @livewireScripts
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">

    <!--Header-->
    <div class="w-full m-0 p-0 bg-cover bg-bottom"
        style="background: rgba(235, 23, 23, 0.753); height: 30vh; max-height:460px; ">
        <div class="container max-w-4xl mx-auto text-center break-normal">
            <!--Title-->
            <div class="flex justify-center pt:1">
                <img src="{{ asset('storage/img/logosweb.png') }}" alt="" style="width: 260px; height: 140px">
            </div>
            <p class="text-xl md:text-2xl text-gray-100 shadow-lg p-3">Leads Buen Fin</p>
        </div>
    </div>
    <div class="w-full mx-5 p-5 bg-gray-200" style=" height: 60vh; max-height:460px; ">
        <div class="w-full">
             <table class="w-full text-center">
                 <thead class="bg-gray-300">
                     <tr >
                         <th>Responsable||Diplomado</th>
                         <th>Nombre</th>
                         <th>Email</th>
                         <th>Número</th>
                         <th>Fecha</th>

                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($leadsbuenfin as $lead)
                     <tr class="hover:bg-white">
                         <td>{{$lead->diplomado ?? 'no definido'}}</td>
                         <td>{{$lead->fullnamelead?? 'no definido'}}</td>
                         <td>{{$lead->email ?? 'no definido'}}</td>
                         <td>{{$lead->numberlead ?? 'no definido'}}</td>
                         <td>{{$lead->created_at->format('j F, Y') ?? 'no definido'}}</td>

                     </tr>
                     @endforeach
                 </tbody>
             </table>
        </div>
     </div>
</body>

<br>
<footer class="" style="background: rgba(235, 23, 23, 0.753);">

    <div class="flex justify-center pt:1">
        <img src="{{ asset('storage/img/imetsafodemy-n.png') }}" alt="" style="width: 300px; height: 150px">
    </div>

    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col md:flex-row">
        <p class="text-white text-sm text-center md:text-left"> <span>Derechos Reservados &copy;Afodemy</sp>
        </p>
        <span class="inline-flex md:ml-auto md:mt-0 mt-2 justify-center md:justify-start">
            <a href="https://www.facebook.com/afodemy" class="text-white">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-a h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com/afodemy" class="ml-3 text-white">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5"
                        ry="5">
                    </rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
            </a>

        </span>
    </div>

</footer>
</body>

</html>
