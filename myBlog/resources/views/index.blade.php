@extends('layout')

@section('title','Show all Article')

@section('content')

    @foreach($articles as $article)

        <li>

            <a href="/Articles/{{$article->id}}">

                {{$article->title}}

            </a>

        </li>


    @endforeach

@endsection