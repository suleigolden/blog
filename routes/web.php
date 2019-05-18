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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createnewblog', 'HomeController@createblog');
Route::get('/blog/{id}', 'FrontEndController@showBlogDetails');
Route::post('/create/blog', 'BlogController@store');
Route::post('/comment/blog', 'BlogController@storeComment');
Route::get('/getAll/blog', 'BlogController@index');
