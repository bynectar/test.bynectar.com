// Main Javascript File
$(document).ready(function(){

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if ( scroll > 0 ){
			$('html').addClass('scroll');
		} else {
			$('html').removeClass('scroll');
		}
	});

	// Init Masonry
	Macy.init({
		container: '.grid',
		trueOrder: false,
		waitForImages: false,
		margin: 0,
		columns: 3,
		breakAt: {
	//		940: 3,
			520: 2,
			400: 1
		}
	});
});
