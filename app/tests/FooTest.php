<?php

declare(strict_types=1);

namespace App\Tests;

use App\Foo;
use PHPUnit\Framework\TestCase;

final class FooTest extends TestCase
{
    public function testBar(): void
    {
        $this->assertSame('baz', (new Foo)->bar());
    }
}