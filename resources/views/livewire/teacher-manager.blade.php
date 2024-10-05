<!-- resources/views/livewire/teacher-manager.blade.php -->

<div>
    <!-- Form for Adding New Teacher -->
    <form wire:submit.prevent="createTeacher">
        <div>
            <label for="name">Teacher Name:</label>
            <input type="text" id="name" wire:model="name" placeholder="Enter teacher's name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" wire:model="email" placeholder="Enter teacher's email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Add Teacher</button>
    </form>

    <!-- Display List of Teachers -->
    <h2>List of Teachers</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>
                        <button wire:click="edit({{ $teacher->id }})">Edit</button>
                        <button wire:click="delete({{ $teacher->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
