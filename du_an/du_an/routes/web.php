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
// Route::resource('shop2', ShopController::class);
Route::get('home', [ShopController::class, 'home'])->name('home.index');
Route::get('category_detail/{id}', [ShopController::class, 'category_detail'])->name('category_detail');

//giỏ hàng
Route::get('cart', [ShopController::class, 'cart'])->name('show.cart');
Route::get('add-to-cart/{id}', [ShopController::class, 'addToCart'])->name('add-to-cart'); //them
Route::patch('update-cart', [ShopController::class, 'update1'])->name('update-cart'); //cập nhật giỏ hàng
Route::delete('remove-from-cart', [ShopController::class, 'remove'])->name('remove-from-cart'); //xóa
Route::get('/showsanpham/{id}', [ShopController::class, 'show'])->name('showsanpham');

Route::get('users', function () {
    return view('auth.login');
});
Route::get('login', [UserController::class, 'viewLogin'])->name('login');
Route::post('register', [UserController::class, 'register'])->name('register');
Route::post('checklogin', [UserController::class, 'login'])->name('checklogin');
Route::get('dang_ki', [UserController::class, 'viewRegister'])->name('dang_ki');
// đăng nhập Admin
Route::prefix('/')->middleware(['auth','revalidate'])->group(function () {
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    Route::resource('categories', CategoryController::class);
// thùng rác
Route::get('/trash-cate', [CategoryController::class, 'trash'])->name('categories.trash');

// khôi phục
Route::get('/restore-cate/{id}', [CategoryController::class, 'restore'])->name('cate.restore');
// xóa vĩnh viễn
Route::get('/force_delete/{id}', [CategoryController::class, 'force_delete'])->name('categories.force-delete');

Route::resource('products', ProductController::class);
// thùng rác
Route::get('/trash', [ProductController::class, 'trash'])->name('products.trash');
// khôi phục
Route::get('/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
// xóa vĩnh viễn
Route::get('/deleteforever/{id}', [ProductController::class, 'deleteforever'])->name('products.deleteforever');
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
Route::resource('groups', GroupController::class);
});
//shop
Route::prefix('/shop')->group(function () {
Route::get('/register', [ShopController::class, 'register'])->name('shop.register');
Route::post('/checkregister', [ShopController::class, 'checkregister'])->name('shop.checkregister');
Route::get('login', [ShopController::class, 'login'])->name('shop.login');
Route::post('/checklogin', [ShopController::class, 'checklogin'])->name('shop.checklogin');
Route::get('logout', [ShopController::class, 'logout'])->name('logout');
Route::get('dashboard', [ShopController::class, 'index'])->name('shop.index');
});
// giỏ hàng
// Route::prefix('/shop11')->group(function(){
//     Route::get('/', [ShopController::class, 'index'])->name('shop.home');
//     Route::get('/cart', [ShopController::class, 'cart'])->name('shop.cart');
//     Route::get('/store/{id}',[ShopController::class,'store'])->name('shop.store');
//     Route::patch('/update-cart', [ShopController::class, 'update'])->name('update.cart');
//     Route::get('/removecart/{id}', [ShopController::class, 'remove'])->name('remove.cart');
//     Route::get('/checkOuts', [ShopController::class, 'checkOuts'])->name('checkOuts');
//     Route::post('/order', [ShopController::class, 'order'])->name('order');
//     Route::get('/history', [ShopController::class, 'history'])->name('history');
//     Route::get('customer/GetDistricts', [ShopController::class, 'GetDistricts'])->name('customer.GetDistricts');
//     Route::get('customer/getWards', [ShopController::class, 'getWards'])->name('customer.getWards');
//     Route::put('/update', [CustomerController::class, 'update'])->name('customers.update');

//     Route::get('product/{id}', [ShopController::class, 'view'])->name('shop.product');

//     Route::get('logout', [CustomerController::class, 'logout'])->name('shop.logout');
//     Route::post('/customer/register', [CustomerController::class, 'register'])->name('customer.register');
//     Route::post('/customer/login', [CustomerController::class, 'login'])->name('customer.login');
//     Route::post('/customer/changepassmail', [CustomerController::class, 'changepassmail'])->name('customer.changepassmail');
//     Route::post('/user/changepassmail', [UserController::class, 'changepassmail'])->name('users.changepassmail');

// });
