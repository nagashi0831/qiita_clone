<?php

use Illuminate\Support\Facades\Route;

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

//要ログイン処理
Route::group(['middleware' => 'auth'], function () {
    Route::get('postForm', 'ArticleController@add'); //投稿画面へ遷移
    Route::post('postForm', 'ArticleController@postForm'); 
    Route::get('mypage', 'ArticleController@myPage'); 
});
//ログイン不要
    Route::get('/', 'ArticleController@index'); //記事一覧へ遷移
    Route::get('/detail', 'ArticleController@postDetail'); //投稿の詳細内容へ

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');