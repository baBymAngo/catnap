(function($){
	$('.menu-icon').on('click', function(){
		$(this).toggleClass('clicked');
		$('main#main').toggleClass('nav-is-open')
	});
})(jQuery)