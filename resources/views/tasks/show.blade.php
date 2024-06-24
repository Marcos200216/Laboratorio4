<h1>Tarea ID: {{ $task->id }}</h1>
<hr>
<h2>{{ $task->name }}</h2>
<p>{{ $task->description }}</p>

<a href="/tasks/{{ $task->id }}/edit">Editar</a>

<!-- Formulario para eliminar la tarea -->
<form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar Tarea</button>
</form>