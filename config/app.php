<?php

declare(strict_types=1);

/**
 * Application Configuration
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    */
    'name' => $_ENV['APP_NAME'] ?? 'Lighthouse',

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    | When debug is true, detailed error pages with stack traces are shown.
    | In production, set this to false for user-friendly error pages.
    */
    'debug' => (bool) ($_ENV['APP_DEBUG'] ?? true),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    */
    'url' => $_ENV['APP_URL'] ?? 'http://localhost:8000',
];
