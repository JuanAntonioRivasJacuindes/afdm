<?php

namespace App\Http\Livewire\Info\Diploma;

use App\Models\DiplomaInfo;
use Livewire\Component;

class Index extends Component
{
    public $diploma_id;
    public $info;
    public $editorMode="hidden";
    public $editorModeNegation="";
    public $field="disabled";

    //models
    public $intro;
    public $objectives;
    public $target;
    public $skills;
    public $contact;

    public function mount()
    {
        $this->info = DiplomaInfo::firstOrCreate([
            'diploma_id' => $this->diploma_id
        ]);
        $this->intro = $this->info->introduction;
        $this->objectives = $this->info->objectives;
        $this->target = $this->info->target;
        $this->skills = $this->info->skills;
        $this->contact = $this->info->contact;
    }
    public function edit()
    {
        $this->field="";

        $this->editorMode="";
        $this->editorModeNegation="hidden";

        # code...
    }
    public function save()
    {

        $this->info->update([
            'introduction' => $this->intro,
            'objectives' => $this->objectives,
            'target' => $this->target,
            'skills' => $this->skills,
            'contact' => $this->contact,
        ]);


        $this->field="disabled";
        $this->editorMode="hidden";
        $this->editorModeNegation="";

        session()->flash('message', 'Guardado de manera exitosa.');
    }
    public function render()
    {
        return view('livewire.info.diploma.index');
    }
}
