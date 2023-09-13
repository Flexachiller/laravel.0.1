<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('account', [AccountController::class, 'index']);

Route::get('account/job', [AcoountController::class, 'job']);

Route::get('account/hobbies', [AcoountController::class, 'hobbies']);

Route::get('account/settings', [AccountController::class, 'settings']);

Route::get('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'login']);

Route::get('products', [ProductsController::class, 'index']);

Route::get('products/id', [ProductsController::class, 'currentProduct']);

Route::get('posts', [PostController::class, 'index']);