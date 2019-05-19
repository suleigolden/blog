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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createnewblog', 'HomeController@createblog');
Route::get('/', 'FrontEndController@index');
Route::get('/blog/{id}', 'FrontEndController@showBlogDetails');
Route::get('/blog/category/{category}', 'FrontEndController@showBlogCategory');

Route::post('/create/blog', 'BlogController@store');
Route::get('/blog/edit/{id}', 'BlogController@edit');
Route::post('/update/blog/{id}', 'BlogController@update');
Route::post('/blog/edit/update/{id}', 'BlogController@update');
Route::post('/blog/delete/{id}', 'BlogController@destroy');
Route::get('/blog/delete/{id}', 'BlogController@destroy');

Route::post('/comment/blog', 'BlogController@storeComment');
Route::post('/blog/comment', 'BlogController@storeComment');
Route::get('/getAll/blog', 'BlogController@index');
