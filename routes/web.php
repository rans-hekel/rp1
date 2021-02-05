<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controller\manajerController;
use App\Http\Controller\superuserController;
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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');




//hak akses superuser
Route::group(['Middleware' => 'superuser'], function () {
    Route::get('/superuser', 'superuserController@index')->name('superuser');
});

//hak akses manajer
Route::group(['Middleware' => 'superuser'], function () {
    Route::get('/manajer', 'manajerController@index')->name('manajer');
    });
