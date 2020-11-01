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
//課題3
Route::group(['prefix' => 'XXX'], function() {
    Route::get('news/create', 'AAA\bbbController@add');
});

//4
//前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して
//admin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら 
//ProfileController の edit Action に割り当てるように設定してください。
Route::group(['prefix' => 'admin'], function() {
    Route::get('admin/profile/create', 'Admin\ProfileController@add');
    Route::get('admin/profile/edit', 'Admin\ProfileController@edit');
});
