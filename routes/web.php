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

Route::group(['prefix'=>'/admin'],function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');
    Route::resource('/comments', 'CommentController');
    Route::resource('/images', 'ImageController');
    Route::resource('/orders', 'OrderController');
    Route::resource('/ordersproducts', 'OrderProductController');
    Route::resource('/productspromotion', 'ProductPromotionController');
    Route::resource('/promotions', 'PromotionController');
    Route::resource('/users', 'UserController');
   
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




