$(document).ready(function(){
	// Logo animation
	$('.logo').on('mouseenter', function() {
		$(this).addClass('animated');
		setTimeout(function(){
			$('.logo').removeClass('animated');
		}, 800);
	});

	// Make all serivce cells the same height
	$services = $('.service-wrapper');

	if ($services.length > 0) {
		var maxHeight = 0;
		$services.each(function(){
			$this = $(this);
		   if( $this.height() > maxHeight ){ maxHeight = $this.height(); }
		});
		$services.height(maxHeight);
	}
});