<?php

namespace App\Livewire;

use App\Models\lesson;
use App\Models\teacher;
use App\Models\classroom;
use Illuminate\Validation\Validator;


use Livewire\Component;

class LessonManager extends Component
{
    public $lessons, $name, $teacher_id, $classroom_id,  $lesson_id;
    public function render()
    {
        $teachers = teacher::all();
        $classrooms = classroom::all();


        $this->lessons = lesson::with(['teacher', 'classroom'])->get();
        return view('livewire.lesson-manager', [
            'teachers' => $teachers,
            'classrooms' => $classrooms,

        ]);
    }

    public function createLesson()
    {
        lesson::create([
            'name' => $this->name,
            'teacher_id' => $this->teacher_id,
            'classroom_id' => $this->classroom_id,
        ]);
        $this->resetInputFields();
    }

    public function resetInputFields(): void
    {
        $this->name = '';
        $this->teacher_id = '';
        $this->classroom_id = '';
    }

    public function edit($id)
    {
        $lesson = lesson::find($id);
        $this->lesson_id = $id;
        $this->name = $lesson->name;
        $this->teacher_id = $lesson->teacher_id;
        $this->classroom_id = $lesson->classroom_id;
    }

    public function updateLesson()
    {
        lesson::find($this->lesson_id)->update([
            'name' => $this->name,
            'teacher_id' => $this->teacher_id,
            'classroom_id' => $this->classroom_id,
        ]);
        $this->resetInputFields();
    }

    public function deleteLesson($id)
    {
        lesson::find($id)->delete();
    }
}
