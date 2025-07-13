<!-- resources/views/todos/create.blade.php -->
<!DOCTYPE html>
<html>
<head><title>Create Todo</title></head>
<body>
    <h1>Create New Todo</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <button type="submit">Add</button>
    </form>

    <a href="{{ route('todos.index') }}">Back</a>
</body>
</html>
