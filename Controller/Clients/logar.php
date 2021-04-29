<?php

include("../../Classes/Connection.php");
$conn = new \Connection();

$conn->login = $_POST['login'];
$conn->password = $_POST['password'];

$login = str_replace(".", "", $_POST['login']);
$login = str_replace("-", "", $login);

$logar = $conn->login($login, $_POST['password']);

session_start();
$_SESSION['login'] = $login;

foreach ($logar as $log) {
    echo $log;
    if ($log >= 1) {
        // echo "achei";
        header('Location: ../../menu.php');
    } else {
        // echo "nao achei ninguem";
        // exit();
        header('Location: ../../index.php');
    }
}