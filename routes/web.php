<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\OrdersController;

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

Route::get('/', [LandingPageController::class, 'home']);

// AUTH

Auth::routes();

// END AUTH

// ADMIN

Route::get('/adminpage', [ProductController::class, 'index']);
Route::get('/addproduct', [ProductController::class, 'pageproduct']);
Route::get('/create', [ProductController::class, 'create']);
Route::post('/postcreate', [ProductController::class, 'store']);
Route::delete('/delete/{products}', [ProductController::class, 'destroy']);
Route::get('/edit/{products}', [ProductController::class, 'edit']);
Route::patch('/postedit/{products}', [ProductController::class, 'update']);
Route::get('/orders', [OrdersController::class, 'orders']);

// END ADMIN

// LANDING PAGE USER

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/details/{id}', [HomeController::class, 'details']);
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/store', [CartController::class, 'store']);
Route::patch('/cart/{id}', [CartController::class, 'update']);

// END LANDING PAGE USER

// CHECKOUT PAGE 

Route::post('/checkout', [CheckOutController::class, 'store']);

// END CHECKOUT PAGE



