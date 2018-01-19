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
        <title>Manage Users</title>
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
            
            <form id="update_admin" name="update_admin" action="update_admin.php" method="POST" onsubmit="return show_alert(this);">
                
                    <label>Please enter the User_ID of the user you wish to Manage<br></label>
                
                <label for="title"><span>User_ID:</span></label>  
                    <input type="text" name="user_id" id="user_id" />
                    
                    <label>Please enter the Admin status you wish the User to receive <br>
                        1 = True <br>
                        0 = False <br>
                    </label>
                    
                <label for="title"><span>Admin Status:</span></label>  
                    <input type="text" name="admin" id="admin" />  
                    
    
                <input type="submit" value="Submit" />
            </form>		
        </section>
    </div>
<?php

include_once 'Include/footer.php';

?>