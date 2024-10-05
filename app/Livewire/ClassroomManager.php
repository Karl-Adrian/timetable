<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\classroom;
use Illuminate\Validation\Validator;

class ClassroomManager extends Component
{
    public $name, $classroom_id;
    public function render()
    {
        return view('livewire.classroom-manager', [
            'classrooms' => classroom::all()
        ]);
    }

    public function createClassroom()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        classroom::create([
            'name' => $this->name,
        ]);

        $this->reset('name');

        session()->flash('message', 'Classroom added successful.');
    }

    public function resetFields()
    {
        $this->name = '';
    }
}
