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

Route::get('/master', function(){
	return view('layouts/master');
});

Route::get('/create/content', [
	'uses' => 'ContentController@create',
	'as' => 'create_content'
	]);
Route::post('/create/content', [
	'uses' => 'ContentController@store',
	'as' => 'create_content'
	]);
Route::get('contents', [
	'uses' => 'ContentController@index',
	'as' => 'contents'	
	]);
Route::get('video/details/{id}', [
	'uses' => 'ContentController@show',
	'as' => 'content_show'	
	]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
