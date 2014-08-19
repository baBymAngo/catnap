$(document).ready(function(){
	$('.logo').on('mouseenter', function() {
		$(this).addClass('animated');
		setTimeout(function(){
			$('.logo').removeClass('animated');
		}, 800);
	});
});