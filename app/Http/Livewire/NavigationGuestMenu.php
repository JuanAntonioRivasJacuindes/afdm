<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Diploma;
class NavigationGuestMenu extends Component
{
    public function render()
    {
        //enviar diplomados datos a nav-menu-guest
        $diplomas = Diploma::where('status_id', 1)->get();
        return view('livewire.navigation-guest-menu', compact('diplomas'));
    }
}
