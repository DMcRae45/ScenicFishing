<!DOCTYPE html>
<?php
session_start();
if(!$_SESSION['LoggedIn'])
{
header('location: ScenicShop.php');
}
?>
<html>
    <head>
        <title>Insert</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="movie_home.css" />
        
    </head>
    <body>
        <div id="header">
            <div class="inner">
                <div id="logo">LOGO</div>
                <nav>
                    <a href="ScenicShop.php">Home</a>
                    <?php
                    if($_SESSION['LoggedIn'])
                        {
                        echo "<a href='insert.php'>Insert</a>";
                        }
                    ?>
                    <a href="login.html">Login</a>
                </nav>
            </div>
        </div>
        <div id="banner">
            <h1>Movies</h1>
            <h3>Database</h3>
        </div>

        <section class="inner container">
            
            <form id="insert_ScenicProduct" name="insert_ScenicProduct" action="insert_ScenicProduct.php" method="POST">
                
                <label for="title"><span>Product:</span></label>  
                    <input type="text" name="product" id="product" />  
                    
                <label for="title"><span>Description:</span></label>
                    <input type="text" name="description" id="description" />
                    
                <label for="title"><span>Price:</span></label>  
                    <input type="text" name="price" id="price" />
                    
                <input type="submit" value="Submit" />
            </form>		
        </section>
        <footer>
            <span id="copy">&copy; David McRae 2017</span>
        </footer>
    </body>
</html>