<?php $view->extends('layouts.main'); ?>

<?php $view->section('title'); ?>
<?= $view->e($title) ?>
<?php $view->endSection(); ?>

<?php $view->section('content'); ?>
<div class="card">
    <h1>🚀 <?= $view->e($message) ?></h1>
    
    <p>Congratulations! You've successfully installed the Lighthouse Framework.</p>
    
    <h2>Getting Started</h2>
    
    <p>Here are some things you can do:</p>
    
    <ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
        <li>Edit routes in <code>routes/web.php</code></li>
        <li>Create controllers in <code>src/Controllers/</code></li>
        <li>Add views in <code>views/</code></li>
        <li>Configure your app in <code>config/app.php</code></li>
    </ul>
    
    <h2>Example Code</h2>
    
    <p>Here's how this page is rendered:</p>
    
    <pre><code>// routes/web.php
$app->get('/', [HomeController::class, 'index']);

// src/Controllers/HomeController.php
public function index(): ResponseInterface
{
    return $this->view('home', [
        'title' => 'Welcome',
        'message' => 'Your Lighthouse application is ready!',
    ]);
}</code></pre>
    
    <h2>Learn More</h2>
    
    <p>
        Visit the <a href="https://github.com/lighthouse-php">Lighthouse GitHub</a> 
        for documentation and examples.
    </p>
</div>
<?php $view->endSection(); ?>
