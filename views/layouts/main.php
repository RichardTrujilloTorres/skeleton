<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $view->yield('title', 'Lighthouse') ?> - <?= $view->e($appName) ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        header {
            background: #1a1a2e;
            color: white;
            padding: 1rem 0;
        }
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            font-size: 1.5rem;
        }
        header nav a {
            color: white;
            text-decoration: none;
            margin-left: 1.5rem;
            opacity: 0.8;
        }
        header nav a:hover {
            opacity: 1;
        }
        main {
            padding: 3rem 0;
        }
        footer {
            text-align: center;
            padding: 2rem;
            color: #666;
            font-size: 0.9rem;
        }
        a {
            color: #e94560;
        }
        .card {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1, h2 {
            margin-bottom: 1rem;
        }
        p {
            margin-bottom: 1rem;
        }
        code {
            background: #eee;
            padding: 0.2rem 0.4rem;
            border-radius: 4px;
            font-size: 0.9em;
        }
        pre {
            background: #1a1a2e;
            color: #eee;
            padding: 1rem;
            border-radius: 8px;
            overflow-x: auto;
            margin: 1rem 0;
        }
        pre code {
            background: none;
            padding: 0;
        }
    </style>
    <?= $view->yield('head') ?>
</head>
<body>
    <header>
        <div class="container">
            <h1>🏠 <?= $view->e($appName) ?></h1>
            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/hello/World">Hello</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <?= $view->yield('content') ?>
        </div>
    </main>

    <footer>
        <p>Built with <a href="https://github.com/lighthouse-php">Lighthouse Framework</a></p>
    </footer>

    <?= $view->yield('scripts') ?>
</body>
</html>
