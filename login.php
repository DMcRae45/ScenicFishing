<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/movie_home.css" />
        
    </head>
    <body>

<div id="container"> <!-- contains the visible web page-->
        
        <?php
            include_once 'Include/header.php'
        ?>

        <section class="inner container">
            
            <form id="login_form" name="login_form" action="attempt_login.php" method="POST">
                
                <label for="Username"><span>Username:</span></label>  
                    <input type="text" name="username" id="Username" />  
                    
                <label for="Password"><span>Password:</span></label>
                    <input type="Password" name="password" id="Password" autocomplete="off"/>
               
                    
                <input type="submit" value="Login" />
            </form>		
        </section>

    </div><!-- end of container div-->
        
        <?php
            include_once 'Include/footer.php'
        ?>

