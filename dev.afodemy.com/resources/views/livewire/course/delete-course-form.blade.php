<div class="w-full max-w-md b">




    <form wire:submit.prevent="submit" method="POST" enctype='multipart/form-data'
        class="bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        {{ method_field('PUT') }}
        @csrf
        <div class="mb-4">

            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Titulo
            </label>
            <input type="text" name="title" id="title" wire:model="title"><br>
            @error('title') <span class="error">
                    <p class="text-red-500 text-xs italic">El título es obligatorio y no debe exceder los 22 caracteres
                    </p>
            </span><br> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                Descripción de 30 - 50 palabras
            </label>
            <textarea name="description" id="description" cols="30" rows="10" wire:model="description"></textarea><br>
            @error('description') <span class="error">
                    <p class="text-red-500 text-xs italic">La descripción es obligatoria</p>
            </span><br> @enderror


        </div>
        <div class="mb-4">

            <label class="block text-gray-700 text-sm font-bold mb-2" for="flyer">
                Flyer del diplomado
            </label>
            <input name="flyer" id="flyer" type="file" wire:model="flyer" accept="image/png, image/gif, image/jpeg"><br>
            @error('flyer') <span class="error">
                    <p class="text-red-500 text-xs italic">El Flyer es obligatorio</p>
            </span><br> @enderror
        </div>
      
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="poster">
                Poster del diplomado
            </label>
            <input name="poster" id="poster" type="file" wire:model="poster" accept="image/png, image/gif, image/jpeg"><br>
            @error('poster') <span class="error">
                    <p class="text-red-500 text-xs italic">El póster es obligatorio</p>
            </span><br> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="starts_at">
                Fecha de inicio
            </label>
            <input type="date" name="starts_at" id="starts_at" wire:model="starts_at"><br>
            @error('starts_at') <span class="error">
                    <p class="text-red-500 text-xs italic">La fecha de inicio es obligatoria</p>
            </span><br> @enderror
            <label class="block text-gray-700 text-sm font-bold mb-2" for="ends_at">
                Fecha de finalizacion
            </label>
            <input type="date" name="ends_at" id="ends_at" wire:model="ends_at"><br>
            @error('ends_at') <span class="error">
                    <p class="text-red-500 text-xs italic">La fecha de finalizacion</p>
            </span><br> @enderror
        </div>
        <x-jet-button class="gap-y-4" wire:submit.prevent="submit">Crear</x-jet-button>
        
    </form>


</div>
