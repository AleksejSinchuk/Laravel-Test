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
/*

Route::get('hello', function () {
    $tasks=[
        'task1',
        'task2',
        'task3'
    ];
    return view('hello',compact('tasks'));
});
Route::get('tasks', function () {
    //$tasks=DB::table('tasks')->get();
    //$tasks=\App\Task::all();
    $tasks=\App\Task::incomlete();
    return view('tasks.show',compact('tasks'));
});
Route::get('tasks/{task}', function ($id) {
   // $task=DB::table('tasks')->find($id);
    $task=\App\Task::find($id);
    return view('tasks.tasks',compact('task'));
});
*/
Route::get('tasks','TasksController@index');
Route::get('tasks/{task}','TasksController@show');
Route::get('posts','PostsController@index');
Route::get('posts/{post}','PostsController@show');
Route::get('users','Pagination@users');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('mail','MailController@mail');

