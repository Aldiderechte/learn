<?php

use Simovative\Learn\Calculator;

spl_autoload_register(function ($className)
{
    $className = str_replace('\\', '/', $className);
    $className = str_replace('Simovative/Learn/', '', $className);
    include '../src/' . $className . '.php';
});


function hasOneOperator (string $input): string {
    $operatorArray = ['+', '-', '*', '/'];
    foreach ($operatorArray as $operator) {
        if (str_contains($input, $operator)) {
            return $operator;
        }
    }
    return false;
}


function exploder (string $input, string $operator) {
    return explode($operator, $input);
};

$result = $_REQUEST['input'] ?? '';

function check () {

}

if (!hasOneOperator($result)) {
    $error = 'Passt nicht';
    require 'main.php';
    exit();
} else {
    $operator = hasOneOperator($result);
    $stringArray = exploder($result, $operator);
    $calc = new Calculator((float)$stringArray[0], (float) $stringArray[1], $operator);
    $calc->calculate();
    $result = $calc->getResult();
    require 'main.php';



}

//composer einbinden, composer.json, docker exec, composer phar, ..., requiere installieren, PSR4 Autoload