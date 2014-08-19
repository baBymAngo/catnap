$(document).ready(function(){
	$('.logo').on('hover', function() {
    	this.style.webkitAnimationPlayState = "running";
		$(this).on('webkitAnimationEnd', function() {
	  		this.style.webkitAnimationPlayState = "paused";
	  	});	        
	});
});