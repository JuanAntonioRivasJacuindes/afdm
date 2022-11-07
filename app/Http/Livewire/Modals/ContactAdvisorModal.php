<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
use App\Models\Lead;
class ContactAdvisorModal extends Component
{
    public $product_id;

    public $addItem = false;

    public $advisorModal=true;

    public function render()
    {
        return view('livewire.modals.contact-advisor-modal');
    }
    public function createLead()
    {

    }

    public function saved()
    {
        $this->render();
    }

    public function addingItem()
    {
        $this->addItem = true;
    }
}
