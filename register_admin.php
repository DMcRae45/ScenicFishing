<?php

include_once 'dbconnection.php';

$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$Admin = $_POST['Admin'];
$salt = "km01passwordSalt";
$password = $password.$salt;
$password = sha1($password);

$query = $pdo->prepare 
    ("
        
    INSERT INTO users (fname, lname, username, password, Admin)
    VALUES( :fname, :lname, :username, :password, 'N')

    ");

$success = $query->execute
    ([
    'fname' => $fname,
    'lname' => $lname,
    'username' => $username,
    'password' => $password
    ]);


$count = $query->rowCount();
if($count > 0)
{
    echo "Insert Successful";
}else{
    echo "Insert Failed";
}

?>