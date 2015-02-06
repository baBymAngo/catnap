(function($){
	$('.menu-icon').on('click', function(){
		$(this).toggleClass('clicked');
		$('.mobile-menu').toggleClass('show-menu');
	});
})(jQuery);