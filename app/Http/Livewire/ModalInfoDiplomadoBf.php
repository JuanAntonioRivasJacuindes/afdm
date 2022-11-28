<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalInfoDiplomadoBf extends Component
{
    public $diplomas_buenfin=array();
    public function render()
    {
        return view('livewire.modal-info-diplomado-bf');
    }
}
