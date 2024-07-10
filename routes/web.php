<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Welcome::class);
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class,'register'])->name('auth.register');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('auth.login');

Route::middleware(['auth'])->group(function () {
    Route::get('/merchant/dashboard', \App\Livewire\Merchant\Dashboard::class)->name('merchant.dashboard');
    Route::get('/merchant/product', \App\Livewire\Merchant\Product\ListProduct::class)->name('product.list');
    Route::get('/merchant/product/add', \App\Livewire\Merchant\Product\CreateProduct::class)->name('product.create');
    Route::get('/merchant/user/profile/edit/{user:id}', \App\Livewire\Merchant\User\EditProfile::class)->name('edit.profile');
    Route::get('/merchant/user/profile/{user:id}', \App\Livewire\Merchant\User\Profile::class)->name('profile');
    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
});