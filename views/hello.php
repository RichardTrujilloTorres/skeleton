<?php $view->extends('layouts.main'); ?>

<?php $view->section('title'); ?>
Hello
<?php $view->endSection(); ?>

<?php $view->section('content'); ?>
<div class="card">
    <h1>Hello, <?= $view->e($name) ?>! 👋</h1>
    
    <p>This page demonstrates route parameters.</p>
    
    <pre><code>// routes/web.php
$app->get('/hello/{name}', function (string $name) use ($app) {
    return $app->view('hello', ['name' => $name]);
});</code></pre>
    
    <p>Try changing the URL:</p>
    
    <ul style="margin-left: 1.5rem;">
        <li><a href="/hello/World">/hello/World</a></li>
        <li><a href="/hello/Lighthouse">/hello/Lighthouse</a></li>
        <li><a href="/hello/Developer">/hello/Developer</a></li>
    </ul>
</div>
<?php $view->endSection(); ?>
