<?php

namespace Simovative\Learn;

interface OperationInterface
{
    public function calculate(float $num1, float $num2) : float;
}