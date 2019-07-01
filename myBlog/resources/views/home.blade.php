@extends('layout')

@section('title','myBlog')

@section('card')
    <div class="card-header">Dashboard</div>

    <a href="/Articles">

        <div class="card-body">
            <button type="submit" class="btn btn-primary">
                {{ __('Show all articles') }}
            </button>
        </div>
    </a>

    @auth
        <a href="/UserArticles">

            <div class="card-body">
                <button type="submit" class="btn btn-primary">
                    {{ __('Show my articles') }}
                </button>
            </div>
        </a>

        <a href="/Articles/create">

            <div class="card-body">
                <button type="submit" class="btn btn-primary">
                    {{ __('Create a new article') }}
                </button>
            </div>
        </a>
    @endauth

@endsection
