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
//Lien url et lien vers mes controllers
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/','AccueilController@index');
Route::get('contact','ContactController@index');
Route::post('/contact','ContactController@insertOne');
Route::get('message','MessageController@index');
Route::get('magasin','MagasinController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
