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

//route Category
Route::get('/CategoryForm','Admin\CategoryController@showcategory')->name('categoryfrom');
Route::post('/Category/Create','Admin\CategoryController@create');

//route Product
Route::get('/ProductForm','Admin\AdminController@showproduct')->name('productfrom');

Auth::routes();

Route::get('/about','HomeController@about');

Route::get('/home', 'HomeController@index')->name('home');
