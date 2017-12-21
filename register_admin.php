<?php

include_once 'Include/dbconnection.php';

$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
//$Admin = $_POST['Admin'];
$salt = "km01passwordSalt";
$password = $password.$salt;
$password = sha1($password);

$query = $pdo->prepare 
    ("
        
    INSERT INTO users (Fname, Lname, Email, Username, Password)
    VALUES( :fname, :lname, :email, :username, :password)

    ");

$success = $query->execute
    ([
    'fname' => $fname,
    'lname' => $lname,
    'email' => $email,
    'username' => $username,
    'password' => $password
    //'Admin' => $Admin
    ]);


$count = $query->rowCount();
if($count > 0)
{
    echo "Insert Successful";
}else{
    echo "Insert Failed";
   echo $query -> errorInfo()[2];
}

?>