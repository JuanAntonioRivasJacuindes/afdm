<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentMethods extends Component
{
    public $paymentMethods;
    public $user;

    public function mount()
    {
        $this->user = auth()->user();
        $this->paymentMethods = $this->user->paymentMethods();

    }

    public function deleteCard($id)
    {

        $paymentMethod = $this->user->findPaymentMethod($id);
        $paymentMethod->delete();

        //no me aucuerdo: return redirect()->route('profile.show'); eso estaba originalmente
        return redirect()->route('user.billing');
    }
    public function render()
    {


        return view('livewire.payment-methods');
    }
}
