$(document).ready(function() {

	var headerRight = $('.header_right');
	$('.hamburger_button').on('click', function() {		
		headerRight.addClass('header_is_active');
	});

	$('.times_button').on('click', function() {
		headerRight.removeClass('header_is_active');
	});

	$('.search_button').on('click', function() {
		var search = $('.header_search_wrap');


		if (!search.is(':visible')) {
			search.slideDown('fast');
		}
		else {
			search.slideUp('fast');
		}
	});

	$('.menu-item-has-children').on('click', function() {
		var submenu = $(this).find('.sub-menu');
		if (!submenu.is(':visible')) {
			submenu.slideDown(500);
		}
		else {
			submenu.slideUp(500);
		}
	});

	/*===== Submenu change image BEGIN =====*/
	$('.sub_list a').hover(function() {
		var path = $(this).data('path');
		var right = $('.sub-menu .right img');
		right.attr('src', path);
	});
	/*===== Submenu change image END =====*/


	/*===== Main banner slider BEGIN =====*/
	$('.main_banner_slider').slick({
		prevArrow: '<div class="banner_arrow_prev"><img src="assets/images/slide-prev.svg"></div>',
		nextArrow: '<div class="banner_arrow_next"><img src="assets/images/slide-next.svg"></div>',
	});
	/*===== Main banner slider EMD =====*/

});