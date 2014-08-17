(function(){
	var arr = $('.adjectives').data('adjectives').split(", ");
	$('#typed-txt').typed({
		strings: arr,
		typeSpeed: 150, 
        backDelay: 3000, 
        loop: true

	})
})();