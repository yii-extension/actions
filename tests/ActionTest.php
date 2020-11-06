<?php

declare(strict_types=1);

namespace Yii\Extension\Action\Tests;

use PHPUnit\Framework\TestCase;
use Yii\Extension\Action\Stub;

final class StubTest extends TestCase
{
    public function testConstruct(): void
    {
        $stub = new Stub('testMe');

        $this->assertEquals('testMe', $stub->getVar());
    }
}
