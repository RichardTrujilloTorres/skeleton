<?php

declare(strict_types=1);

/**
 * Web Routes
 *
 * Register your application routes here.
 */

use App\Controllers\HomeController;

// Home page
$app->get('/', [HomeController::class, 'index'])->name('home');

// Example routes
$app->get('/about', [HomeController::class, 'about'])->name('about');

// Example route with parameter
$app->get('/hello/{name}', function (string $name) use ($app) {
    return $app->view('hello', ['name' => $name]);
})->name('hello');

// Example JSON API route
$app->get('/api/status', function () {
    return [
        'status' => 'ok',
        'timestamp' => date('c'),
    ];
});
