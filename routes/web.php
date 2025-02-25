<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// customer pages
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/become-seller', 'become_seller')->name('become-seller');
});


// shop routes

Route::middleware('auth')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/cart', 'cart')->name('cart');
    });
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'checkRole:super-admin|admin|staff|seller   '])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
