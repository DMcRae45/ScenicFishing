<?php

include "dbconnection.php";
session_start();


$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
//$un = $_POST['Username'];
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
//$pw = $_POST['Password'];

$salt = "km01passwordSalt";
$password = $password.$salt;
$passwordHash = sha1($password);

//note for later - encrypt the password

$sql = "SELECT * FROM users WHERE Username = :username
        AND Password = :password";

$stmt = $pdo->prepare($sql);
$success = $stmt->execute(['username' => $username, 'password' => $passwordHash]);

if($success && $stmt->rowCount() > 0)
{
    echo "sucessfully logged in";
    $_SESSION['LoggedIn'] = true;
    $_SESSION['username'] = $username;
    
    header ('location: ../index.php');
    
    
} else {
    echo "Failed to login";
//  $_SESSION['LoggedIn'] = false;
    $_SESSION['username'] = "";
    
    header ('location: ../index.php');
}
//var_dump($_SESSION);

