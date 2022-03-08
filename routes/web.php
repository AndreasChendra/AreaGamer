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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'UserController@profile');
Route::get('/wallet', 'WalletController@index');

Route::get('/product/detail/{productId}', 'ProductController@show');
Route::get('/product/type/{typeId}', 'ProductController@type');
Route::get('/product/category/{categoryId}', 'ProductController@category');

Route::get('/store/info/{storeId}', 'StoreController@show');

Route::get('/cart/{userId}', 'CartController@show');
Route::post('/addToCart/{productId}/{userId}', 'CartController@store');