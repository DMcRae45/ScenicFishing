<?php

include "dbconnection.php";
session_start();


$un = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
//$un = $_POST['Username'];
$pw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
//$pw = $_POST['Password'];

$salt = "km01passwordSalt";
$pw = $pw.$salt;
$pw = sha1($pw);

//note for later - encrypt the password

$sql = "SELECT * FROM users WHERE username = :username
        AND password = :password";

$stmt = $pdo->prepare($sql);
$sucess = $stmt->execute(['username' => $un, 'password' => $pw]);

if($sucess && $stmt->rowCount() > 0)
{
    echo "sucessfully logged in";
    $_SESSION['LoggedIn'] = true;
    $_SESSION['username'] = $un;
    echo $_SESSION['LoggedIn'];
    echo $_SESSION['username'];
} else {
    echo "Failed to login";
    $_SESSION['LoggedIn'] = false;
    $_SESSION['username'] = "";
}