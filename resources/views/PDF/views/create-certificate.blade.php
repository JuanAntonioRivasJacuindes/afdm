<x-app-layout>

  <div class="  bg-white w-80 h-1/3 mx-auto shadow-2xl my-10 justify-center">

    <div class="p-5 bg-gray-50 w-full justify-center text-center">
      <h1 class="text-m font-bold">GENERADOR DE CERTIFICADOS</h1>
    </div>
    <form  enctype="multipart/form-data" class="bg-white shadow-md rounded px-8  pb-8 mb-4" action="{{route('pdf.generateCertificate')}}" method="POST">
      @csrf
      <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="diploma">Diplomado</label>
        <select id="diploma" class="w-full" name="diplomado">

          @foreach($diplomados as $diplomado)
          <option value="{{$diplomado->id}}">{{$diplomado->title}}</option>
          @endforeach
        </select>
      </div>

    <div class="mb-6">
      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="photo">Foto</label>
      <input class="w-full" id="photo" type="file" name="photo" accept=".png, .jpg, .jpeg">
    </div>
    <div class="mb-6">
      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="date">Fecha Registro</label>
      <input class="w-full" id="date" type="date" name="date" value="">
    </div>
    <div class="mb-6">
      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="date">Fecha de Emision</label>
      <input class="w-full" id="dateEmit" type="date" name="dateEmit" value="">
    </div>
    <div class="mb-6">
      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="name">Nombre</label>
      <input id="name"class="w-full" type="text" name="name" value="">
    </div>

    <div class="mb-6">
      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="folio">Folio</label>
      <input id="folio"class="w-full" type="text" name="folio" value="">
    </div>
    <div class= "w-full  text-center content-end">

      <x-jet-button class="w-full flex flex-col justify-center items-center content-end text-center">Enviar</x-jet-button>
    </div>
    </form>
  </div>


</x-app-layout>
