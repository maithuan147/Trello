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
    return view('users.sign_up');
})->name('login');
Route::get('index', function () {
    return view('index');
});
Route::resource('listtask', 'ListtaskController');
Route::resource('user', 'UserController');
Route::resource('task', 'TaskController');

