@extends('layout')

@section('title','something')

@section('content')

    <li>

        <a href="/Articles/{{$articles->id}}">

            {{$articles->title}}

        </a>

    </li>


@endsection