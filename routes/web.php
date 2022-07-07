<?php

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

Route::get('/', function () {
    return view('categories', [
        'categories' => Category::all()
    ]);
});

Route::get('/products', function () {
    return view('products', [
        'products' => Product::all()
    ]);
});

Route::get('/products/product', function () {
    return view('product');
});



