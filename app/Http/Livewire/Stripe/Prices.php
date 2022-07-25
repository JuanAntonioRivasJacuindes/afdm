<?php

namespace App\Http\Livewire\Stripe;



use Livewire\Component;
use App\Models\Price;
use Illuminate\Http\Request;




class Prices extends Component
{   
    public $name;
    public $email;

    public function createPrice(Request $request)
    {
     
    }
    public function render()
    {
        return view('livewire.stripe.prices');
    }
}
