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

Route::get('/', 'App\Http\Controllers\HomeController@index')
    ->name('index');

Route::get('/cart', 'App\Http\Controllers\CartController@index')
    ->name('cart');

Route::get('/terms', 'App\Http\Controllers\TermsController@index')
    ->name('terms');

require __DIR__.'/auth.php';

