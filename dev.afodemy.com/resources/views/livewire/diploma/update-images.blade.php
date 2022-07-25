<div class="bg-gray-200">
    <div class="bg-gray-100 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
               Imagenes
            </h3>
            <p>
            </p>
        </div>
    <div class= " bg-gray-100 shadow overflow-hidden sm:rounded-lg   flex flex-col md:flex-row ">
       <div class="p-5  mx-auto ">
            <div  >
                <img class="rounded-lg h-40 mx-auto" src="{{$diploma->flyer_url()}}" alt="">
                <form enctype="multipart/form-data" method="POST" class="p-5 flex flex-col text-center" action="{{route('diploma.update.flyer')}}">
                    @csrf
                    <label for="flyer">Actualizar Flyer</label><br>
                    <input name="flyer" type="file" required>
                    <input type="text" name="diploma_id" value="{{$diploma_id}}" hidden >
                    <x-jet-button class="m-4 mx-auto">Guardar</x-jet-button>
                </form>
            </div>
       </div>
       <hr>
       <div class="p-5  mx-auto ">
        <div >
            <img class="mx-auto rounded-lg  h-40" src="{{$diploma->poster_url()}}" alt="">
            <form enctype="multipart/form-data" method="POST" class="p-5 flex flex-col text-center" action="{{route('diploma.update.poster')}}">
                @csrf
                <label for="poster">Actualizar Poster</label><br>
                <input name="poster" type="file" required>
                <input type="text" name="diploma_id" value="{{$diploma_id}}" hidden id="">
                <x-jet-button class="m-4 mx-auto">Guardar</x-jet-button>
            </form>
        </div>
   </div>
    </div>
</div>
