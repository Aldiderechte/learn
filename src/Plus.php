<?php

namespace Simovative\Kaboom;

class Plus implements OperationInterface
{
    public function calculate(float $num1, float $num2) : float
    {
        return $num1 + $num2;
    }
}