(function(){
	var arr = $('.adjectives').data('adjectives').split(", ");
	arr.forEach(function(element, index) {
		arr[index] = element + ".";
	})
	$('#typed-txt').typed({
		strings: arr,
		typeSpeed: 100, 
        backDelay: 2000, 
        loop: true
	});

	// Make all serivce cells the same height
	$services = $('.service-wrapper');
	var maxHeight = 0;
	$services.each(function(){
		$this = $(this);
	   if( $this.height() > maxHeight ){ maxHeight = $this.height(); }
	});
	$services.height(maxHeight);
})();