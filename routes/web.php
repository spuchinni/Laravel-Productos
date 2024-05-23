<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

 
// Auth::routes();


// Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::resource('/productos', ProductoController::class);
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});