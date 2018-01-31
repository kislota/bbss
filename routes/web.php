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

Route::resource('/blogs','BlogsController');
Route::resource('/posts','PostsController');
//Route::resource('/filters','FiltersController');
//Route::resource('/likes','LikesController');
//Route::resource('/comments','CommentsController');
//Route::prefix('admin')->namespace('Admin')->group(function () {
//    Route::resource('/','AdminController');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});