<!DOCTYPE html>


<html lang="en">
    <head>
        <title>Movie Database</title>
        <meta name="viewport" content="width: device-width, intial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/movie_home.css" />
    </head>
    <body>
        <div id="header">
            <div class="inner">
                <div id="logo">LOGO</div>
                <nav>
                    <a href="index.php">Home</a>
                   <!-- <?php
                    if($_SESSION['LoggedIn'])
                        {
                        echo "<a href='insert.php'>Insert</a>";
                        }
                    ?> -->
                    
                    <a href="insert.php">Insert</a>
                    
                    <a href="login.html">Login</a>
                    
                    <a href="registration.html">Register</a>
                </nav>
            </div>
        </div>
        <div id="banner">
            <h1>Movies</h1>
            <h3>Database</h3>
        </div>

        <section class="inner container">
           
<?php


session_start();
if(!$_SESSION['LoggedIn'])
{
header('location: index.php');
}

//$id = filter_input(INPUT_)

include_once 'dbconnection.php';

$sql = "SELECT * FROM users WHERE Admin != 'Y';";

$query = $pdo->prepare($sql);
$sucess = $query->execute();


if($sucess)
{
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    
    $output = "";
    $output.="<table>";
    $output.="<thead><tr> <th>id</th> <th>fname</th> <th>lname</th> <th>username</th> <th>Admin</th></thead>";
    
    foreach($results as $result)
    {
        $output.="<tr>";
        $output.="<td>".$result->id."</td>";
        $output.="<td>".$result->fname."</td>";
        $output.="<td>".$result->lname."</td>";
        $output.="<td>.$result->username</td>";
        $output.="<td><form id='adminForm' action='update_admin.php'>";
        $output.="<input type='hidden' name='id'  value='$result->id' />";
        $output.="<input type=submit' value='Confirm' id='idButton' />";
        $output.="</form></td>";
        $output.="</tr>";
    }
    $output.="</table>";

        //echo '<tr> <td>'.$user->id.'</td>';
        //echo '<td>'.$user->fname.'</td>';
        //echo '<td>'.$user->lname.'</td>';
        //echo '<td>'.$user->username.'</td>';
        //echo '<td>'.'<button onclick="update_admin.php" id="update_admin">Confirm</button>'.'</td> <tr>'; 
    }
    
    //ADMIN TABLE
    //$sql = "SELECT * FROM users WHERE Admin = 'Y';";

    //$query = $pdo->prepare($sql);
    //$sucess = $query->execute();

    //if($sucess)
    //{
    //$users = $query->fetchAll(PDO::FETCH_OBJ);
    
    //echo '</table>';
    
   // echo'<table>';
    //echo '<tr><th>Admins</th></tr>';
    
   //     foreach($users as $user)
    //{
   //     echo '<td>'.$user->username.'</td> <tr>';      
    //}
   // }
    //echo '</table>';
?>    
        </section>
        <footer>
            <span id="copy">&copy; David McRae 2017</span>
        </footer>	
    </body>
</html>