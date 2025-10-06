@extends('pastel-layout')
@section("content")
    <ul>
        @foreach ($tasks as $task)
            <li> {{ $task }}</li>
        @endforeach
    </ul>
@endsection
