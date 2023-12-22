<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopifyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/products',[ShopifyController::class,'getProducts'])->middleware(['verify.shopify'])->name('product');

//collection route
//Route::get('/collections',[CollectionsController::class,'collections']);

//shop route
//Route::get('/shop',[ShopController::class,'shopDetails']);
