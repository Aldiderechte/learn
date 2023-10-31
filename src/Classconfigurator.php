<?php

namespace Simovative\Learn\Calculator;

class Operator {
    function hasOneOperator (string $input): string {
        $operatorArray = ['+', '-', '*', '/'];
        foreach ($operatorArray as $operator) {
            if (str_contains($input, $operator)) {
                return $operator;
            }
        }
        return false;
    }
}



