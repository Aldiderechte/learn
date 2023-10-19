<?php



class Calculator extends Math implements CalcInterface
{
    private const MATH_PLUS = '+';
    private const MATH_MINUS = '-';
    private const MATH_MULTI = '*';
    private const MATH_DIVIDE = '/';

    private OperationInterface $plus;
    private OperationInterface $minus;
    private OperationInterface $multi;
    private OperationInterface $division;

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


    public function calculate () : float {
        return $this->num1 . $this->operator . $this->num2;
    }
}
