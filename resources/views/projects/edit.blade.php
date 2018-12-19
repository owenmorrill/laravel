@extends('layout')

@section('title')
    Edit Project {{ $project->id }}
@endsection

@section('content')

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf

        <div>
            <input type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
        </div>
        <div>
                <textarea type="textarea" name="description" placeholder="Project description">{{ $project->description }}</textarea>
        </div>
        <div>
            <button type="submit">Edit it, Chewie!</button>
        </div>
    </form>

    <div>
        <form method="POST" action="/projects/{{ $project->id }}">
            @method('DELETE')
            @csrf

            <button type="submit">It's not my fault!</button>
        </form>

    </div>

@endsection
