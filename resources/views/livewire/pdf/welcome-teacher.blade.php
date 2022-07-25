<div>
  <div class="">
    <div class="">
      sesiones
      <label for="sesion"></label>
      <input type="text" wire:model ="sesion" name="" value="">
      <button type="button" wire:click="addSession" name="button">Agregar Sesion</button>
      <ul>
        @foreach($sesiones as $key => $sesion)
        <li>{{$sesion}}
          <x-jet-danger-button wire:click="deleteSesion({{$key}})"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
</svg></x-jet-danger-button>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="w-full ">
      <label for="nombreUnidad">Nombre de la unidad</label>
      <input type="text" id = "nombreUnidad" wire:model="nombreUnidad" name="" value="">
      <label for="fecha">Fecha de clase</label>

      <input type="date" id="fecha" wire:model="fecha" value="">
      <button wire:click="addFecha" name="button">Agregar Fecha</button>
      <ul>

        @foreach($fechas as $key => $fech)
        <li>{{$fech}}
          <x-jet-danger-button wire:click="deleteFecha({{$key}})"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
</svg></x-jet-danger-button>

        </li>
        @endforeach

      </ul>
      <x-jet-button wire:click="addUnidad">Agregar Unidad</x-jet-button>
    </div>
<!-- @dump($unidades); -->
      <table>
        <thead>
          <tr>
            <th>Nombre unidad</th>
          </tr>
        </thead>
        <tbody>
          @foreach($unidades as $unidad)
            <tr>
              <td>
                  {{$unidad[0]}}
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      <div class="">

      </div>

    <br>

    <form class="" action="{{route('pdf.welcome-teacher')}}" method="post">
      @csrf
      <label for="nomdipmlomado">Nombre del Diplomado: </label><br>
      <input id ="nomdipmlomado"  type="text"  name="diplomado" required><br>

      <label for="docente">Nombre del docente: </label><br>
      <input id ="docente"  type="text" name="docente" value="" required><br>

      <label for="fechainicio">Fecha inicio: </label><br>
      <input id ="fechainicio"  type="date" name="fechaInicio" value="" required><br>

      <label for="fechatermino">Fecha Termino: </label><br>
      <input id ="fechafermino"  type="date" name="fechaTermino" value="" required><br>
      <input type="text" name="unidades" value="{{json_encode($unidades)}}" hidden>
      <input type="text" name="sesiones" value="{{json_encode($sesiones)}}" hidden>

      <x-jet-button>Terminar</x-jet-button>

    </form>
  </div>
</div>
