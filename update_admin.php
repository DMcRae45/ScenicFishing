<?php

include_once 'Include/dbconnection.php';

$Admin = $_POST['Admin'];
$id = $_POST['id'];


$query = $pdo->prepare 
    ("
        
    UPDATE TABLE users 
    SET Admin = '1'
    WHERE id = $id;

    ");

$success = $query->execute
    ([
    'Admin' => $Admin
    ]);


$count = $query->rowCount();
if($count > 0)
{
    echo "Update Successful";
}else{
    echo "Update Failed";
}

?>
