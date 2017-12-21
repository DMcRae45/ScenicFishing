<!DOCTYPE html>
<html>
    
<head>
    <title>Scenic Fishing Map</title>
	
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />


        <script type="text/javascript" src="JS/jquery-3.1.1.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script type="text/javascript" src="JS/ScenicMaps.js"></script>

        <style type="text/css" media="all">
        @import "CSS/ScenicMaps.css";
        </style>


</head>
    
<body>
    
<div id="container"> <!-- contains the visible web page -->

    <?php
        include_once 'Include/header.php'
    ?>
    
    <div id="gap">
        <br/>
    </div>

	<div id = "map-container">

            <div id="map-canvas">
                
            </div>
	
	</div>
	<!-- ledyatt long and lat code is (56.507611, -3.164261) to be inserted into jquery at later date -->
	
 
</div>
<?php
	include_once 'Include/footer.php';
?>