<?php
$username = $_POST['username'];
$password = $_POST['password'];
var_dump($password);

$pdo = new PDO('mysql:host=mysql_db;dbname=kaboom', 'root', 'root');

$sql = 'SELECT
        username, password
        FROM `user`';

$stmt = $pdo->query($sql);
$users = $stmt->fetchAll();
$stmt->execute();

foreach ($users as $dbuser) {
    if ($dbuser['username'] === $username) {
        if (password_verify($password, $dbuser['password'])) {
            echo 'yalla';
            break;
        }
    }
}

#var_dump($username, $password);