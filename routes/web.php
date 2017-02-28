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
Route::get('/seo', function(){
    return view('seo');
});
Route::get('/web-development', function(){
    return view('web-development');
});
Route::get('/design', function(){
    return view('design');
});
Route::get('/projects', function(){
    return view('projects');
});
Route::get('/contacts', function(){
    return view('contacts');
});

Route::group([
	'prefix' => 'panel'
], function() {
	Auth::routes();

	Route::get('/home', 'Panel\HomeController@index')->name('panel.home');
	Route::resource('projects', 'Panel\ProjectController');
});

