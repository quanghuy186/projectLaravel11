<?php

use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\CheckRole;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Middleware\Logout;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'checkRole' => CheckRole::class,
            'auth' => AuthenticateMiddleware::class,
            'login' => LoginMiddleware::class,
            'logout' => Logout::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();