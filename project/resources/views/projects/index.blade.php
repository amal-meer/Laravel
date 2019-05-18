@extends('layout')

	<title>Project</title>

@section('content')

	<h1 class="title">project page</h1>

	@if(session('message'))

		<h1  class="subtitle">{{session('message')}}</h1>

	@endif
	
	<ul>

	@foreach($projects as $project)

		<li>

			<a href="/projects/{{$project->id}}">

			{{$project->title}}

			</a>

		</li>

	@endforeach

</ul>

@endsection