<?php

use App\Notifications\SubscriptionRenewalFailed;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//use Illuminate\Filesystem\Filesystem;

//use App\Services\Twitter;

//use App\Repositories\UserRepository;

Route::get('/', function () {

	$user = App\User::first();

	$user->notify(new SubscriptionRenewalFailed);

	return view('welcome');
});

/*
	GET /projects (index) --> fetch *all* other resources
	GET /projects/create (create) --> display form to create a new project
	GET/projects/1 (show) 
	POST /projects (store) --> create a *new* resource
	GET /projects/1/edit (edit) --> display form to update a project
	PATCH /projects/1 (update)  
	DELETE /projects/1 (destroy)
*/

Route::resource('projects','ProjectsController');
/*
Route::get('/projects','ProjectsController@index');

Route::get('/projects/create','ProjectsController@create');

Route::get('/projects/{project}','ProjectsController@show');

Route::post('/projects','ProjectsController@store');

Route::get('/projects/{project}/edit','ProjectsController@edit');

Route::patch('/projects/{project}','ProjectsController@update');

Route::delete('/projects/{project}','ProjectsController@destroy');
*/

Route::post('/projects/{project}/tasks','ProjectTasksController@store');

Route::post('/completed-tasks/{task}','CompletedTasksController@store');

Route::delete('/completed-tasks/{task}','CompletedTasksController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
