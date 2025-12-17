<?php

declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    #[Test]
    public function application_is_configured(): void
    {
        $config = require __DIR__ . '/../config/app.php';

        $this->assertArrayHasKey('name', $config);
        $this->assertArrayHasKey('debug', $config);
    }
}
