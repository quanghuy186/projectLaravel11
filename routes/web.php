<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Controllers\PostController;
use Illuminate\Routing\Router;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLogin'])->name('auth.login')->middleware('login');
Route::get('register', [AuthController::class, 'register'])->name('auth.register');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard.index')->middleware(['auth', 'checkRole']);
Route::get('user', [DashBoardController::class, 'add'])->name('user');