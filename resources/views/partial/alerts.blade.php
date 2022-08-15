@if (Session::has('success-message'))
<div class="flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
    <p class="self-center">
        <strong>Correcto : </strong>{{ Session::get('success-message') }}
    </p>
    <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
</div>
@elseif (Session::has('info-message'))
<div class="flex justify-between text-blue-200 shadow-inner rounded p-3 bg-blue-600">
    <p class="self-center">
        <strong>Info : </strong>{{ Session::get('info-message') }}
    </p>
    <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
</div>
@elseif (Session::has('warning-message'))
<div class="flex justify-between text-orange-200 shadow-inner rounded p-3 bg-orange-600">
    <p class="self-center">
        <strong>Alerta: </strong>{{ Session::get('warning-message') }}
    </p>
    <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
</div>
@elseif (Session::has('danger-message'))
<div class="flex justify-between text-red-200 shadow-inner rounded p-3 bg-red-600">
    <p class="self-center">
        <strong>Error: </strong>{{ Session::get('danger-message') }}
    </p>
    <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
</div>
@endif
