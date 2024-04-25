<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\Router;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\CustomerController;
use App\Http\Controllers\user\CartController;

//home index
Route::get('', [HomeController::class, 'index'])->name('home.index')->middleware('logout');
// Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

//detail Product
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('home.detail');

//authentication
Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login')->middleware('login');
Route::get('register', [AuthController::class, 'register'])->name('auth.register');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('register', [AuthController::class, 'store'])->name('auth.register');
//end

//Admin
Route::middleware('auth')->group(function(){
    Route::get('user/index', [CustomerController::class, 'index'])->name('user.index');

    Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard.index')->middleware('checkRole');
    Route::get('admin/user/index', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('admin/user/add', [UserController::class, 'add'])->name('admin.user.add');
    Route::post('admin/user/add', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('admin/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('admin/user/edit/{id}', [UserController::class, 'update'])->name('admin.user.update');

    Route::get('admin/user/action', [UserController::class, 'action'])->name('admin.user.action');
    Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add');

    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
}); 