<?php

namespace App\Http\Livewire\Lead;

use App\Models\Lead;
use Livewire\Component;

class Show extends Component
{
    public $leads;

    public function mount()
    {
        $this->leads=Lead::all();
        # code...
    }

    public function render()
    {
        return view('livewire.lead.show');
    }
}
