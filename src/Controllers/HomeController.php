<?php

declare(strict_types=1);

namespace App\Controllers;

use Lighthouse\Controller;
use Psr\Http\Message\ResponseInterface;

class HomeController extends Controller
{
    public function index(): ResponseInterface
    {
        return $this->view('home', [
            'title' => 'Welcome',
            'message' => 'Your Lighthouse application is ready!',
        ]);
    }

    public function about(): ResponseInterface
    {
        return $this->view('about', [
            'title' => 'About',
        ]);
    }
}
