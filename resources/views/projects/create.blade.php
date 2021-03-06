@extends('layout')

@section('title')
    Create Project
@endsection

@section('content')

    <form method="POST" action="/projects">
        @csrf

        <div>
            <input type="text" name="title" placeholder="Project title" value="{{ old('title') }}">
        </div>
        <div>
                <textarea type="textarea" name="description" placeholder="Project description">{{ old('description') }}</textarea>
        </div>
        <div>
            <button type="submit">Punch it, Chewie!</button>
        </div>
    </form>

@endsection
