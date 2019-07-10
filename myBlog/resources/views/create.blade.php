@section('title','Create Article')

@extends('layout')

@section('content')
    <card header="Write your article">
        <div class="card-body">
            <form method="POST" action="/Articles">
                @csrf

                <input-field></input-field>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="content" class="col-md-4 col-form-label text-md-right">content</label>

                    <div class="col-md-6">
                        <input style="text-align: start; height:200px;" id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content">

                        @error('content')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <my-button text="Add article"></my-button>
                    </div>
                </div>
            </form>
        </div>
    </card>
           @endsection