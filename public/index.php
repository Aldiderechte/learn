<?php
header("location: index.html" );
exit;
?>

//phpinfo();
$test2 = 3 / 3;
$test = 'Hallo Welt:' . $test2;
echo $test;
$test5 = null; //Integer(Int)
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

