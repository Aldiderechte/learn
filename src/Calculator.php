<?php



class Calculator extends Math implements CalcInterface
{
    private const MATH_PLUS = '+';
    private const MATH_MINUS = '-';
    private const MATH_MULTI = '*';
    private const MATH_DIVIDE = '/';


    public function __construct(
        private float $num1,
        private float $num2,
        private string $operator
    ) {
    }


    public function calculate () : float
    {
        return match ($this->operator) {
            self::MATH_PLUS => $this->num1 + $this->num2,
            self::MATH_MINUS => $this->num1 - $this->num2,
            self::MATH_MULTI => $this->num1 * $this->num2,
            self::MATH_DIVIDE => $this->num1 / $this->num2,
        };
    }
}
