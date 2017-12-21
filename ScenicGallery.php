<!DOCTYPE html>
<html>
<head>
<title>Scenic Gallery</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
			
				
<script type="text/javascript" src="JS/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="JS/ScenicHome.js"></script>
				
<style type="text/css" media="all">
@import "CSS/ScenicGallery.css";
</style>

<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->


</head>
<body>

<div id="container"> <!-- contains the visable webpage -->

<?php
	include_once 'Include/header.php';
?>

    <div id = "Top-Banner">
        <div id ="Gallery-banner">
            <img class="mySlides" src="Images/Ledyatt_banner.jpg" style="width:100%">
            <img class="mySlides" src="Images/Ledcrieff_banner.jpg" style="width:100%">
            <img class="mySlides" src="Images/Kingennie_banner.jpg" style="width:100%">
            <img class="mySlides" src="Images/Willowgate_banner.jpg" style="width:100%">

            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>

</div>
    
    
<script>
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
<!-- automatic gallery -->
//var slideIndex = 0;
//carousel();
//function carousel() {
//  var i;
//    var x = document.getElementsByClassName("mySlides");
//    for (i = 0; i < x.length; i++) {
//      x[i].style.display = "none"; 
//    }
//    slideIndex++;
//    if (slideIndex > x.length) {slideIndex = 1} 
//    x[slideIndex-1].style.display = "block"; 
//    setTimeout(carousel, 2000); // Change image every 2 seconds
//} 
</script>

<?php
	include_once 'Include/footer.php';
?>