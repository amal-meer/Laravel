@extends('layout')

@section('title','LTT home page')

@section('content')
    <h1>Lend The Trend website</h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection
