@extends('layout')

@section('title','myBlog')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>


            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <a href="/Articles/create">
                @csrf

                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Show my articles') }}
                        </button>
                    </div>
                </a>

                <a href="/Articles/create">
                    @csrf

                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create a new article') }}
                        </button>
                    </div>
                </a>

                <a href="/Articles">
                    @csrf

                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Show all articles') }}
                        </button>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>


@endsection
