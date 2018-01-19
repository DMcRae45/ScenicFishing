<?php

include_once 'Include/dbconnection.php';

$product = $_POST['product'];
$description = $_POST['description'];
$price = $_POST['price'];

$query = $pdo->prepare 
    ("
        
    INSERT INTO ScenicProducts (Product, Description, Price)
    VALUES( :product, :description, :price)

    ");

$success = $query->execute
    ([
    'product' => $product,
    'description' => $description,
    'price' => $price
    ]);


$count = $query->rowCount();
if($count > 0)
{
    echo "Insert Successful";
    header ('location: ../insert.php');
}else{
    echo "Insert Failed";
    header ('location: ../insert.php');
}

?>

