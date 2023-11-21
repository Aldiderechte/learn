<?php
//header("location: index.html" );
//exit;
//

//phpinfo();
$test2 = 3 / 3;
$test = 'Hallo Welt:' . $test2;
echo $test;
$test5 = 23; //Integer(Int)
$test6 = 346.5; //float
$test7 = true; //boolean(bool)
$test8 = 'Hallo Welt'; //string
$test9 = []; //array
$test10 = null; //nix

if ((!$test5 || $test6 > 1) && $test10 !== null) {
    echo 'Simovative';
} elseif ($test8 === 'Florian') {
    echo 'Google';
} else {
    echo 'Microsoft';
}
$array = [1,2,3,'4'];
var_dump($array);
echo $array[3];

$test11 =[
        5 => $test8,
        6 => 'Hallo Welt',
];
var_dump($test11);


foreach ($test11 as $key => $value) {
    continue;
    echo '<h1>' . $key . $value . '</h1>';
}

while ($test5 < 30) {
    $test5++;
    echo 'Done';
}

for ($i = 1; $i < 5; $i++) {
    echo 'Hello';
}

$i = 0;
do {
    echo $i;
} while ($i > 0);

$test8 = 'Welt';
match ($test8) {
    'Hallo Welt' => 'Welt',
    'Welt' => ':<',
    default => 'nix',
};