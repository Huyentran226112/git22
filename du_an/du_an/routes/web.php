<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

// Route::get('hienthi', function () {
//     return view('admin.layouts.master');
// });
// Route::get('admin/index', function () {
//     return view('admin.index');
// });
// Route::get('admin1', function () {
//     return view('admin.photos.index');
// });
// Route::get('/',[PhotoController::class,'index']);
// Route::get('hienthi', function () {
//     return view('shop.layouts.master');
// });
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('customers', CustomerController::class);
// Route::resource('shop2', ShopController::class);
Route::get('shop1',[ShopController::class,'index'])->name('shop.index');
Route::get('home',[ShopController::class,'home'])->name('home.index');


