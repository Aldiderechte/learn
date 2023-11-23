<?php

$username = $_POST['username'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=mysql_db;dbname=kaboom', 'root', 'root');

$sql = '
        SELECT 
            username, 
            password,
            id
        FROM 
            kaboom.user';

$stmt = $pdo->query($sql);
$result = $stmt->fetchAll();
$stmt->execute();
$check = $stmt->fetch(PDO::FETCH_ASSOC);


foreach ($result as $check){
    if ($username === $check[0]){
        if (password_verify($password, $check[1])) {
            $_SESSION['userId'] = $check['id'];
            header('Location: dashboard.php');
            break;
        }


    }
}


