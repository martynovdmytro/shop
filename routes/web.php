<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AuthorisationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
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

// Review
Route::controller(CatalogController::class)->group(function (){
    Route::get('/', 'category');
    Route::get('category/{category:slug}', 'categoryProducts');
    Route::get('product/{product:slug}', 'product');
    Route::get('search', 'search');
});

// Authorisation
Route::controller(AuthorisationController::class)->group(function(){
    Route::get('login', 'login')->middleware('guest');
    Route::post('auth', 'auth')->middleware('guest');
    Route::get('register', 'register')->middleware('guest');
    Route::post('create', 'store')->middleware('guest');
    Route::get('logout', 'destroy')->middleware('auth');
});

// Admin
Route::controller(AdministratorController::class)->group(function(){
    Route::get('admin', 'index')->middleware('can:admin');
    Route::get('admin/catalog', 'showCategory')->middleware('can:admin');
    Route::get('admin/{category:slug}', 'showProduct')->middleware('can:admin');
    Route::get('admin/product/create', 'create')->middleware('can:admin');
    Route::get('admin/edit/{product:slug}', 'edit')->middleware('can:admin');
});


// Product
Route::post('product/store', [ProductController::class, 'store'])->middleware('can:admin');
Route::post('/edit/{product:slug}', [ProductController::class, 'update'])->middleware('can:admin');
Route::get('/delete/{product:slug}', [ProductController::class, 'destroy'])->middleware('can:admin');

// Cart
Route::get('cart', [CartController::class, 'index']);
Route::post('cart/create', [CartController::class, 'create']);
Route::post('cart/store/{product:slug}', [CartController::class, 'store']);
//Route::get('cart/show', [CartController::class, 'show']);
//Route::get('cart/update', [CartController::class, 'update']);
Route::get('cart/delete/all', [CartController::class, 'destroy']);
Route::get('cart/delete/{product:id}', [CartController::class, 'destroy']);






