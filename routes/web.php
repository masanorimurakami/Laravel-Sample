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

// Restfulなルーティングを行う。
Route::resource('book','BookController');
// '/'で、コントローラーのindexメソッドを実行。
// Route::resource('book','BookController@index');
// localhost8000/book/1 Get であればshowメソッドを実行
// Route::resource('book/{id}','BookController@show');

Route::get('/', function () {
    return view('phpinfo');
});
Route::resource('podtest','PodTestController');
// '/'で、コントローラーのindexメソッドを実行。

