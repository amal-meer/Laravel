@extends('layout')

@section('title','myBlog')

@section('content')

    <card header="Dashboard">

        <div class="card-body">

            <a href={{ route('Articles.index') }}>

                <my-button text="Show all articles"></my-button>

            </a>

        @auth

            <a href={{ route('UserArticles.index') }}>

                <my-button text="Show my articles"></my-button>

            </a>

            <a href={{ route('Articles.create') }}>

                <my-button text="Create a new article"></my-button>

            </a>

        @endauth

        </div>

    </card>

@endsection
