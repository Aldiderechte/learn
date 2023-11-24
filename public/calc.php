<?php

require '../vendor/autoload.php';

use Simovative\Kaboom\Calculator;
use Simovative\Kaboom\Check;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;


function exploder (string $input, string $operator) {
    return explode($operator, $input);
}

$result = $_REQUEST['input'] ?? '';
if ($result !== '') {
    $check = new Check();
    $operator = $check->hasOneOperator($result);
    if ($check->hasOneOperator($result)); {
        $stringArray = exploder($result, $operator);
        $calc = new Calculator((float)$stringArray[0], (float)$stringArray[1], $operator);
        $calc->calculate();
        $result = $calc->getResult();
    }
}


$result2 = $result ?? '';

$loader = new FilesystemLoader('../src/User/Templates');
$twig = new Environment($loader, [
    'cache' => false,
]);

echo $twig->render('main.twig', ['result' => $result2]);




