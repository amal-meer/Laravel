@extends('layout')

@section('title',$Article->title)

@section('content')

    <card header="{{$Article->title}}">
        <div class="card-body">

            {{$Article->content}}

        </div>
    </card>


            <!-- The edit link -->

    @auth
        @can('update',$Article)

            <div class="container">
                <div class="row justify-content-center">

                    <a href= {{route('Articles.edit',['Article' => $Article])}}>
                        <my-button text="EDIT"></my-button>
                    </a>



                    <!-- The delete action -->

                    <form method="POST" action="/Articles/{{ $Article->id }}">

                        @csrf

                        @method('DELETE')

                        <my-button text="DELETE"></my-button>

                    </form>

                </div>
            </div>

        @endcan
    @endauth



    {{--show comments--}}


    <card header="Comments">

        @foreach($Article->comments as $comment)

            <div class="card-body border">

                {{$comment->Content}}

            </div>

        @endforeach

    </card>



    {{-- Add comments form --}}

    @auth

    <card header="Add your comment">
        <form method="POST" action="/Articles/{{$Article->id}}/comments">

            @csrf

            <div class="card-body">

                <input style="text-align: start; height:50px;" id="comment" type="text" class="form-control" name="comment" value="{{ old('comment') }}" required>

                <my-button text="ADD"></my-button>

            </div>

        </form>
    </card>

    @endauth

@endsection
