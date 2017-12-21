jQuery(document).ready(function(){
	jQuery(".menu-hamburger").click(function(){
		
		jQuery(".nav-menu").slideToggle(400,function(){
			
			jQuery(this).toggleClass("nav-expanded").css('display',''); 
			
		});
		
	});
});







var map;

    function initialize() 
	{
        var mapOptions = 
		{
			zoom: 8,
			center: new google.maps.LatLng(56.461428,-2.9681111),
			zoom:10,
			mapTypeId: google.maps.MapTypeId.ROADMAP
        };
		
		map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

		var DundeeCenter = 
		{
			position: new google.maps.LatLng(56.461428,-2.9681111)
		};

		var marker = new google.maps.Marker(DundeeCenter);
		marker.setMap(map);

		var infoWindowOptions = {content: 'Dundee City Center'};

		var infoWindow = new google.maps.InfoWindow(infoWindowOptions);
		
		google.maps.event.addListener(marker,'click',function(e){infoWindow.open(map, marker);
		});
		
	};

google.maps.event.addDomListener(window, 'load', initialize);