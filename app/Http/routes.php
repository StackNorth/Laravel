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


Route::post('comment/store', 'CommentController@store');
Route::get('/', 'HomeController@index');
Route::get('pages/{id}', 'PagesController@show');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('home','HomeController@index');
Route::get('article','ArticleController@index');
Route::get('article/{id}','ArticleController@show');
Route::post('articleComment/store','ArticleCommentController@store');




Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth'], function()
{
    Route::get('/', 'AdminHomeController@index');
    Route::resource('pages', 'PagesController');
    Route::resource('comments','CommentsController');
    Route::resource('articlecomment','ArticleCommentController');
});
