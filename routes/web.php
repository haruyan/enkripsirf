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
    return view('auth.login');
});

// Route::get('/beranda', function () {
//     return view('beranda');
// });

// Route::resource('task','TaskController');

Auth::routes();

// Route::get('/beranda', 'HomeController@index')->name('beranda');

Route::group(['middleware' => ['web','auth']], function(){
	

	Route::get('/home', function(){
		return view('beranda');
	});

	Route::get('/beranda', function () {
    return view('beranda');
	});

	Route::resources([
		'task'=>'TaskController'
	]);
	Route::get('task/decrypt/{id}','TaskController@decrypt')->name('task.decrypt');

});