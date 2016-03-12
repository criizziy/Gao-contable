$(document).ready(function() {
   var a = 2;
   $('.subir').click(function(){
	if((a % 2) == 0){
   		$('.redes').animate({
   			height:'+=500px'
   		});
		
		$('.subir').css("webkitTransform", "scaleY(-1)");
		
		a = a+1;
	}
	else {
		$('.redes').animate({
   			height:'-=500px'
   		});
		
		$('.subir').css("webkitTransform", "scaleY(1)");
		a++
	}
   		
		
   });
   

});