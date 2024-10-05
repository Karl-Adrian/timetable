<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\teacher;
use Illuminate\Validation\Validator;

class TeacherManager extends Component
{
    public $name, $email,  $teacher_id;
    public function render()
    {
        return view('livewire.teacher-manager', [
            'teachers' => teacher::all()
        ]);
    }

    public function createTeacher()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        teacher::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->reset(['name', 'email']);

        session()->flash('message', 'Teacher added successfully.');
    }

    // public function resetFields()
    // {
    //     $this->name = '';
    //     $this->email = '';
    // }
}
