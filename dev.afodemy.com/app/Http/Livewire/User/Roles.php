<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
class Roles extends Component
{
    public $roleToAssign;
    public $allRoles;
    public $userRoles;
    public $user;
    public $user_id;
    public function mount()
    {
        $this->user = User::find($this->user_id);

        $this->allRoles = \Spatie\Permission\Models\Role::all();
        $this->userRoles=$this->user->roles;

    }
    public function assignRole()
    {
        $this->user->assignRole($this->roleToAssign);

        session()->flash('message', 'Rol Asignado');
    }
    public function remove($role)
    {

        $this->user->removeRole($role);
        session()->flash('message', 'Rol Revocado.');
    }
    public function render()
    {
        $this->user = User::find($this->user_id);

        $this->allRoles = \Spatie\Permission\Models\Role::all();
        $this->userRoles=$this->user->roles;
        return view('livewire.user.roles');
    }
}
