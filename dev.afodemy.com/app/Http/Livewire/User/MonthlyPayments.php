<?php

namespace App\Http\Livewire\User;

use App\Models\MonthlyPayment;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class MonthlyPayments extends Component
{
    use WithFileUploads;
    public $user_id;
    public $user_inscriptions;
    public $user_payments;
    public $user;

    public $diploma_id;
    public $voucher;
    public $expires_at;
    public $amount;
    public $inscription_id;

    protected $rules=[
        'amount'=>'required|numeric',
        'voucher'=>'required',
        'expires_at'=>'required',
    ];
    public function mount()
    {

        $this->user= User::find($this->user_id);
        $this->user_inscriptions=$this->user->inscriptions;
        $this->user_payments=$this->user->payments->sortBy('created_at');
        try {

          $this->inscription_id=$this->user_inscriptions->first()->id;
        } catch (\Exception $e) {

        }

    }
    public function render()
    {
        $this->user_inscriptions=$this->user->inscriptions;
        $this->user_payments=$this->user->payments->sortByDesc('created_at');
        $this->user= User::find($this->user_id);

        return view('livewire.user.monthly-payments');
    }
    public function addPayment()
    {
        $this->validate();
        $payment= MonthlyPayment::create([
            'amount'=>$this->amount,
            'inscription_id'=>$this->inscription_id,
            'advisor_id'=>Auth::user()->id,
            'voucher'=>$this->voucher->store('files/monthly_payment/vouchers'),
            'status_id'=>1,
            'expires_at'=>$this->expires_at,
        ]);
        $this->amount="";

        session()->flash('message', 'Pago Registrado.');
    }
}
