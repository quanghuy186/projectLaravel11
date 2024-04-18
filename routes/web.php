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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('home.detail');

Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login')->middleware('login');
Route::get('register', [AuthController::class, 'register'])->name('auth.register');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::get('register', [AuthController::class, 'register'])->name('auth.register');
Route::post('register', [AuthController::class, 'store'])->name('auth.register');


Route::middleware('auth')->group(function(){
    Route::get('product', [ProductController::class, 'index'])->name('user');
    Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard.index')->middleware('checkRole');
    Route::get('admin/user/index', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('admin/user/add', [UserController::class, 'add'])->name('admin.user.add');
    Route::post('admin/user/add', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('admin/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('admin/user/edit/{id}', [UserController::class, 'update'])->name('admin.user.update');

    Route::get('admin/user/action', [UserController::class, 'action'])->name('admin.user.action');
}); 