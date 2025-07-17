<!-- resources/views/todos/edit.blade.php -->
<!DOCTYPE html>
<html>
<head><title>Edit Todo</title></head>
<body>
    <h1>Edit Todo</h1>

    <form action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $todo->title }}" required>
        <label><input type="checkbox" name="completed" {{ $todo->completed ? 'checked' : '' }}> Completed</label>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('todos.index') }}">Back</a>
</body>
</html>
