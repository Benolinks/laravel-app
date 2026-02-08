<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ===================ADMIN CONTROLLER =============================

Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/edit',[AdminController::class, 'edit'])->name('admin.edit');

Route::get('/admin/order',[AdminController::class, 'order'])->name('admin.order');

Route::get('/admin/payment',[AdminController::class, 'payment'])->name('admin.payment');

Route::get('/admin/product_uploads',[AdminController::class, 'product_uploads'])->name('admin.product_uploads');


Route::get('/user/index',[UserController::class, 'index'])->name('user.index');

Route::get('/user/cart',[UserController::class, 'cart'])->name('user.cart');


Route::get('/user/checkout', [UserController::class, 'checkout'])->name('user.checkout');


Route::get('/user/contact', [UserController::class, 'contact'])->name('user.contact');


Route::get('/user/trackorder', [UserController::class, 'trackorder'])->name('user.trackorder');

Route::get('/user/payment_failed', [UserController::class, 'payment_failed'])->name('user.payment_failed');

Route::get('/user/payment_success', [UserController::class, 'payment_success'])->name('user.payment_success');


require __DIR__.'/auth.php';
