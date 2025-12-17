# Lighthouse Application

A fresh [Lighthouse Framework](https://github.com/lighthouse-php) application.

## Installation

```bash
composer create-project lighthouse/skeleton my-app
cd my-app
```

## Development Server

Start the built-in PHP server:

```bash
composer start
```

Then visit [http://localhost:8000](http://localhost:8000)

## Project Structure

```
my-app/
├── config/
│   └── app.php          # Application configuration
├── public/
│   ├── index.php        # Entry point
│   └── .htaccess        # Apache rewrite rules
├── routes/
│   └── web.php          # Route definitions
├── src/
│   └── Controllers/     # Your controllers
├── views/
│   ├── layouts/         # Layout templates
│   └── *.php            # View templates
├── tests/               # Test files
├── .env.example         # Environment template
└── composer.json
```

## Configuration

Copy `.env.example` to `.env` and adjust settings:

```bash
cp .env.example .env
```

Or configure directly in `config/app.php`.

## Creating Routes

Edit `routes/web.php`:

```php
// Closure route
$app->get('/hello', function () {
    return 'Hello, World!';
});

// Controller route
$app->get('/users', [UserController::class, 'index']);

// Route with parameter
$app->get('/users/{id}', [UserController::class, 'show']);

// Route group
$app->group('/api', function ($router) {
    $router->get('/users', [ApiUserController::class, 'index']);
});

// Named route
$app->get('/profile', [ProfileController::class, 'show'])->name('profile');
```

## Creating Controllers

Create a new controller in `src/Controllers/`:

```php
<?php

namespace App\Controllers;

use Lighthouse\Controller;
use Psr\Http\Message\ResponseInterface;

class UserController extends Controller
{
    public function index(): ResponseInterface
    {
        return $this->view('users.index', [
            'users' => $this->getUsers(),
        ]);
    }

    public function show(string $id): ResponseInterface
    {
        return $this->json([
            'id' => $id,
            'name' => 'John Doe',
        ]);
    }
}
```

## Creating Views

Create views in `views/`:

**views/users/index.php:**
```php
<?php $view->extends('layouts.main'); ?>

<?php $view->section('content'); ?>
<h1>Users</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?= $view->e($user['name']) ?></li>
    <?php endforeach; ?>
</ul>
<?php $view->endSection(); ?>
```

## Testing

```bash
composer test
```

## Deployment

For production:

1. Set `APP_DEBUG=false` in your environment
2. Point your web server to the `public/` directory
3. Ensure all requests are routed to `public/index.php`

### Nginx Configuration

```nginx
server {
    listen 80;
    server_name example.com;
    root /var/www/my-app/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

## Learn More

- [Lighthouse Framework](https://github.com/lighthouse-php/framework)
- [Documentation](https://github.com/lighthouse-php/framework#readme)

## License

MIT
