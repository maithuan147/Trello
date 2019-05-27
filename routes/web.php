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
<<<<<<< HEAD
    return view('welcome');
});
=======
    return view('users.sign_up');
})->name('login');
>>>>>>> 15dc1e0fe3603e75e640e5043029c8d0a31d9340
Route::get('index', function () {
    return view('index');
});
Route::resource('listtask', 'ListtaskController');
Route::resource('user', 'UserController');
Route::resource('task', 'TaskController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
