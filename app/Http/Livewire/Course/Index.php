<?php

namespace App\Http\Livewire\Course;

use Livewire\Component;
use App\Models\Course;

class Index extends Component
{
    public $courses;
    public function saludo()
    {
        dd("Hola Crayola");
    }
    public function mount(){
        $this->courses = Course::all();

    }
    public function render()
    {
        return view('livewire.course.index');
    }
}
