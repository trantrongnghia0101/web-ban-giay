<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\GiohangController;
use App\Http\Controllers\DangkyController;
use App\Http\Controllers\DangnhapController;
use App\Http\Controllers\ChitietController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DangxuatController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::post('/add-to-cart/{product_id}', [GiohangController::class, 'addToCart'])->name('addToCart');
Route::get('/remove-from-cart/{id}', [GiohangController::class, 'removeFromCart'])->name('removeFromCart');
Route::get('/clear-cart', [GiohangController::class, 'clearCart'])->name('clearCart');
Route::post('/update-quantity/{id}', [GiohangController::class, 'updateQuantity'])->name('updateQuantity');

Route::get('/best-selling', [ProductController::class, 'bestSelling'])->name('bestSelling');
Route::get('/best-view', [ProductController::class, 'bestView'])->name('bestView');
Route::get('/tintuc', [NewController::class, 'tintuc'])->name('tintuc');
Route::get('/checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('editUser');
Route::put('/update-user/{id}', [UserController::class, 'update'])->name('updateUser');

Route::get('/giohang', [GiohangController::class, 'giohang'])->name('giohang');
Route::get('/dangky', [DangkyController::class, 'dangky'])->name('dangky');
Route::get('/dangnhap', [DangnhapController::class, 'dangnhap'])->name('dangnhap');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/chitiet/{id}', [ChitietController::class, 'chitiet'])->name('chitiet');
Route::get('/shop/{category_id}', [ProductController::class, 'shop'])->name('productByCategory');
Route::get('/catagory', [CatagoryController::class, 'catagory'])->name('catagory');
Route::get('/search', [ProductController::class, 'search'])->name('shop.search');
Route::post('/register', [DangkyController::class, 'register'])->name('register');
Route::post('/login', [DangnhapController::class, 'login'])->name('login');
Route::get('/dangxuat', [DangxuatController::class, 'dangxuat'])->name('dangxuat');
Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/productlist', [AdminController::class, 'productlist'])->name('productlist');
Route::post('/productadd', [AdminController::class, 'productadd'])->name('productadd');
Route::get('/productdelete/{id}', [AdminController::class, 'productdelete'])->name('productdelete');
Route::get('/productupdateform/{id}', [AdminController::class, 'productupdateform'])->name('productupdateform');
Route::post('/productupdate', [AdminController::class, 'productupdate'])->name('productupdate');

Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
Route::post('/add-category', [AdminController::class, 'addCategory'])->name('addCategory');
Route::get('/edit-category/{id}', [AdminController::class, 'editCategory'])->name('editCategory');
Route::put('/update-category/{id}', [AdminController::class, 'updateCategory'])->name('updateCategory');
Route::get('/delete-category/{id}', [AdminController::class, 'deleteCategory'])->name('deleteCategory');
Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::get('/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
