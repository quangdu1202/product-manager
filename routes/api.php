<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Admin
Route::resource('admins', 'App\Http\Controllers\Admin\AdminController', ['only' => ['index', 'show']]);

//Customer
Route::resource('customers', 'App\Http\Controllers\Customer\CustomerController', ['only' => ['index', 'show']]);

//Product
Route::resource('products', 'App\Http\Controllers\Product\ProductController', ['only' => ['index', 'show']]);

//User
Route::resource('users', 'App\Http\Controllers\User\UserController', ['except' => ['create', 'edit']]);
