<?php

declare(strict_types=1);

namespace Yii\Extension\Action;

final class Stub
{
    private string $var;

    public function __construct(string $var)
    {
        $this->var = $var;
    }

    public function getVar(): string
    {
        return $this->var;
    }
}
