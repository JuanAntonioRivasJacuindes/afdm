<?php

namespace App\Http\Livewire\Diploma;

use Livewire\Component;
use App\Models\User;
use App\Models\Diploma;
use App\Models\Inscription;
use Livewire\WithFileUploads;
use PhpParser\Node\Stmt\TryCatch;
use Laravel\Jetstream\ConfirmsPasswords;

use Illuminate\Support\Facades\Auth;
class InscriptedUsers extends Component
{
    use ConfirmsPasswords;
    public $users;

    public $selectedId;
    public $diploma;
    public $addUserId;
    public $productId;
    public $voucher;
    public $advisor;
    public $allUsers;
    public $diploma_id;
    protected $rules = [
        'addUserId' => 'required|numeric',
        'voucher' => 'required',
    ];


    use WithFileUploads;
    public function mount()
    {

        $this->advisor = Auth::user()->id;
        $this->diploma = Diploma::find($this->diploma_id);
        $this->users = $this->diploma->product->suscribedUsers();
        $this->productId=$this->diploma->product->id;
        $this->allUsers=User::all();

    }


    public function render()
    {
        $this->diploma = Diploma::find($this->diploma_id);
        $this->users = $this->diploma->product->suscribedUsers();
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
    }
    public function removeInscription($id_inscription)
    {
        $this->ensurePasswordIsConfirmed();
        try {
            //code...
            Inscription::find($id_inscription)->delete();
            session()->flash('message', 'Removido Éxitosamente.');
        } catch (\Throwable $th) {

            session()->flash('message', 'No Fue Posible, verifique que el usuario no tenga pagos registrados.');

        }

    }

}
