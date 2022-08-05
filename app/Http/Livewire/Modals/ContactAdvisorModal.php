<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
use App\Models\Lead;
class ContactAdvisorModal extends Component
{
    public $product_id;




    public function render()
    {
        return view('livewire.modals.contact-advisor-modal');
    }
    public function createLead()
    {

    }
}
