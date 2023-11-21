<?php

$username = $_POST['new_username'];
$password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);



$pdo = new PDO('mysql:host=mysql_db;dbname=kaboom', 'root', 'root');

$sql = '
        INSERT INTO 
            user (username, password) 
        VALUES 
            (:username, :password)';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username' ,$username);
$stmt->bindParam(':password', $password);
$stmt->execute();

$userid = $pdo->lastInsertId();
var_dump($userid);