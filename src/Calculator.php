<?php

namespace Monolog;

class Calculator implements CalcInterface
{
    private const MATH_PLUS = '+';
    private const MATH_MINUS = '-';
    private const MATH_MULTI = '*';
    private const MATH_DIVIDE = '/';

    private OperationInterface $plus;
    private OperationInterface $minus;
    private OperationInterface $multi;
    private OperationInterface $division;
    private float $result;

    public function __construct(
        private float $num1,
        private float $num2,
        private string $operator
    ) {
        $this->plus = new Plus();
        $this->minus = new Minus();
        $this->multi = new Multi();
        $this->division = new Division();
    }

    public function getResult() : float {
        return round($this->result, 2);
    }

    public function calculate () : void {
        $this->result = match ($this->operator) {
            self::MATH_PLUS => $this->plus->calculate($this->num1, $this->num2),
            self::MATH_MINUS => $this->minus->calculate($this->num1, $this->num2),
            self::MATH_MULTI => $this->multi->calculate($this->num1, $this->num2),
            self::MATH_DIVIDE => $this->division->calculate($this->num1, $this->num2),
        };
    }
}
