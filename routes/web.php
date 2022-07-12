<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AuthorisationController;
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

// Registration
Route::get('register', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('create', [RegistrationController::class, 'store'])->middleware('guest');

// Authorisation
Route::controller(AuthorisationController::class)->group(function(){
    Route::get('login', 'index')->middleware('guest');
    Route::post('auth', 'auth')->middleware('guest');
    Route::get('logout', 'destroy')->middleware('auth');
});

// Admin side
Route::get('admin', [AdministratorController::class, 'index']);
Route::get('admin/create', [AdministratorController::class, 'create']);
Route::get('admin/edit', [AdministratorController::class, 'edit']);
Route::get('admin/delete', [AdministratorController::class, 'delete']);


Route::post('product/store', [ProductController::class, 'store']);
Route::post('product/edit', [ProductController::class, 'edit']);







