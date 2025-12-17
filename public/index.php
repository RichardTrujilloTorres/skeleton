<?php

declare(strict_types=1);

/**
 * Lighthouse Application Entry Point
 */

require __DIR__ . '/../vendor/autoload.php';

use Lighthouse\Application;
use App\Controllers\HomeController;

// Load configuration
$config = require __DIR__ . '/../config/app.php';

// Create application
$app = new Application(
    basePath: dirname(__DIR__),
    debug: $config['debug']
);

// Configure views
$app->useViews(__DIR__ . '/../views');

// Share global view data
$app->getView()->share('appName', $config['name']);

// Register routes
require __DIR__ . '/../routes/web.php';

// Run the application
$app->run();
