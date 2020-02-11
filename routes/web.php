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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::group(['prefix' => 'config', 'as' => 'config.'], function () {
  Route::get('/online', 'ConfigController@online')->name('online');
  Route::get('/', 'ConfigController@onlineList')->name('onlineList');
});

Auth::routes();

Route::middleware(['activeUser'])->group(function () {
  Route::get('/home', 'HomeController@index')->name('home');

  Route::group(['prefix' => 'chat', 'as' => 'chat.'], function () {
    Route::get('/', 'ChatRoomController@index')->name('index');
  });
});
