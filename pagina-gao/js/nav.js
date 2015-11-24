jQuery("document").ready(function($){
	
	var nav = $('.nav-container');
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 150) {
			nav.addClass("f-nav");
		} else {
			nav.removeClass("f-nav");
		}
	});

});