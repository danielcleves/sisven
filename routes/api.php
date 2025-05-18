<?php

use App\Http\Controllers\api\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/customers', [CustomerController::class, 'index'])->name('index');
Route::post('/customers', [CustomerController::class, 'store'])->name('store');
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('show');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('destroy');
