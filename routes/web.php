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
Route::put('/uploadPhoto', 'UserController@store');
Route::post('/updateProfile', 'UserController@update');
Route::post('/changePass', 'UserController@changePass');
Route::get('/resetPassword', 'UserController@vResetPass');
Route::post('/resetPassword', 'UserController@resetPass');

Route::get('/product/detail/{productId}', 'ProductController@show');
Route::get('/product/type/{typeId}', 'ProductController@type');
Route::get('/product/category/{categoryId}', 'ProductController@category');
Route::post('/addProduct', 'ProductController@store');
Route::post('/updateProduct');
Route::delete('/deleteProduct/{productId}', 'ProductController@destroy');

Route::post('/create/store', 'StoreController@create');
Route::get('/store/info/{storeId}', 'StoreController@show');
Route::put('/edit/store/{storeId}', 'StoreController@edit');
Route::get('/order/{storeId}', 'StoreController@order');

Route::post('/send/review/{productId}', 'ReviewController@review');

Route::get('/cart/{userId}', 'CartController@show');
Route::post('/addToCart/{productId}/{userId}', 'CartController@store');
Route::delete('/delete/cart', 'CartController@destroy');
Route::post('/checkout', 'CartController@checkout');

Route::get('/buy/{productId}', 'ProductController@buy');

Route::get('/transber/{userName}', 'TransberController@index');
Route::get('/transber/detail/{transberId}', 'TransberController@show');

Route::get('/transaction', 'TransactionController@index');
Route::get('/transaction/history/{userId}', 'TransactionController@show');
Route::delete('/cancelTransaction/{transactionId}', 'TransactionController@destroy');

Route::get('/verifKTP', 'UserController@vVerifKTP');
Route::post('/veritKTP', 'UserController@sVerifKTP');