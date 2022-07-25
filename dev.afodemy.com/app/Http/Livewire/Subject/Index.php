<?php

namespace App\Http\Livewire\Subject;

use Livewire\Component;
use App\Models\Diploma;
use App\Models\Subject;

class Index extends Component
{
    public $totalHours;
    public $totalCredits;
    public $unitName;
    public $unitKey;
    public $subjects;
    public $diploma;
    public $hours;
    public $credits;

    public $diploma_id;

    public function mount()
    {

      $this->diploma = Diploma::find($this->diploma_id);
      $this->subjects=$this->diploma->subjects();

      $this->totalHours=$this->diploma->getTotalHours();

      $this->totalCredits=$this->diploma->getTotalCredits();



    }

    public function addUnit()
    {
      // dump($this->unitKey);
      // dd($this->unitName);
      $this->validate([
        'unitName'=>'required',
        'unitKey'=>'required',
        'hours'=>'required',
        'credits'=>'required',
      ]);
      $unit_index=$this->subjects->count()+1;
      $subject = Subject::create([
        'key' =>$this->unitKey,
        'unit_index' => $unit_index,
        'name'=>$this->unitName,
        'hours'=>$this->hours,
        'credits'=>$this->credits,
        'diploma_id'=>$this->diploma_id,
      ]);
      session()->flash('message', 'Unidad Agregada');
      $this->unitKey="";
      $this->unitName="";
      $this->hours="";
      $this->credits="";
    }
    public function deleteUnit($id_unit)
    {
      Subject::find($id_unit)->delete();
      session()->flash('message', 'Unidad eliminada');

      // code...
    }
    public function render()
    {
        $this->subjects=Subject::where('diploma_id',$this->diploma->id)->get();
        $this->totalHours=$this->diploma->getTotalHours();
        $this->totalCredits=$this->diploma->getTotalCredits();

        return view('livewire.subject.index');
    }
}
