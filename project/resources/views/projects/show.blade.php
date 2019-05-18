@extends('layout')

<title>Show Project</title>

@section('content')

	<h1 class="title">{{$project->title}}</h1>


	@if(session('message'))

		<h1  class="subtitle">{{session('message')}}</h1>

	@endif


	<div class="content">

		{{ $project->description}}

		<p>
			<a href="/projects/{{ $project->id }}/edit">edit</a>
		</p>

	</div>




	@if($project->tasks->count())

		<div class="box">

			@foreach ($project->tasks as $task)

				<div>

					<form method="POST" action="/completed-tasks/{{ $task -> id}}" >

						@if($task->completed)

							@method('DELETE')

						@endif

						@csrf

						<label class="checkbox {{ $task->completed ? 'is-complete':''}}"  for="completed" >

							<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked':''}} >

							{{$task->description}}
						
						</label>
					
					</form>
					
				</div>

			@endforeach

		</div>

	@endif

	{{-- create task form --}}

	<form method="POST" action="/projects/{{$project->id}}/tasks" class="box">

		@csrf

		<div class="field">

			<label class="label" for = "description">New Task</label>

			<div class="control">

				<input type="text" class="input" name="description" placeholder="New Task" required>
			
			</div>

		</div>


		<div class="field">

			<div class="control">

				<button type="submit" class="button is-link">Add task</button> 

			</div>

		</div>


		@include('errors')



	</form>

@endsection