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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
Route::resource('roles', 'RoleController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
Route::resource('posts', 'PostController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
Route::resource('permissions', 'PermissionController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
