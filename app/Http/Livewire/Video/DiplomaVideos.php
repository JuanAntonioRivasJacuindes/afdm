<?php

namespace App\Http\Livewire\Video;

use Livewire\Component;
use App\Models\Diploma;

class DiplomaVideos extends Component
{
    public $diploma_id;
    public $diploma;

    public function mount()
    {
        $this->diploma=Diploma::find($this->diploma_id);

    }
    public function render()
    {
        return view('livewire.video.diploma-videos');
    }
}
