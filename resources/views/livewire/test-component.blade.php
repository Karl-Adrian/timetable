<div>
    <h2>Manage Lessons</h2>
    <form wire:submit.prevent="createLesson">
        <input type="text" wire:model="name" placeholder="Lesson Name">
        <select wire:model="teacher_id">
            <option value="">Select Teacher</option>
            @foreach(App\Models\Teacher::all() as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
            @endforeach
        </select>
        <select wire:model="classroom_id">
            <option value="">Select Classroom</option>
            @foreach(App\Models\Classroom::all() as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
            @endforeach
        </select>
        <button type="submit">Add Lesson</button>
    </form>

    <h3>Lesson List</h3>
    <ul>
        @foreach($lessons as $lesson)
            <li>{{ $lesson->name }} ({{ $lesson->teacher->name }}, {{ $lesson->classroom->name }})
                <button wire:click="edit({{ $lesson->id }})">Edit</button>
                <button wire:click="deleteLesson({{ $lesson->id }})">Delete</button>
            </li>
        @endforeach
    </ul>
</div>
