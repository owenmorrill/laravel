@extends('layout')

@section('title')
    Projects
@endsection

@section('content')

    @foreach ($projects as $project)
        <p><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></p>
    @endforeach

@endsection
