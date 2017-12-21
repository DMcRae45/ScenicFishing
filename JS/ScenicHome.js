jQuery(document).ready(function(){
	
	jQuery(".menu-hamburger").click(function(){
		
		jQuery(".nav-menu").slideToggle(400,function(){
			
			jQuery(this).toggleClass("nav-expanded").css('display',''); 
			
		});
		
	});
	    $("#Ledyatt-banner").click(function(){
        $("#Ledyatt-description").slideToggle("slow");
    });
	
	    $("#Ledcrieff-banner").click(function(){
        $("#Ledcrieff-description").slideToggle("slow");
    });
	
		$("#Kingennie-banner").click(function(){
        $("#Kingennie-description").slideToggle("slow");
    });
	
		$("#Willowgate-banner").click(function(){
        $("#Willowgate-description").slideToggle("slow");
    });
	
});