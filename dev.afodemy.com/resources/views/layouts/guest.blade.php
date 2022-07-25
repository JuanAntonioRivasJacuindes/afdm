<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Laravel celebrated its 10th anniversary last year. Today it is the most popular PHP framework used by thousands of developers every day." />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="The State of Laravel Survey 2022" />
        <meta property="og:description" content="Laravel celebrated its 10th anniversary last year. Today it is the most popular PHP framework used by thousands of developers every day." />
        <meta property="og:url" content="https://laravel-news.com/state-of-laravel-2022" />
        <meta property="og:site_name" content="Laravel News" />
        <meta property="og:locale" content="en_US" />
        <title>{{ config('app.name', 'Afodemy') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    <body>
        <div class="min-h-screen bg-gray-100">
            @if(!Auth::guest())
              @livewire('navigation-menu')
            @endif

              <!-- Page Heading -->
              @if (isset($header))
                  <header class="bg-white shadow">
                      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                          {{ $header }}
                      </div>
                  </header>
              @endif

              <!-- Page Content -->
              <main>
                  {{ $slot }}
              </main>
          </div>
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
