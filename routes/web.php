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



Route::group([
	'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect'],
], function() {

	Route::get('/', 'HomeController@index');
	Route::resource('projects', 'ProjectController', [
		'only' => [ 'index', 'show']
	]);

    foreach (config('app.custom.pages') as $page) {
        Route::get('/' . $page, 'PageController@show');
    }


    Route::get('/team', function(){
    	return view('team');
	});



	Route::get('/contacts', function(){
	    return view('contacts');
	});

	Route::post('/contacts/send', 'HomeController@contacts_send');

});



Route::group([
	'prefix' => 'panel',
	'as' => 'panel.',
	'namespace' => 'Panel',
	'middleware' => 'auth',
], function() {	
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('projects', 'ProjectController');
	Route::resource('blogs', 'BlogController');
	Route::resource('pages', 'PageController');
	Route::resource('locales', 'LocaleController');
});

Route::group([
	'prefix' => 'panel',
], function() {
	Auth::routes();
});
