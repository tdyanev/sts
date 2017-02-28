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

Route::get('/', 'HomeController@index');
Route::get('/team', function(){
    return view('team');
});

Route::group([
	'prefix' => 'panel',
	//'namespace' => 'Panel',
	//'middleware' => 'auth',
], function() {
	Auth::routes();

	Route::get('/home', 'Panel\HomeController@index')->name('panel.home');
	Route::resource('projects', 'Panel\ProjectController');
	Route::resource('blogs', 'Panel\BlogController');
});

