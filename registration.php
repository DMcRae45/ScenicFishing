<!DOCTYPE html>
<html>
    <head>
        <title></title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/ScenicShop.css" />
        
    </head>
    <body>
<?php
	include_once 'Include/header.php';
?>
    </div> 

        <section class="inner container">
            
            <form id="register_admin" name="register_admin" action="register_admin.php" method="POST">
                
                <label for="fname"><span>First name:</span></label>  
                    <input type="text" name="fname" id="Fname" /> 
                    
                <label for="lname"><span>Last name:</span></label>  
                    <input type="text" name="lname" id="Lname" />
                    
                <label for="email"><span>Email:</span></label>  
                    <input type="text" name="email" id="Email" /> 
  
                <label for="username"><span>Username:</span></label>  
                    <input type="text" name="username" id="Username" />  
                    
                <label for="password"><span>Password:</span></label>
                    <input type="Password" name="password" id="Password" autocomplete="off"/>
                            
<!--                <label for="Admin"><span>Admin:</span></label>  
                    <input type="text" name="Admin" id="Admin" /> 
-->
                    
                <input type="submit" value="Submit" />

            </form>		
        </section>

<?php
	include_once 'LoginSystem/footer.php';
?>