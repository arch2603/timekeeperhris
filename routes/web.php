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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'ContentsController@home')->name('home');
Route::get('/users', 'UsersController@index')->name('users');//users is just an arbitrary name
Route::get('/users/new', 'UsersController@newUser')->name('new_user');
Route::post('/users/new', 'UsersController@newUser')->name('create_user');
Route::get('/users/{user_id}', 'UsersController@show')->name('show_user');
Route::post('/users/{user_id}', 'UsersController@modify')->name('update_user');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/generate/password', function (){
    return bcrypt('123456789');
});
