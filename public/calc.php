<?php
spl_autoload_register(function ($class_name)
{
    include '../src/' . $class_name . '.php';
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

//$error = 'Fehler falsche Zahl';
if (!hasOneOperator($result)) {
    $error = 'Passt nicht';
    exit();
} else {
    $operator = hasOneOperator($result);
    $stringArray = exploder($result, $operator);
    $calc = new Calculator((float)$stringArray[0], (float) $stringArray[1], $operator);
    $calc->calculate();
    $result = $calc->getResult();
    require 'main.php';


}






//Weitere Funktion die Operator aus Input gibt. Contains verwenden. Funktion explode verwenden. Zahlen casten & Ergebnis in Result.