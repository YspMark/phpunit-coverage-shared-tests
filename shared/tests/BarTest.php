<?php

declare(strict_types=1);

namespace Shared\Tests;

use PHPUnit\Framework\TestCase;
use Shared\Bar;

/**
 * @covers Bar
 */
final class BarTest extends TestCase
{
    public function testFoo(): void
    {
        $this->assertSame('baz', (new Bar)->foo());
    }
}