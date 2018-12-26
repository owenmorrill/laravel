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

use Illuminate\Filesystem\Filesystem;
use App\Example;

//app()->singleton('example', function () {
//  return new Example;
//});

//Route::get('/', function () {
//  dd(app('App\Task'));
//  return view('welcome');
//});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('/projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');


//Route::get('{slug}', 'PostController@show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
