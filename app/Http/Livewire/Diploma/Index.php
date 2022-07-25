<?php

namespace App\Http\Livewire\Diploma;

use Livewire\Component;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Diploma;
class Index extends Component
{
    public $diplomas;
    public function create()
    {
        # code...
    }
    public function mount()
    {
        $this->diplomas = Diploma::orderBy('status_id','asc')->get();
    }
    public function render()
    {
        $this->diplomas = Diploma::orderBy('status_id','asc')->get();
        return view('livewire.diploma.index');
    }

}
