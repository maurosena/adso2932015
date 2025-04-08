<?php

use App\Http\Controllers\MovementController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('home');
})->name('home');

Route::resource('products', ProductController::class);
Route::get('products/pdf/{id}', [ProductController::class, 'pdf'])->name('pdf');
Route::get('products/search', [ProductController::class, 'search'])->name('products.search');
Route::resource('movements', MovementController::class);
