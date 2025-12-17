<?php $view->extends('layouts.main'); ?>

<?php $view->section('title'); ?>
<?= $view->e($title) ?>
<?php $view->endSection(); ?>

<?php $view->section('content'); ?>
<div class="card">
    <h1>About Lighthouse</h1>
    
    <p>
        Lighthouse is an <strong>educational PHP framework</strong> designed to teach 
        how modern frameworks work internally.
    </p>
    
    <h2>Why Lighthouse?</h2>
    
    <p>
        Most PHP developers use Laravel or Symfony without understanding how they work.
        Lighthouse exists to make those frameworks <em>understandable</em>.
    </p>
    
    <h2>Architecture</h2>
    
    <p>Lighthouse is built from these independent packages:</p>
    
    <ul style="margin-left: 1.5rem; margin-bottom: 1rem;">
        <li><code>lighthouse/http</code> — PSR-7 HTTP messages</li>
        <li><code>lighthouse/container</code> — PSR-11 DI container</li>
        <li><code>lighthouse/middleware</code> — PSR-15 middleware</li>
        <li><code>lighthouse/router</code> — HTTP routing</li>
        <li><code>lighthouse/view</code> — Template engine</li>
        <li><code>lighthouse/error-handler</code> — Error handling</li>
        <li><code>lighthouse/framework</code> — Application kernel</li>
    </ul>
    
    <p>
        Each package can be used independently or as part of the full framework.
    </p>
</div>
<?php $view->endSection(); ?>
