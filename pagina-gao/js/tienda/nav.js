jQuery("document").ready(function($){
	
	var nav = $('.nav-container');
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 146) {
			nav.addClass("f-nav");
			$(".cssmenu").width(100%);
			
			//$(".nav ul li.active a:after").css("background-color", "white");
			//$(".nav ul li:hover a:after").css("background-color", "white");
			

			
			    

		} else {
			nav.removeClass("f-nav");
			$(".nav ul").css("background-color", "white");
			$(".nav ul li a").css("color", "#444444");	

			$(".nav ul li a").hover(function(){
			    $(this).css("color", "white");
			    }, function(){
			    $(this).css("color", "#444444");
			});

		}
	});



});