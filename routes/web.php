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

//Route::get('/', function () {
//   return view('welcome');
//});
Route::group(['middleware' => 'auth'], function() {
	Route::resource('personajes', 'PersonajeController');
	Route::post('personajes/create', 'PersonajeController@store');
	Route::put('personajes/{id}/edit', 'PersonajeController@putEdit');
});
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/', 'PersonajeController@index');
