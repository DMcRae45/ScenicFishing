<!DOCTYPE html>
<?php
//session_start();
//if(!$_SESSION['LoggedIn'])
//{
//header('location: ScenicShop.php');
//}
?>
<html>
    <head>
        <title>Insert</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/movie_home.css" />
        
        <script type="text/javascript" src="JS/Confirmation.js"></script>
        
    </head>
    <body>
<div id="container">
<?php
include_once 'Include/header.php';
?>

        <section class="inner container">
            
            <form id="insert_ScenicProduct" name="insert_ScenicProduct" action="insert_ScenicProduct.php" method="POST" onsubmit="return show_alert(this);">
                
                <label for="title"><span>Product:</span></label>  
                    <input type="text" name="product" id="product" />  
                    
                <label for="title"><span>Description:</span></label>
                    <input type="text" name="description" id="description" />
                    
                <label for="title"><span>Price:</span></label>  
                <input type="number" name="price" id="price" />
                    
                <input type="submit" value="Submit" />
            </form>		
        </section>
    </div>
<?php

include_once 'Include/footer.php';

?>