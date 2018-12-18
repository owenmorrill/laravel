@extends('layout')

@section('title')
    Owenvel Home
@endsection

@section('content')

        @foreach ($tasks as $task)
            <p>{{ $task }}</p>
        @endforeach

@endsection
