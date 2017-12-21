<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Movie Database</title>
        <meta name="viewport" content="width: device-width, intial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/movie_home.css" />
    </head>
<body>

<div id="container"> <!-- contains the visible web page-->
    <?php
    include_once 'Include/header.php';
    ?>


<section class="inner container">
           
<?php

include_once 'Include/dbconnection.php';

$sql = "SELECT * FROM ScenicProducts";

$query = $pdo->prepare($sql);
$sucess = $query->execute();

if($sucess)
{
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    
    echo'<table>';
    echo '<tr> <th>ID</th> <th>Product</th> <th>Description</th> <th>Price</th>';
    
    foreach($products as $product)
    {
        echo '<tr> <td>'.$product->Product_ID.'</td>';
        echo '<td>'.$product->Product.'</td>';
        echo '<td>'.$product->Description.'</td>';
        echo '<td>'.$product->Price.'</td> <tr>';
    }
    echo '</table>';
}

?>
            
            
        </section>
</div><!-- end of container-->

<script type="text/javascript">
</script>

<?php
	include_once 'Include/footer.php';
?>