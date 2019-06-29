<?php

use App\Notifications\SubscriptionRenewalFailed;


Route::get('/', function () {

//	$user = App\User::first();

//	$user->notify(new SubscriptionRenewalFailed);

	return view('welcome');
});

Route::resource('projects','ProjectsController');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');

Route::post('/completed-tasks/{task}','CompletedTasksController@store');

Route::delete('/completed-tasks/{task}','CompletedTasksController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
