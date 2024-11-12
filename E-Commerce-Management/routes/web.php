<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->middleware('api')->group(function () {
    // Routte  Categorie API:
    Route::get('categories', [CategoryController::class, 'index']);
    Route::post('categories', [CategoryController::class, 'store']);
    Route::put('categories/{id}', [CategoryController::class, 'update']);
    Route::get('categories/{id}', [CategoryController::class, 'show']);
    Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
    // Routte  Product API:
    Route::get('products', [ProductController::class, 'index']);
    Route::post('products', [ProductController::class, 'store']);
    Route::put('products/{id}', [ProductController::class, 'update']);
    Route::get('products/{id}', [ProductController::class, 'show']);
    Route::delete('products/{id}', [ProductController::class, 'destroy']);
});