<?php

declare(strict_types=1);

namespace Yii\Extension\Action\Tests;

final class ActionTest extends \PHPUnit\Framework\TestCase
{
    public function test(): void
    {
        $this->assertTrue(true);
    }
}

class testInterface
{
}

class A
{
    public function __construct(testInterface $test)
    {
    }
}
