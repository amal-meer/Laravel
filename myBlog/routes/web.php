<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/UserArticles', 'UserArticlesController@index');

Route::post('//Articles/{Article}/comments', 'CommentsController@store');

Route::resource('Articles','ArticlesController');

