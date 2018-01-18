<?php

include_once 'Include/dbconnection.php';

$product_id = $_POST['product_id'];


$query = $pdo->prepare 
    ("
        
    DELETE FROM ScenicProducts
    WHERE Product_ID = $product_id

    ");

$success = $query->execute
    ([
    'product_id' => $product_id
    ]);


$count = $query->rowCount();
if($count > 0)
{
    echo "Delete Successful";
}else{
    echo "Delete Failed";
}

?>
