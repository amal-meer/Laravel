@extends('layout')

@section('title','Create Article')

@section('content')


    <h1 class="title">Create a new Article</h1>

    <form method="POST" action="/Articles">

        @csrf

        <div class="field">

            <label class="label" for="title">Article title</label>


            <div class="control">

                <input
                        type="text"
                        class="input  {{$errors->has('title')? 'is-danger':''}}"
                        name="title"
                        value="{{old('title')}}"
                        required>

            </div>

        </div>



        <div class="field">

            <label class="label" for="content">Article content</label>


            <div class="control">

			<textarea
                    name="content"
                    class="textarea {{$errors->has('content')? 'is-danger':''}}"
                    required
                    value=
            >{{old('content')}}</textarea>

            </div>

        </div>



        <div class="field">

            <div class="control">

                <button type="submit" class="button is-link">Create Article</button>

            </div>

        </div>



        @include('errors')


    </form>



@endsection