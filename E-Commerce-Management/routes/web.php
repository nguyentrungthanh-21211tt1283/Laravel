<?php
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PromotionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Sản phẩm
Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'addProduct']);
Route::get('/products/{id}', [ProductsController::class, 'detailProduct']);
Route::put('/products/{id}', [ProductsController::class, 'updateProduct']);
Route::delete('/products/{id}', [ProductsController::class, 'deleteProduct']);

//Đơn hàng
Route::get('/orders', [OrdersController::class, 'index']);
Route::post('/orders', [OrdersController::class, 'store']);
Route::get('/orders/{id}', [OrdersController::class, 'show']);
Route::put('/orders/{id}', [OrdersController::class, 'update']);
Route::delete('/orders/{id}', [OrdersController::class, 'destroy']);

//Khách hàng
Route::get('/customers', [CustomersController::class, 'index']);
Route::post('/customers', [CustomersController::class, 'store']);
Route::get('/customers/{id}', [CustomersController::class, 'show']);
Route::put('/customers/{id}', [CustomersController::class, 'update']);
Route::delete('/customers/{id}', [CustomersController::class, 'destroy']);

//Khuyến mãi
Route::get('/promotions', [PromotionsController::class, 'index']);
Route::post('/promotions', [PromotionsController::class, 'store']);
Route::get('/promotions/{id}', [PromotionsController::class, 'show']);
Route::put('/promotions/{id}', [PromotionsController::class, 'update']);
Route::delete('/promotions/{id}', [PromotionsController::class, 'destroy']);