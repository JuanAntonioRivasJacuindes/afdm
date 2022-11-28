<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalInitialContactBf extends Component
{
    public $diplomas_buenfin=array();
    public function render()
    {
        return view('livewire.modal-initial-contact-bf');
    }
}
