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
// 一覧
Route::get('/post', 'PostsController@getIndex');
// 詳細
Route::get('/post/detail/{id}', 'PostsController@getDetail');
// 追加
Route::get('/post/add', 'PostsController@getAdd');
Route::post('/post/add', 'PostsController@postAdd');
//会員登録
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//コメント
Route::post('/posts/{post}/comments', 'CommentsController@store');
