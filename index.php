<!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scenic Fishing</title>

        <script type="text/javascript" src="JS/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="JS/ScenicHome.js"></script>
        


        <style type="text/css" media="all"> 
        @import "CSS/ScenicHome.css"; 
        </style>    
    </head>
        
<body>
<div id="container"> <!-- contains the visible web page-->
    
<?php
	include_once 'Include/header.php';     
?>
    
<?php
if(isset($_COOKIE['UserVisit']))
{
    echo "";
} else {
    echo "<script>alert('Welcome to Scenic Fishing, Please do not hesitate to contact an admin for support if needed. ');</script>";
    
    $Month = 2592000 + time(); //this adds 30 days to the current time
    
    setcookie('UserVisit',$Month);
}
?>
    

		
<div id="content"> <!-- this div is the content of the page -->	

<!----------------------------------------------------------------------------------------------------------------------->
<div class="content-title"> <h1><p class="dark-background">Ledyatt Fishery</p></h1> </div>
<!----------------------------------------------------------------------------------------------------------------------->
    <div class ="content1">
            <div id ="Ledyatt-banner">
                     <img  id="gallery1" src="Images/Ledyatt_banner.jpg" alt="GALLERY PLACE HOLDER" >
            </div>
            <div id ="Ledyatt-description"> 
                    <p>Ledyatt is stocked regularly with a good head of Rainbow, Brown and Blue Trout.
                    Many fish run to a trophy weight in excess of 20lbs.
                    </br></br>
                    Fishing platforms have been constructed to accommodate 39 anglers, some specially 
                    adapted to provide spaces for disabled anglers.
                    We also have a children's pool where bait fishing is allowed.
                    </br></br>

                    Facilities include a Fishing Lodge offering refreshments and tackle, toilets and ample parking.
                    </br></br>
                    The loch area has been landscaped and planted to preserve and enhance the amenity in keeping with 
                    it's natural surroundings.
                    </br></br>
                    Managed by an experienced and knowledgeable bailiff the fishery offers terrific sport in a 
                    beautiful and tranquil location.</p>


            </div>
    </div>
    </br>
<!----------------------------------------------------------------------------------------------------------------------->
<div class="content-title"> <h1><P class="dark-background">Ledcrieff Fishery</P></h1> </div>
<!----------------------------------------------------------------------------------------------------------------------->
    <div class ="content1">
            <div id="Ledcrieff-banner">
                     <img  id="gallery1" src="Images/Ledcrieff_banner.jpg" alt="GALLERY PLACE HOLDER" >
            </div>	
            <div id="Ledcrieff-description">  
                    <p>Ledcrieff & Lairds Fisheries are situated in the heart of Perthshire near the cities 
                    of Perth & Dundee and also nearby the Rivers Tay & Tummel. These crystal clear Lochs are
                    full of hard fighting, fully finned Rainbow, Blue & Brown Trout up to 20lbs.</br></br>

                    Our Fishery comprises of two crystal clear lochs which are abounding with aquatic fly life,
                    and as such top of the water sport can be enjoyed for most of the year.</br></br>

                    Ledcrieff Loch is preserved as a fly-fishing only loch. Having been rescued from a history
                    of neglect many many years ago, the owners have restored it to the exemplary condition it is in today.
                    Lairds loch is suitable for any legal method of fishing.  The lochs are located in the heart of rural 
                    Perthshire, Scotland, in an area of rare natural beauty.</p>

            </div>
    </div>
    </br>
<!----------------------------------------------------------------------------------------------------------------------->
<div class="content-title"> <h1><P class="dark-background">Kingennie Fishery</P></h1> </div>
<!----------------------------------------------------------------------------------------------------------------------->
    <div class ="content1">
            <div id ="Kingennie-banner">
                     <img  id="gallery1" src="Images/Kingennie_banner.jpg" alt="GALLERY PLACE HOLDER" >
            </div>	
            <div id ="Kingennie-description">  
                    <p>There are few better pastimes than fly fishing for trout, and few better places for it than the fishing pools 
                    of Kingennie Fishings, near Dundee, Scotland.</br></br>

                    Kingennie has trout fishing (rainbow, blue, brown), with bait and fly-fishing on four well-stocked 
                    pools year-round. Catches vary according to the season and pool, from fighting trout of 1lb to 'old and 
                    cunning' fish of over 15lbs. The pools have fishing piers and some grass banking. Kingennie Fishings 
                    attracts around 10,000 anglers each year. Stocking takes place weekly.</br></br>

                    Forbes of Kingennie are the proud main sponsors for the Scottish Youth Fly Fishing Team. Mike Forbes 
                    himself a former National Fly Fishing Champion and Captain of the Senior Scottish International 
                    Fly Fishing Team is passionate about youth fishing and promoting the sport to the younger generation.</p>

            </div>
    </div>
    </br>
<!----------------------------------------------------------------------------------------------------------------------->
<div class="content-title"> <h1><P class="dark-background">Willowgate Fishery</P></h1> </div>
<!----------------------------------------------------------------------------------------------------------------------->
    <div class ="content1">
            <div id ="Willowgate-banner">
                     <img  id="gallery1" src="Images/Willowgate_banner.jpg" alt="GALLERY PLACE HOLDER" >
            </div>	
            <div id="Willowgate-description">  
                    <p>Open All Year</br></br>
                    Willowgate Trout & Salmon Fishery is situated on the banks of the legendary river Tay 2 miles 
                    from Perth City Centre. The fishery comprises of a 9 acre fly only trout loch and 4 miles of 
                    Salmon fishing on the River Tay. The loch is regularly stocked with grade one fully finned hard 
                    fighting Rainbow Trout minimum size 2lb up to 21lb.</br></br>
                    There is an abundance of flora & fauna to be seen at the fishery, from the Osprey and Otter giving
                    lessons on how to catch trout, the deer grazing along the banks to the wild orchids growing on the 
                    waters edge.</br></br>
                    Tackle hire, tuition and gift vouchers available.</br></br>
                    Corporate packages full days or evenings available.</p>

            </div>
    </div>
    </br>
<!----------------------------------------------------------------------------------------------------------------------->
</div><!-- end of content -->

</div><!-- end of container-->

<script type="text/javascript">
</script>

<?php
	include_once 'Include/footer.php';
?>