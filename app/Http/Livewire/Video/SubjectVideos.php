<?php

namespace App\Http\Livewire\Video;

use Livewire\Component;
use App\Models\Diploma;
use App\Models\Subject;
use App\Models\SubjectHasVideo;
use App\Models\Video;


class SubjectVideos extends Component
{

    public $diploma_id;
    public $diploma;
    public $subjects;

    public $name;
    public $description;
    public $iframe;



    public function mount()
    {



        $this->diploma = Diploma::find($this->diploma_id);
        $this->subjects=$this->diploma->subjects();

    }
    public function delete($video_id)
    {
        SubjectHasVideo::where('video_id',$video_id)->first()->delete();
        Video::find($video_id)->delete();
        # code...
    }
    public function addVideo($subject_id)
    {
       $video = Video::create([
        'name'=>$this->name,
        'description'=>$this->description,
        'thumbnail'=>'no_defined',
        'iframe'=>$this->iframe,
        'status_id'=>2
       ]);

       $enlace = SubjectHasVideo::create([
        'index'=>1,
        'video_id'=>$video->id,
        'subject_id'=>$subject_id,
        'status_id'=>2,
       ]);
       $this->name = "";
       $this->description = "";
       $this->iframe = "";
       session()->flash('message', 'Agregado de manera exitosa.');
    }
    public function render()
    {
        return view('livewire.video.subject-videos');
    }
}
