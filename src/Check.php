<?php

namespace Simovative\Learn;

class Check implements CheckInterface
{

    private function exploder (string $input, string $operator) {
        return explode($operator, $input);
    }


    private function hasOneOperator (string $input): string {
        $operatorArray = ['+', '-', '*', '/'];
        foreach ($operatorArray as $operator) {
            if (str_contains($input, $operator)) {
                return $operator;
            }
        }
        return false;
    }

    public function check ($result) : void
    {
        if (!$this->hasOneOperator($result)) {
            $error = 'Passt nicht';
            require 'main.php';
        } else {
            $operator = $this->hasOneOperator($result);
            $stringArray = $this->exploder($result, $operator);
            $calc = new Calculator((float)$stringArray[0], (float)$stringArray[1], $operator);
            $calc->calculate();
            $result = $calc->getResult();
            require 'main.php';

        }
    }
}

//Klasse auslagern