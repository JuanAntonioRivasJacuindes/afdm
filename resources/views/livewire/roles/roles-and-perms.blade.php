<div class="w-full shadow-lg">

    <div>
        <label for="permissionToCreate">Crear Permiso</label>
        <input type="text" wire:model="permissionToCreate" placeholder="Nombre">
        <x-jet-button wire:click="createPermission">Crear</x-jet-button>
    </div>

    <div class="w-full flex flex-row">

    <div class="w-full m-2" >

        <label for="role">Rol</label>
        <select wire:model="selectedRoleName" class="w-full" name="" id="role">
            @foreach ($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach

        </select>
    </div>
    <div  class="w-full m-2">


        <label for="role">Permiso</label>
        <select wire:model="selectedPermName" class="w-full" name="" id="role">
            @foreach ($permissions as $perm)
                <option value="{{ $perm->name }}">{{ $perm->name }}</option>
            @endforeach

        </select>
    </div>
    <x-jet-button  wire:click="assignRole">
        Asignar
    </x-jet-button>
</div>

    <table class="w-full text-center" id="permissions" wire:loading.remove wire:target="selectedRoleName">
        <thead>
            <tr>
                <th>Permiso</th>
                <th>Revocar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissionsOnSelectedRole as $perm)
                <tr>
                    <td>{{ $perm->name }}</td>
                    <td>
                        <x-jet-danger-button wire:click="revokePerm('{{$perm->name}}')">X</x-jet-danger-button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
