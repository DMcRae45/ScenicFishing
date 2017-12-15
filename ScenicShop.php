<!DOCTYPE html>


<html lang="en">
    <head>
        <title>Movie Database</title>
        <meta name="viewport" content="width: device-width, intial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="movie_home.css" />
    </head>
    <body>
    <div id="banner">	
        
        <img id="logo" src="Scenic_logo.png" alt="GALLERY PLACE HOLDER" >
        
        <div id="hamburger-home">
            <!-- Hamburger symbol -->
            <span class="menu-hamburger">&#9776;</span>
            <!-- Hamburger symbol -->	
        </div>
            <link href="ScenicHome.css" rel="stylesheet" type="text/css"/>
	
		<!-- menu -->
		<div class="nav-menu">
                    <ul>
                        <li><a href="index.html">Fisheries</a></li>
                        <li><a href="ScenicMaps.html">Nearby</a></li>
                        <li><a href="ScenicGallery.html">Gallery</a></li>
                        <li><a href="ScenicShop.php">Shop</a></li>
                        <li><a href="#Option5">Contact</a></li>
                    </ul>
		</div>
		<!-- menu -->
    </div> 
        


        <section class="inner container">
           
<?php

include_once 'dbconnection.php';

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
        <footer>
            <span id="copy">&copy; David McRae 2017</span>
        </footer>	
    </body>
</html>