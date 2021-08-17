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

Route::get('/socialnetworks', 'App\Http\Controllers\HomeController@index')
    ->name('socialnetworks');

Route::get('/rating', 'App\Http\Controllers\HomeController@index')
    ->name('rating');

Route::get('/cart', 'App\Http\Controllers\CartController@index')
    ->name('cart');

Route::get('/subscriptions', 'App\Http\Controllers\SubscriptionsController@index')
    ->name('subscriptions');

Route::get('/history', 'App\Http\Controllers\HistoryController@index')
    ->name('history');

Route::get('/replenishment', 'App\Http\Controllers\ReplenishmentController@index')
    ->name('replenishment');

Route::get('/promocode', 'App\Http\Controllers\PromocodeController@index')
    ->name('promocode');

Route::get('/partnership', 'App\Http\Controllers\PartnershipController@index')
    ->name('partnership');

Route::get('/promotion', 'App\Http\Controllers\PromotionController@index')
    ->name('promotion');

Route::get('/support', 'App\Http\Controllers\SupportController@index')
    ->name('support');

Route::get('/information', 'App\Http\Controllers\InformationController@index')
    ->name('information');

Route::get('/reviews', 'App\Http\Controllers\ReviewsController@index')
    ->name('reviews');

Route::get('/tools', 'App\Http\Controllers\ToolsController@index')
    ->name('tools');

Route::get('/api', 'App\Http\Controllers\ApiController@index')
    ->name('api');

Route::get('/api/reseller', 'App\Http\Controllers\ApiController@reseller')
    ->name('api.reseller');

Route::get('/terms', 'App\Http\Controllers\TermsController@index')
    ->name('terms');

require __DIR__ . '/auth.php';
