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

Route::get('/', 'IndexController@getIndex');

Route::get('/post/{id}', 'PostController@userView');


Route::resource('posts', 'PostController');

Route::resource('questions', 'QuestionController');


Route::post('comments', 'CommentController@postComment');
Route::post('comments/delete', 'CommentController@deleteAjaxComment');