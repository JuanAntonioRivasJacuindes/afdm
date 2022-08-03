<!DOCTYPE html>
<html class="max-w-full"  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('title')" />
        <meta name="og:description" content="@yield('description')" />
        <meta property="og:image" content="@yield('image')" />
        <meta name="description" content="@yield('description')" />
        <meta property="og:url" content="@yield('route')" />
        <meta property="og:site_name" content="Afodemy" />
        <meta property="og:locale" content="es_MX" />

     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZH8ZR0M83Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZH8ZR0M83Z');
</script>

        <title>{{ config('app.name', 'Afodemy') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100 layout_background">
          @if(!Auth::guest())
            @livewire('navigation-menu')
        @else
        @livewire('navigation-guest-menu')

          @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
@include('partial.footer')
</html>
<script type="text/javascript">

  function openModal(modalId) {

      modal = document.getElementById(modalId)
      modal.classList.remove('hidden')
  }

  function closeModal(modalId) {
      modal = document.getElementById(modalId)
      modal.classList.add('hidden')
  }
</script>
