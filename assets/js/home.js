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
})();