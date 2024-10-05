<!-- resources/views/livewire/classroom-manager.blade.php -->

<div>
    <!-- Form for Adding New Classroom -->
    <form wire:submit.prevent="createClassroom">
        <div>
            <label for="name">Classroom Name:</label>
            <input type="text" id="name" wire:model="name" placeholder="Enter classroom name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Add Classroom</button>
    </form>

    <!-- Display List of Classrooms -->
    <h2>List of Classrooms</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classrooms as $classroom)
                <tr>
                    <td>{{ $classroom->id }}</td>
                    <td>{{ $classroom->name }}</td>
                    <td>
                        <button wire:click="edit({{ $classroom->id }})">Edit</button>
                        <button wire:click="delete({{ $classroom->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
