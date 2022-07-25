<?php

namespace App\Http\Livewire\Diploma;

use Livewire\Component;
use App\Models\Diploma;

class UpdateImages extends Component
{
    public $diploma_id;
    public $diploma;
    public function mount()
    {
        $this->diploma = Diploma::find($this->diploma_id);

    }

    public function render()
    {
        return view('livewire.diploma.update-images');
    }
}
