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

//route admin
Route::get('/index','Admin\AdminController@index')->name('index');
Route::get('/ProductForm','Admin\AdminController@showproduct')->name('productfrom');
Route::get('/CategoryForm','Admin\AdminController@showcategory')->name('categoryfrom');

Auth::routes();

Route::get('/about','HomeController@about');

Route::get('/home', 'HomeController@index')->name('home');
