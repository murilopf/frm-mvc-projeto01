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

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/areas', 'AreaController@index');
// Route::get('/areas/create', 'AreaController@create');
//->only() //define as rotas que serão criadas
Route::resource('areas', 'AreaController')->except('show');
Route::resource('studies', 'StudyController')->except('show');

