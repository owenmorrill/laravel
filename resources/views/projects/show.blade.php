@extends('layout')

@section('title')
    Project {{ $project->id }}
@endsection

@section('content')

    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>

    <a href="/projects/{{ $project->id }}/edit">Edit Project</a>

@endsection
