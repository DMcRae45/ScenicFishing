<?php

include_once 'dbconnection.php';

$title = $_POST['Product'];
$year = $_POST['Description'];
$genre = $_POST['Price'];

$query = $pdo->prepare 
    ("
        
    INSERT INTO ScenicProducts (Product, Description, Price)
    VALUES( :Product, :Description, :Price)

    ");

$success = $query->execute
    ([
    'Product' => $Product,
    'Description' => $Description,
    'Price' => $Price,
    ]);


$count = $query->rowCount();
if($count > 0)
{
    echo "Insert Successful";
}else{
    echo "Insert Failed";
}

?>

