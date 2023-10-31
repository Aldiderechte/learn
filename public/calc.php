<?php

use Simovative\Learn\Check;

spl_autoload_register(function ($className)
{
    $className = str_replace('\\', '/', $className);
    $className = str_replace('Simovative/Learn/', '', $className);
    include '../src/' . $className . '.php';
});

$result = $_REQUEST['input'] ?? '';
$check = new Check();
$check->check($result);

