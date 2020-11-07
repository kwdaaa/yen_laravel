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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// 「/」のURLでbothアクションへ飛ぶ
// Route::get('/', 'MainController@both');

// 00:ふたりの合計、Aさんの合計、Bさんの合計画面
Route::get('yen', 'MainController@both');


// 01:各カテゴリーの合計画面
// category_id：１（食費）
// category_id：２（日用品費）
// category_id：３（娯楽費）
// category_id：４（固定費）
// category_id：５（その他）
Route::get('yen/{id}/{category_id}', 'MainController@index');


// 02-1:データ送信
Route::get('yen/1/create/add', 'MainController@create');
// 02-2:データ登録
Route::post('yen/1', 'MainController@store');


// 03:詳細画面
Route::get('/yen/{id}/{category_id}/{add_id}', 'MainController@show');


// 04-1:編集データ送信
Route::get('/yen/1/{add_id}/add/edit', 'MainController@edit');
// 04-2:編集データ登録
Route::post('/yen/1/{add_id}/add', 'MainController@update');


// 05:削除機能
Route::delete('/yen/1/{add_id}/add', 'MainController@destroy');
