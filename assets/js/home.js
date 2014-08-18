(function(){
	// Typed Script
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

	// Instagram Feed
	var userFeed = new Instafeed({
		target: 'instagram',
        get: 'user',
        userId: 224081856,
        accessToken: '224081856.467ede5.2c3e471bd40b4a1ba781f0b877bba767',
        template: '<a href="{{link}}" target="_blank" class="shot"><img src="{{image}}" /></a>',
        limit: 12
    });
    userFeed.run();
})();