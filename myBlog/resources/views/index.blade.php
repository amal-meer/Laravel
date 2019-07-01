@extends('layout')

@section('title', 'Show '.$title)

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    {{$title}}
                </div>

                @foreach($articles as $article)
                    <a href="/Articles/{{$article->id}}">

                        <div class="card-body border">
                            {{$article->title}}
                        </div>

                    </a>
                @endforeach

             </div>
            {{ $articles->links() }}
        </div>
    </div>
</div>


@endsection
