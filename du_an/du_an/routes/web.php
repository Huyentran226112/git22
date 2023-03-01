<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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
Route::resource('orders', OrderController::class);
Route::resource('groups', GroupController::class);

// Route::resource('shop2', ShopController::class);
Route::get('shop1',[ShopController::class,'index'])->name('shop.index');
Route::get('home',[ShopController::class,'home'])->name('home.index');

//giỏ hàng
Route::get('cart',[ShopController::class, 'cart'])->name('show.cart');
Route::get('add-to-cart/{id}', [ShopController::class, 'addToCart'])->name('add-to-cart');//them
Route::patch('update-cart', [ShopController::class, 'update1'])->name('update-cart');//cập nhật giỏ hàng
Route::delete('remove-from-cart', [ShopController::class, 'remove'])->name('remove-from-cart');//xóa

Route::get('users',function(){
    return view('auth.login');
  });
Route::get('login', [UserController::class, 'viewLogin'])->name('login');
Route::post('checklogin', [UserController::class, 'login'])->name('checklogin');
Route::get('dang_ki', [UserController::class, 'viewRegister'])->name('dang_ki');
Route::post('register', [UserController::class, 'register'])->name('register');
