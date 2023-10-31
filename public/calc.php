<?php

namespace Monolog;

require '../vendor/autoload.php';

#$log = new Package\Calc\('name');
#$log->pushHandler(new Package\Calc('app.log', Package\Calc::WARNING));
#$log->warning('Foo');

/*spl_autoload_register(function ($className)
{
    $className = str_replace('\\', '/', $className);
    $className = str_replace('Simovative/learn/', '', $className);
    include '../src/' . $className . '.php';
});*/


function hasOneOperator (string $input) : string {
    $operatorArray = ['+', '-', '*', '/'];
    foreach ($operatorArray as $operator) {
        if (str_contains($input, $operator)) {
            return $operator;
        }
    }
    return false;
}

function hasBracket (string $input) : bool
{
    $brackets = ['(', ')', '[', ']', '{', '}'];
    foreach ($brackets as $bracket) {
        if (str_contains($input, $bracket)) {
            return True;
        }
    }
    return False;
}

function exploder (string $input) {
    $pattern = '/([+\-\/\*])/';
    return preg_split($pattern, $input, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
};

$result = $_REQUEST['input'] ?? '';

if (!hasOneOperator($result)) {
    $error = 'Fehler bei Eingabe';
    require 'main.php';

} /*elseif (!hasBracket($result)) {
    $error = 'Fehler bei Eingabe';
    require 'main.php';
}*/
else {
    $stringArray = exploder($result);
    $calc = new Calculator($stringArray);
    $result = $calc->getResult();
    require 'main.php';
}






//Weitere Funktion die Operator aus Input gibt. Contains verwenden. Funktion explode verwenden. Zahlen casten & Ergebnis in Result.