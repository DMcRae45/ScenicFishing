<!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scenic Fishing</title>

        <style type="text/css" media="all"> 
        </style>    
    </head>
        
<body>
<div id="container"> <!-- contains the visible web page-->
    
<?php
	include_once 'Include/header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		
		<form class="signup-form" action="register_admin.php" method="POST">
                    
			<input type="text" name="fname" placeholder="Firstname">
			<input type="text" name="lname" placeholder="Lastname">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
                        
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>
</section>
</div>
<?php
	include_once 'Include/footer.php';
?>