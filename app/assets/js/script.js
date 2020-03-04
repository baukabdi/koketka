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
	/*===== Main banner slider END =====*/

	/*===== Fancybox options BEGIN =====*/
	$('[data-fancybox]').fancybox({
		touch: false,
	});

	$('.popup_close').on('click', function() {
		$.fancybox.close();
	});

	/*===== Fancybox options END =====*/


	/*===== Fotorama for product single Options START =====*/
	$('.product_single_fotorama').fotorama({
		width: 450,
		height: 381,
		thumbwidth: '140px',
		thumbheight: '118px',
		thumbmargin: 15,
		arrows: false,
		allowfullscreen: true
	});

	$(document).on('mouseover', '.fotorama__nav__frame', function () {
		var $fotoramaDiv = $(this).parents('.fotorama'),
		fotoramaApi = $fotoramaDiv.data('fotorama');
		fotoramaApi.show({
			index: $('.fotorama__nav__frame', $fotoramaDiv).index(this)
		});
	});
	/*===== Fotorama for product single Options END =====*/

	$('.multi_select').multiselect();

});