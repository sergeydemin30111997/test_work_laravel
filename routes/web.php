<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main');

Auth::routes();
Route::prefix('profile')->group( function () {
    Route::get('product', [\App\Http\Controllers\User\ProductController::class, 'index'])->middleware('role:seller')->name('profile_product');
    Route::get('request', [\App\Http\Controllers\User\RequestController::class, 'index'])->middleware('role:buyer')->name('profile_request');
});

Route::get('appropriate_product/{id}', [\App\Http\Controllers\Request\AppropriateProductController::class, 'show'])->middleware('role:buyer')->name('appropriate_product');
Route::get('appropriate_request/{id}', [\App\Http\Controllers\Product\AppropriateRequestController::class, 'show'])->middleware('role:seller')->name('appropriate_request');
Route::resource('product', \App\Http\Controllers\Product\ProductController::class)->middleware('role:seller')->names('product');
Route::resource('request', \App\Http\Controllers\Request\RequestController::class)->middleware('role:buyer')->names('request');
