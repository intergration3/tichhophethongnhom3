<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('home',['middleware'=>'auth',function(){
	return view('user.master');
}]);

Route::get('trangchu',function(){
	return view('user.master');
});

Route::get('search', function()
{
	return View::make('search.search');
});

Route::post('executeSearch', array('uses' => 'SearchController@executeSearch'));

//Route::get('patien',['as'=>'patien.patien','uses'=>'PatienController@index']);
Route::group(['prefix'=>'patien'],function (){
	Route::get('list',['as'=>'patien.list','uses'=>'PatienController@getList']);
	Route::get('add',['as'=>'patien.getAdd','uses'=>'PatienController@getAdd']);
	Route::post('add',['as'=>'patien.postAdd','uses'=>'PatienController@postAdd']);
});

//Route::get('openemr', 'OpenEMRController@index');
//Route::get('openemr',['as'=>'openemr.index','middleware'=>'auth','uses'=>'OpenEMRController@index']);
Route::get('openemr',['as'=>'openemr.index','uses'=>'OpenEMRController@index']);

Route::get('henlichkham', 'ChikitsaController@index');

Route::get('register',function(){
	return View::make('login.register');
});
