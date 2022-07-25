<?php

namespace App\Http\Livewire\Course;

use Livewire\Component;

class CreateCourseForm extends Component
{
    public  function saludo()
    {
       dd("ola Crayola");
    }
    public function render()
    {
        return view('livewire.course.create-course-form');
    }
}
