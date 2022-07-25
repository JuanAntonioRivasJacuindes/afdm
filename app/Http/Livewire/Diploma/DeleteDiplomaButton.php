<?php

namespace App\Http\Livewire\Diploma;

use Livewire\Component;
use Laravel\Cashier\Cashier;

use Illuminate\Http\Request;
use App\Models\Diploma;



class DeleteDiplomaButton extends Component
{
    public $diploma;
    public $diploma_id;
    public function mount($diploma_id)
    {
        $this->diploma_id = $diploma_id;
        $this->diploma = Diploma::find($diploma_id);
    }
    public function delete()
    {
      try {

        Cashier::stripe()->products->delete($this->diploma->stripe_id);
      } catch (\Exception $e) {

      }

        $this->diploma->update(['status_id'=>3]);

        $this->redirect(route('admin'));

    }

    public function render()
    {
        return view('livewire.diploma.delete-diploma-button');
    }
}
