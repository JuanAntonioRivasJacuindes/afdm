<?php

namespace App\Http\Livewire\Course;

use Livewire\Component;
use App\Models\Course;

class UpdateCourseForm extends Component
{
    public $course;
    public $course_id;
    public $title;
    public $description;
    public $date;
    public $status_id = 2;
    public $starts_at;
    public $ends_at;
    public $date_id;

    public function update()
    {
        $this->validate([
            'title' => 'required|max:22',
            'description' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',
        ]);

        $this->course->update([
            'title' => $this->title,
            'description' => $this->description,
            'status_id' => $this->status_id,
        ]);
        $this->course->date->update([
            'starts_at' => $this->starts_at,
            'ends_at' => $this->ends_at,
        ]);
        session()->flash('message', 'Los cambios se guardaron de manera exitosa.');
    }
    public function mount()
    {
        $this->course = Course::find($this->course_id);
        $this->title = $this->course->title;
        $this->description = $this->course->description;
        $this->status_id = $this->course->status_id;
        $this->starts_at = $this->course->date->starts_at;
        $this->ends_at = $this->course->date->ends_at;
        $this->date_id = $this->course->date->id;
        $this->date = $this->course->date;
    }
    public function render()
    {
        return view('livewire.course.update-course-form');
    }
}
