<?php

namespace Simovative\Kaboom;

class Check implements CheckInterface
{

    public function hasOneOperator (string $input): string {
        $operatorArray = ['+', '-', '*', '/'];
        foreach ($operatorArray as $operator) {
            if (str_contains($input, $operator)) {
                return $operator;
            }
        }
        return false;
    }
}

//Klasse auslagern