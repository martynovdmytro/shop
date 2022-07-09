<?php

use App\Http\Controllers\AuthorisationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Models\Category;
use App\Models\Product;
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

Route::get('/', [CategoryController::class, 'index']);

Route::get('category/{category:slug}', [ProductController::class, 'index']);
Route::get('product/{product:slug}', [ProductController::class, 'show']);

Route::get('register', [RegistrationController::class, 'index']);
Route::post('create', [RegistrationController::class, 'create']);

Route::get('login', [AuthorisationController::class, 'index']);
Route::post('auth', [AuthorisationController::class, 'auth']);




