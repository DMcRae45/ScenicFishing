<?php
//We need to have a session started on ALL pages
session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <!-- <link href="../CSS/ResetStyle.css" rel="stylesheet" type="text/css"/> --> <!-- this CSS file resets all browser default css (also contradicts my own css files)-->
        <link href="../CSS/LoginStyle.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/MenuStyle.css" rel="stylesheet" type="text/css"/>
        <style>
            html 
            { 
                background: url(../Images/Lake_background.jpg) no-repeat center fixed; 
                background-size:cover;
            } 
        </style>

    </head>
    <body>

        <header>
            <nav>
                <div class="main-wrapper">			
                    <div class="nav-login">
                        <?php
                        //check if we have a SESSION variable named "User_ID" / The "User_ID" is created in our login script in login.inc.php, and will only exist if the user is logged in!
                        //If the user is logged in ("Usser_ID" does exist), then we display the logout form

                        if(!isset($_SESSION['LoggedIn']))
                        
                        {
                            echo
                            '<form action="Include/attempt_login.php" method="POST">

                            <input type="text" name="username" placeholder="Username/Email">

                            <input type="password" name="password" placeholder="password">

                            <button type="submit" name="submit">Login</button>

                            </form>

                            <a href="signup.php">Sign up</a>';
                        }
                        
                                
                        elseif ($_SESSION['LoggedIn']) 
                        {
                            echo
                            '<form action="Include/attempt_logout.php">

                            <button type="submit" name="submit">Logout</button>

                            </form>';

                            // $sql = (SELECT Username FROM users WHERE Admin = 1)
                            // if $username = $_SESSION['username']
                            //if ($_SESSION['LoggedIn'] && (sql )
                            //{
                            echo
                            '<form action="insert.php" method="POST">

                             <button type="submit" name"submit>Insert Product</button>

                            </form>';
                            
                            echo
                            '<form action="delete.php" method="POST">

                             <button type="submit" name"submit>Delete Product</button>

                            </form>';
                            
                            echo
                            '<form action="ManageUsers.php" method="POST">

                             <button type="submit" name"submit>Manage Users</button>

                            </form>';
                            //}  
                        }
//                        //If the user is not logged in ("User_ID" doesn't exist), then we display the login form
//                        else
//                        {
//                            echo
//                            '<form action="Include/attempt_login.php" method="POST">
//
//                            <input type="text" name="username" placeholder="Username/Email">
//
//                            <input type="password" name="password" placeholder="password">
//
//                            <button type="submit" name="submit">Login</button>
//
//                            </form>
//
//                            <a href="signup.php">Sign up</a>';
//                        }
                        ?>
                    </div>
                </div>
            </nav>

            <div id="banner">	      
                <img id="logo" src="../Images/Scenic_logo.png" alt="GALLERY PLACE HOLDER" >

                <div id="hamburger-home">
                    <!-- Hamburger symbol (only in media query)-->
                    <span class="menu-hamburger">&#9776;</span>
                    <!-- Hamburger symbol -->	
                </div>

                <!-- menu -->
                <div class="nav-menu">
                    <ul>
                        <li><a href="index.php">Fisheries</a></li>
                        <li><a href="ScenicMaps.php">Nearby</a></li>
                        <li><a href="ScenicGallery.php">Gallery</a></li>
                        <li><a href="ScenicShop.php">Shop</a></li>
                        <li><a href="Option5">Contact</a></li>        
                    </ul>
                </div>
                <!-- menu -->
            </div> 

        </header>
        
        