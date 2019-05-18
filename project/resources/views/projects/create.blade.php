
@extends('layout')

<title>Create Project</title>

@section('content')


<h1 class="title">Create a new Project</h1>

<form method="POST" action="/projects">

	@csrf

	<div class="field">

		<label class="label" for="title">Project title</label>
		

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

		<label class="label" for="description">Project description</label>


		<div class="control">

			<textarea 
				name="description" 
				class="textarea {{$errors->has('description')? 'is-danger':''}}"
				required
				value=
				>{{old('description')}}</textarea>

		</div>

	</div>



	<div class="field">

		<div class="control">

			<button type="submit" class="button is-link">Create Project</button> 

		</div>

	</div>


	
	@include('errors')


</form>


@endsection