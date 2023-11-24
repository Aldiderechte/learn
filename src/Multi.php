<?php

namespace Simovative\Kaboom;

class Multi implements OperationInterface
{
    public function calculate(float $num1, float $num2) : float
    {
        return $num1 * $num2;
    }
}