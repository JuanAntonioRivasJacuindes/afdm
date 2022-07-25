<x-app-layout>
    <div class="w-80 h-1/3 mx-auto shadow-2xl justify-center">

      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('pdf.generateMassProof')}}" method="get">
        <div class="w-full justify-center">
          <h1 class="text-lg ">Generador de constancias</h1>
        </div>
        <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="course">Curso</label>
        <input class="w-full" id="course" type="text" name="course" value="">
      </div>
      <div class="mb-6">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="date">Fecha</label>
        <input class="w-full" id="date" type="text" name="date" value="">
      </div>
      <div class="mb-6">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="name">Nombres</label>
        <textarea class="w-full" id="name"  name="name" rows="8" cols="40"></textarea>
      </div>
        <x-jet-button>Enviar</x-jet-button>
      </form>
    </div>

</x-app-layout>
