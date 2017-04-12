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

//Go to pages controller and do whatever in getcontact function
Route::get('contact', 'PagesCtrl@getContact'); 
Route::get('about', 'PagesCtrl@getAbout');
Route::get('/', 'PagesCtrl@getIndex');
Route::resource('posts', 'PostCtrl');