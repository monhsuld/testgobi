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

// Route::get('/', function () {
//     return view('welcome');
// });

// Нүүр
Route::get('/', 'HomeController@index');

//Бидний тухай
Route::get('about', 'AboutController@index');
Route::get('stories', 'AboutController@stories');
Route::get('coat-info', 'AboutController@coat');
Route::get('services', 'AboutController@services');
Route::get('industrial', 'AboutController@industrial');
Route::get('restonsibility', 'AboutController@restonsibility');
Route::get('job', 'AboutController@job');
Route::get('magazine', 'AboutController@magazine');
Route::get('contact', 'AboutController@contact');

//Бараа бүтээгдэхүүн
Route::get('products', 'ProController@index');
Route::get('items', 'ProController@items');
Auth::routes();


//admin
Route::get('admin', 'AdminController@index');
