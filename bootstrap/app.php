<?php

use App\Http\Middleware\Localization;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php', // Uncomment this
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web([Localization::class]);

        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
            'mustBeLoggedIn' => \App\Http\Middleware\MustBeLoggedIn::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->withProviders([
    \TwigBridge\ServiceProvider::class,
])
    ->create();



//return Application::configure(basePath: dirname(__DIR__))
//    ->withRouting(
//        web: __DIR__.'/../routes/web.php',
//        commands: __DIR__.'/../routes/console.php',
//       channels: __DIR__.'/../routes/channels.php',
//        health: '/up',
//    )
//    ->withMiddleware(function (Middleware $middleware): void {
//        $middleware->web([
//            Localization::class,
//        ]);
////        $middleware->alias([
////            'role' => \App\Http\Middleware\RoleMiddleware::class,
////        ]);
//
//    })
//    ->withExceptions(function (Exceptions $exceptions): void {
//        //
//    })->create();





