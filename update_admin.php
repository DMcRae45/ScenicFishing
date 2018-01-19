<?php

include_once 'Include/dbconnection.php';

$admin = $_POST['admin'];
$user_id = $_POST['user_id'];


$query = $pdo->prepare 
    ("
        
    UPDATE users 
    SET Admin = $admin
    WHERE User_ID = $user_id;

    ");

$success = $query->execute
    ([
    'user_id' => $user_id,
    'admin' => $admin
    ]);


$count = $query->rowCount();
if($count > 0)
{
    echo "Update Successful";
    header ('location: ../ManageUsers.php');
}else{
    echo "Update Failed";
    header ('location: ../ManageUsers.php');
}

?>
