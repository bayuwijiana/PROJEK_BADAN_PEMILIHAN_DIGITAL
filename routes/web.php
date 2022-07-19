<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/regis', 'regis');




Route::middleware(['Admin'])->group(function () {
    Route::resource('/admin', 'AdminController');
    Route::post('mulai', 'pemilihandigitalController@mulai');
    Route::resource('/penduduk', 'DatapendudukController');
    Route::resource('/suara', 'SuarapemilihanController');
    Route::get('fromemail2', 'MailController@index');
    Route::resource('/pemilihan', 'pemilihandigitalController');
    Route::resource('/kandidat', 'kandidatController');
    Route::resource('/panduan', 'panduanController');
    Route::get('cetak', 'SuarapemilihanController@cetak');
});
Route::resource('/pencoblosan', 'pencoblosan');
Route::resource('/coba', 'coba');
Route::post('kirim', 'MailController@kirim');


Route::middleware(['User'])->group(function () {
    Route::resource('/user', 'UserController');
    Route::get('fromemail', 'MailController@index');
    Route::resource('/viewuser', 'viewuser');
    Route::resource('/uspan', 'uspan');
});






Route::get('logout', function () {
    Auth::logout();
    return view('welcome');
});
