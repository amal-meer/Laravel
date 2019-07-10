@extends('layout')

@section('title', 'Show '.$title)

@section('content')

    <card header="{{$title}}">
        @foreach($articles as $article)
            <a href={{route('Articles.show',['Article' => $article->id])}}>

                <div class="card-body border">
                    {{$article->title}}
                </div>

            </a>
        @endforeach

    </card>

    <div class="row justify-content-center">
        {{ $articles->links() }}
    </div>
@endsection
