$(document).ready(function() {

	/*===== Submenu change image BEGIN =====*/
	$('.sub_list a').hover(function() {
		var path = $(this).data('path');
		var right = $('.sub-menu .right img');
		right.attr('src', path);
	});
	/*===== Submenu change image END =====*/


	$('.main_banner_slider').slick({
		prevArrow: '<div class="banner_arrow_prev"><img src="assets/images/slide-prev.svg"></div>',
		nextArrow: '<div class="banner_arrow_next"><img src="assets/images/slide-next.svg"></div>',
	});
});