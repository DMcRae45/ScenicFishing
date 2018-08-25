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
        <title>Delete</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/ScenicShop.css" />
        
        <style>
 
        </style>
        
        <script type="text/javascript" src="JS/Confirmation.js"></script>
    </head>
    <body>
<div id="container">
<?php
include_once 'Include/header.php';
?>

        <section class="inner container">
            
            <form id="delete_ScenicProduct" name="delete_ScenicProduct" action="delete_ScenicProduct.php" method="POST" onsubmit="return show_alert(this);">
                
                <label>Please enter the product id number that you wish to DELETE! <br></label>
                
                <label for="title"><span>Product_ID:</span></label>  
                    <input type="text" name="product_id" id="product_id" />  
                      
                <input type="submit" value="Submit"/>
            </form>	
            
        </section>
    
    </div>
<script>
</script>
<?php

include_once 'Include/footer.php';

?>