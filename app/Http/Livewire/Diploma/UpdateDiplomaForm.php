<?php

namespace App\Http\Livewire\Diploma;

use Livewire\Component;
use App\Models\Diploma;
use App\Models\Status;

use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;

class UpdateDiplomaForm extends Component
{
    use WithFileUploads;
    public $diploma;
    public $title;
    public $description;
    public $date;
    public $status_id = 2;
    public $starts_at;
    public $ends_at;
    public $date_id;
    public $revoe;
    public $status;
    public $revoe_date;
    public $revoe_key;
    public $zoomLink;
    public $generation;

    public function update()
    {

        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',

        ]);

        $this->diploma->update([
            'title' => $this->title,
            'description' => $this->description,
            'status_id' => $this->status_id,
            'generation'=>$this->generation,
        ]);
        $this->diploma->date->update([
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
        ]);
        $this->revoe->update([
            'key'=>$this->revoe_key,
            'register_date'=>$this->revoe_date
        ]);
        session()->flash('message', 'Los cambios se guardaron de manera exitosa.');

    }
    public function changeStatus()
    {
        if ($this->diploma->status_id==2) {
            $this->diploma->update([
                'status_id'=>1,
            ]);
        }elseif ($this->diploma->status_id==1) {
            $this->diploma->update([
                'status_id'=>2,
            ]);
            }
        $this->status=$this->diploma->status->name;
        # code...
    }
    public function mount()
    {
        $this->diploma = Diploma::find(request()->id);
        $this->zoomLink=$this->diploma->zoomLink;
        $this->title = $this->diploma->title;
        $this->description = $this->diploma->description;
        $this->status_id = $this->diploma->status_id;
        $this->starts_at = $this->diploma->date->starts_at;
        $this->ends_at = $this->diploma->date->ends_at;
        $this->date_id = $this->diploma->date->id;
        $this->date = $this->diploma->date;
        $this->revoe = $this->diploma->revoe;
        $this->revoe_key = $this->revoe->key;
        $this->revoe_date=$this->revoe->register_date;
        $this->generation=$this->diploma->generation;
    }
    public function render()
    {
        $this->status=Status::find($this->diploma->status_id)->name;

        return view('livewire.diploma.update-diploma-form');
    }
}
