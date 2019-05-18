<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->post('/teams', function () {

    $attributes = request()->validate(['name'=>'required']);

    auth()->user()->team()->create($attributes);

    return redirect('/');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
