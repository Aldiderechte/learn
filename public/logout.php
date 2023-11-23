<?php
session_start();
    $_SESSION['userId'] = false;
    header('Location: index.php');