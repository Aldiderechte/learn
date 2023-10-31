<?php

namespace Monolog;

require '../vendor/autoload.php';

#$log = new Package\Calc\('name');
#$log->pushHandler(new Package\Calc('app.log', Package\Calc::WARNING));
#$log->warning('Foo');

$result = $_REQUEST['input'] ?? '';
$check = new Check();
$check->check($result);

