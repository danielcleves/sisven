<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\CustomerController;
use App\Http\Controllers\api\PayModeController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/customers', [CustomerController::class, 'index'])->name('index');
Route::post('/customers', [CustomerController::class, 'store'])->name('store');
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('show');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('destroy');

Route::get('/payModes', [PayModeController::class, 'index'])->name('index');
Route::post('/payModes', [PayModeController::class, 'store'])->name('store');
Route::get('/payModes/{id}', [PayModeController::class, 'show'])->name('show');
Route::put('/payModes/{id}', [PayModeController::class, 'update'])->name('update');
Route::delete('/payModes/{id}', [PayModeController::class, 'destroy'])->name('destroy');

Route::get('/categories', [CategoryController::class, 'index'])->name('index');
Route::post('/categories', [CategoryController::class, 'store'])->name('store');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('show');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('destroy');


Route::get('/products', [ProductController::class, 'index'])->name('index');
Route::post('/products', [ProductController::class, 'store'])->name('store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('show');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('destroy');
