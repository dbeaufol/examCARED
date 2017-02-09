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

Route::get('logout', 'Auth\LoginController@logout');
Route::get('/','AccueilController@index');
Route::get('contact','ContactController@index');
Route::post('contact',['as' => 'contact_store', 'uses' => 'ContactController@store']);
Route::get('magasin','MagasinController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
