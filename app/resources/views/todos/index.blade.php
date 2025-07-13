<!-- resources/views/todos/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todos</title>
</head>
<body>
    <h1>Todo List</h1>

    <a href="{{ route('todos.create') }}">+ New Todo</a>

    <ul>
        @foreach ($todos as $todo)
            <li>
                <form action="{{ route('todos.update', $todo) }}" method="POST" style="display:inline;">
                    @csrf @method('PUT')
                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $todo->completed ? 'checked' : '' }}>
                </form>
                {{ $todo->title }}
                <a href="{{ route('todos.edit', $todo) }}">Edit</a>
                <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
