<?php
require('index.php');

$username = $_POST['username'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=mysql_db;dbname=kaboom', 'root', 'root');

$sql = '
    SELECT username, password FROM kaboom.user';

$stmt = $pdo->query($sql);
$result = $stmt->fetchAll();
$stmt->execute();


foreach ($result as $check){
    if ($username === $check[0]){
        if (password_verify($password, $check[1])) {
            header('location: main.php');
            break;
        }echo 'Passwort falsch';

        break;
    }echo 'User existiert nicht';
    break;
}


