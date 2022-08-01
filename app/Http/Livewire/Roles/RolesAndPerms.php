<?php

namespace App\Http\Livewire\Roles;
use Spatie\Permission\Models\Role;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class RolesAndPerms extends Component
{
    public $roles;
    public $permissions;
    public $selectedRoleName;
    public $selectedPermName;

    public $permissionToCreate;

    public $selectedRole;
    public $selectedPerm;

    public $permissionsOnSelectedRole;

    public function mount()
    {

        $this->roles  = Role::all();
        $this->permissions = Permission::all();

        $this->selectedRoleName=$this->roles->first()->name;
        $this->selectedPermName=$this->permissions->first()->name;

        $this->selectedRole=Role::findByName($this->selectedRoleName);
        $this->selectedRole=Permission::findByName($this->selectedPermName);

        $this->permissionsOnSelectedRole=$this->selectedRole->permissions()->get();

    }
    public function render()
    {
        $this->roles  = Role::all();
        $this->selectedRole=Role::findByName($this->selectedRoleName);
        $this->permissionsOnSelectedRole=$this->selectedRole->permissions()->get();

        return view('livewire.roles.roles-and-perms');
    }

    public function createRole($name)
    {
        $role = Role::create(['name' => $name]);
        # code...
    }
    public function revokePerm($name)
    {

        $this->selectedRole->revokePermissionTo($name);
        # code...
    }
    public function assignRole()
    {

        $this->selectedRole->givePermissionTo($this->selectedPermName);
    }
    public function createPermission()
    {
     Permission::create(['name' => $this->permissionToCreate]);
        $this->permissionToCreate="";
        # code...
    }
}
