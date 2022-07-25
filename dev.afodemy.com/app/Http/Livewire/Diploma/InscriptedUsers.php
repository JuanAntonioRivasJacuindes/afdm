<?php

namespace App\Http\Livewire\Diploma;

use Livewire\Component;
use App\Models\User;
use App\Models\Diploma;
use App\Models\Inscription;
use Livewire\WithFileUploads;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;
class InscriptedUsers extends Component
{
    public $users;
    public $diplomas;
    public $selectedId;
    public $diploma;
    public $addUserId;
    public $productId;
    public $voucher;
    public $advisor;
    public $allUsers;

    protected $rules = [
        'addUserId' => 'required|numeric',
        'voucher' => 'required',
    ];


    use WithFileUploads;
    public function mount()
    {

        $this->advisor = Auth::user()->id;
        $this->diplomas=Diploma::where('status_id',1)->get();
        $this->selectedId=$this->diplomas->first()->id;
        $this->diploma = $this->diplomas->first();
        $this->users = $this->diploma->product->suscribedUsers();
        $this->diploma=Diploma::findOrFail($this->selectedId);
        $this->productId=$this->diploma->product->id;
        $this->allUsers=User::all();
    }


    public function render()
    {



        return view('livewire.diploma.inscripted-users');
    }
    public function addInscription()
    {
        $this->validate();
        if(Inscription::where('user_id',$this->addUserId)->where('product_id',$this->productId)->first()==null){
            $inscription = Inscription::create([
                'user_id'=>$this->addUserId,
                'product_id'=>$this->productId,
                'advisor_id'=>$this->advisor,
                'status_id'=>2,
                'voucher'=>$this->voucher->store('files/inscription/vouchers'),

            ]);

            session()->flash('message', 'Los cambios se guardaron de manera exitosa.');
        }else{
            session()->flash('message', 'Este usuario ya está inscrito.');

        }
        $this->diploma=Diploma::findOrFail($this->selectedId);
        $this->users = $this->diploma->product->suscribedUsers();
        $this->productId=$this->diploma->product->id;

        # code...
    }
    public function search()
    {
        $this->diploma=Diploma::findOrFail($this->selectedId);
        $this->users = $this->diploma->product->suscribedUsers();
        $this->productId=$this->diploma->product->id;

        # code...
    }
    public function wachar()
    {
        $this->diploma=Diploma::find($this->selectedId);
        dd($this->diploma->product->suscribedUsers());
        # code...
    }
}
