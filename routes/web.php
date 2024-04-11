<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\CheckRole;
use Illuminate\Routing\Router;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login')->name('auth.login');
Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::get('register', [AuthController::class, 'register'])->name('auth.register');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('admin', function(){
    return "admin";
})->name('admin')->middleware([CheckRole::class]);

Route::get('user', function(){
    return "user";
})->name('user')->middleware([CheckRole::class]);