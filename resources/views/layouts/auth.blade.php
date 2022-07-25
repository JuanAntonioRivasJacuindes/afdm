<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-200 min-h-screen font-base">
<div id="app">
    @yield('content')
</div>
</body>
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