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
Route::get('/profile', 'UserController@profile')->middleware('auth');
Route::put('/uploadPhoto', 'UserController@store')->middleware('auth');
Route::post('/updateProfile', 'UserController@update')->middleware('auth');
Route::post('/changePass', 'UserController@changePass')->middleware('auth');
Route::get('/resetPassword', 'UserController@vResetPass');
Route::post('/resetPassword', 'UserController@resetPass');

Route::get('/search', 'ProductController@search');
Route::get('/product/detail/{productId}', 'ProductController@show');
Route::get('/product/type/{typeId}', 'ProductController@type');
Route::get('/product/category/{categoryId}', 'ProductController@category');
Route::post('/addProduct', 'ProductController@store')->middleware('auth', 'isVerif', 'isSeller');
Route::post('/updateProduct/{productId}', 'ProductController@update')->middleware('auth', 'isVerif', 'isSeller');
Route::delete('/deleteProduct/{productId}', 'ProductController@destroy')->middleware('auth', 'isVerif', 'isSeller');

Route::post('/create/store', 'StoreController@create')->middleware('auth', 'isVerif');
Route::get('/store/info/{storeId}', 'StoreController@show')->middleware('auth', 'isVerif', 'isSeller');
Route::put('/edit/store/{storeId}', 'StoreController@edit')->middleware('auth', 'isVerif', 'isSeller');
Route::get('/order/{storeId}', 'StoreController@order')->middleware('auth', 'isVerif', 'isSeller');
Route::put('/done/{transactionId}', 'TransactionController@done')->middleware('auth', 'isVerif', 'isSeller');
Route::put('/cancel/{transactionId}', 'TransactionController@cancel')->middleware('auth', 'isVerif', 'isSeller');

Route::post('/send/review/{productId}', 'ReviewController@review')->middleware('auth');

Route::get('/cart/{userId}', 'CartController@show')->middleware('auth', 'isBuyer');
Route::post('/addToCart/{productId}/{userId}', 'CartController@store')->middleware('auth', 'isBuyer');
Route::delete('/delete/cart', 'CartController@destroy')->middleware('auth', 'isBuyer');
Route::post('/checkout', 'CartController@checkout')->middleware('auth', 'isBuyer');

Route::post('/buy/{productId}', 'ProductController@cBuy')->middleware('auth', 'isBuyer');
Route::get('/buy/{productId}', 'ProductController@vBuy')->middleware('auth', 'isBuyer');
Route::put('/buy/{transactionId}', 'ProductController@buy')->middleware('auth', 'isBuyer');

Route::get('/transber', 'TransberController@index')->middleware('auth', 'isBuyer');
Route::get('/transber/detail/{transberId}', 'TransberController@show')->middleware('auth', 'isBuyer');

Route::get('/transaction', 'TransactionController@index')->middleware('auth');
Route::get('/transaction/history/{userId}', 'TransactionController@show')->middleware('auth');
Route::put('/doneTransaction/{transactionId}', 'TransactionController@doneTransaction')->middleware('auth');
Route::delete('/cancelTransaction/{transactionId}', 'TransactionController@cancelTransaction')->middleware('auth');
Route::delete('/deleteTransaction/{transactionId}', 'TransactionController@destroy')->middleware('auth');

Route::get('/verifKTP', 'UserController@vVerifKTP')->middleware('auth');
Route::post('/veritKTP', 'UserController@sVerifKTP')->middleware('auth');

Route::post('/transber/{category}', 'TransberController@transber')->middleware('auth', 'isBuyer');
Route::put('/transber/payment/{transberId}', 'TransberController@payment')->middleware('auth', 'isBuyer');
Route::delete('/cancelTransber/{transberId}', 'TransberController@destroy')->middleware('auth', 'isBuyer');
Route::put('/done/{roleTransber}/{transberId}', 'TransberController@done')->middleware('auth', 'isBuyer');