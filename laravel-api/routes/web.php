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

// Route::get('/','ProjectsController@create');
Route::post('/project','ProjectsController@store');
Route::resource('/products','ProductsController');

Route::get('/skills', function ()
{
	return ['Laravel1', 'Vuejs', 'PHP', 'Javascript'];
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
