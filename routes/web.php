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
// Route::get('/', function () {
//     return view('welcome');
// });

//首頁
Route::get('/gethome', 'App\Http\Controllers\HomeController@gethome0');
Route::get('/gethome1', 'App\Http\Controllers\HomeController@gethome1');
Route::get('/gethome2', 'App\Http\Controllers\HomeController@gethome2');
Route::get('/gethome3', 'App\Http\Controllers\HomeController@gethome3');

Route::get('/', 'App\Http\Controllers\HomeController@gethome');

// Route::get('/gethome', 'App\Http\Controllers\CgyController@gethome');

// 商品頁
Route::get('/detail/{id}', 'App\Http\Controllers\HomeController@detail')->name('detail');
Route::get('/produits', 'App\Http\Controllers\CartController@index');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



 Route::get('/mylogout', 'App\Http\Controllers\HomeController@mylogout');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('test', 'App\Http\Controllers\CartController@index')->name('test');
Route::get('add-to-cart/{id}', 'App\Http\Controllers\CartController@addToCart')->name('add-to-cart');
Route::get('cart', 'App\Http\Controllers\CartController@cartdetail');
Route::get('cart/{id}', 'App\Http\Controllers\CartController@destroy')->name('cart-delete');
Route::post('cart', 'App\Http\Controllers\CartController@update')->name('cart.update');
Route::get('checkout', 'App\Http\Controllers\CartController@checkout');
Route::post('cart/order', 'App\Http\Controllers\OrderController@store')->name('cart.order');
