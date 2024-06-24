<!-- index.blade.php -->
<h1>Lista de tareas</h1>
<a href="/tasks/create">Crear</a>
<ul>
    @foreach ($tasks as $task)
        <li>
            <a href="/tasks/{{ $task->id }}">{{ $task->name }}</a>
            <!-- Botón para completar la tarea -->
            <form action="/tasks/{{ $task->id }}/complete" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success">Completar</button>
            </form>
        </li>
    @endforeach
</ul>
