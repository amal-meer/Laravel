<?php

namespace App\Http\Controllers;

use App\Task;

use App\Project;

class ProjectTasksController extends Controller
{
    
	public function store(Project $project){

		$attributes = request()->validate(['description' => 'required']);

		$project->addTask($attributes);

		flash('The task has been added to your project');

		return back();

	}

}
