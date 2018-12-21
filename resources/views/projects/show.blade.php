@extends('layout')

@section('title')
    Project {{ $project->id }}
@endsection

@section('content')

    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>


    @if ($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)
                <form method="POST" action="/completed-tasks/{{ $task->id }}">
                    @if ($task->completed)
                        @method('DELETE')
                    @endif
                @csrf

                    <label for="completed">
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                    </label>
                </form>
            @endforeach
        </div>
        <br><br>
    @endif

    <form method="POST" action="/projects/{{ $project->id }}/tasks">
        @csrf

        <label for="description">
            <input type="text" name="description">
            <button type="submit">Create Task</button>
        </label>
    </form>
    <a href="/projects/{{ $project->id }}/edit">Edit Project</a>

@endsection
