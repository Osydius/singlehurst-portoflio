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

//Page route
Route::get('/home', 'PagesController@home')->name('home');

//Post routes
Route::name('posts.')->group(function () {
    Route::get('/posts', 'PostsController@index')->name('index');

    Route::get('/posts/create', 'PostsController@create')->name('create');

    Route::post('/posts', 'PostsController@store')->name('store');

    Route::get('/posts/{post}', 'PostsController@show')->name('show');
});


//Project routes
Route::name('projects.')->group(function () {
    Route::get('/projects', 'ProjectsController@index')->name('index');

    Route::get('/projects/create', 'ProjectsController@create')->name('create');

    Route::post('/projects', 'ProjectsController@store')->name('store');

    Route::get('/projects/{project}', 'ProjectsController@show')->name('show');

    Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('edit');

    Route::put('/projects/{project}', 'ProjectsController@update')->name('update');
    Route::patch('/projects/{project}', 'ProjectsController@update')->name('update');

    Route::delete('/projects/{project}', 'ProjectsController@destroy')->name('destroy');
});

//User routes
Route::get('/register', 'UsersController@create')->name('register');

//Session routes
Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy')->name('logout');
