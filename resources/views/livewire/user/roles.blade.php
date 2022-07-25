<div>
    @if (session()->has('message'))
    <div
        class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
        <div slot="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>

        <div class="text-xl font-normal  max-w-full flex-initial">
            {{ session('message') }}</div>
        <div class="flex flex-auto flex-row-reverse">
            <div>

            </div>
        </div>
    </div>
@endif
    <div class="m-5 bg-white text-center ">
        <h2>Roles y permisos</h2>
        <div class="flex flex-row">


        <div class="w-1/2 mx-auto">
            <h3>Asignar Rol</h3>
            <select wire:model="roleToAssign" id="">
                <option value="" selected>Seleccione uno</option>
                @foreach ($allRoles as $role)
                <option value="{{$role->name}}">{{$role->name}}</option>
                @endforeach
            </select>
            <x-jet-button wire:click="assignRole">Asignar</x-jet-button>
        </div>
        <div class="w-1/2 mx-auto">
            <h3><b>Roles Asignados  </b></h3>
            <table class="w-full">
                <ul>
                  @foreach ($userRoles as $role)
                      <li>{{$role->name}} <small wire:click="remove('{{$role->name}}')" class="mx-2 text-primary cursor-pointer">Remover</small></li>
                  @endforeach
                </ul>
            </table>
        </div>
    </div>
    </div>
</div>
