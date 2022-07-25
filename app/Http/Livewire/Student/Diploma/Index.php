<?php

namespace App\Http\Livewire\Student\Diploma;

use Livewire\Component;
use App\Models\Diploma;
use App\Models\Video;

class Index extends Component
{
    public $diploma_id=4;
    public $subjects;
    public $active_video;

    public function mount()
    {
        $diploma=Diploma::find($this->diploma_id);

        $this->subjects = $diploma->subjects();
        $this->active_video="";
    }
    public function activate($video_id)
    {
        $this->active_video=Video::find($video_id);

    }
    public function render()
    {
        return view('livewire.student.diploma.index');
    }
}
