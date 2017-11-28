'use strict';

(function ($) {

				$(function () {

								// Home
								var slider_left = $('.item_wrapper', $('#main-slider-1')).bxSlider({
												auto: false,
												mode: 'vertical',
												slideSelector: '.item',
												minSlides: 1,
												maxSlides: 1,
												speed: 1000,
												pager: false
								});

								$('.item_wrapper', $('#main-slider-2')).bxSlider({
												speed: 1000,
												auto: 1,
												mode: 'vertical',
												slideSelector: '.item',
												minSlides: 1,
												maxSlides: 1,
												autoDirection: 'prev',
												pager: false,
												onSlideNext: function onSlideNext($slideElement, oldIndex, newIndex) {
																slider_left.goToPrevSlide();
												},
												onSlidePrev: function onSlidePrev($slideElement, oldIndex, newIndex) {
																slider_left.goToNextSlide();
												}
								});

								$('.item_wrapper', $('#utilities-slider')).bxSlider({
												auto: true,
												mode: 'fade',
												slideSelector: '.item',
												minSlides: 1,
												maxSlides: 1,
												pager: true
								});

								// gioithuongluu
								var first = $('#gioithuongluu-1').bxSlider({
												auto: false,
												controls: false,
												mode: 'vertical',
												slideSelector: '.slider',
												minSlides: 1,
												maxSlides: 1,
												speed: 1000,
												pager: false
								});

								var second = $('#gioithuongluu-2').bxSlider({
												auto: false,
												controls: false,
												mode: 'vertical',
												slideSelector: '.slider',
												minSlides: 1,
												maxSlides: 1,
												speed: 1000,
												pager: false
								});

								$('#gioithuongluu-3').bxSlider({
												speed: 1000,
												auto: true,
												controls: false,
												mode: 'vertical',
												slideSelector: '.slider',
												minSlides: 1,
												maxSlides: 1,
												autoDirection: 'prev',
												pager: false,
												onSlideNext: function onSlideNext($slideElement, oldIndex, newIndex) {
																first.goToNextSlide();
																second.goToPrevSlide();
												},
												onSlidePrev: function onSlidePrev($slideElement, oldIndex, newIndex) {
																first.goToPrevSlide();
																second.goToNextSlide();
												}
								});

								// main js
								new WOW().init();
								$('#section1 .group-button .nav-button').click(function () {
												$('#section1').addClass('menu-open').removeClass('form-open');
												$('#section1 .bg-menu').show();
								});

								$('#section1 .main-menu .close-btn').click(function () {
												$('#section1').removeClass('menu-open');
												$('#section1 .bg-menu').hide();
								});

								$('#section1 .bg-menu').click(function () {
												$('#section1').removeClass('menu-open');
												$('#section1').removeClass('form-open');
												$(this).hide();
								});

								function onscreen_init() {
												$('.border-wrapper').each(function () {
																var object = $(this);
																var newScroll = $(window).scrollTop();
																if (newScroll + $(window).height() * 0.85 > $(this).offset().top) {
																				object.addClass('bordered');
																}
												});
								}
								onscreen_init();
								$(window).scroll(function (event) {
												onscreen_init();
								});

								if ($('#backtoptop').length) {
												var scrollTrigger = 600,
												    backToTop = function backToTop() {
																var scrollTop = $(window).scrollTop();
																if (scrollTop > scrollTrigger) {
																				$('#backtoptop').addClass('show');
																} else {
																				$('#backtoptop').removeClass('show');
																}
												};
												backToTop();
												$(window).on('scroll', function () {
																backToTop();
												});
												$('#backtoptop').on('click', function (e) {
																e.preventDefault();
																$('html,body').animate({
																				scrollTop: 0
																}, 700);
												});
								}

								$('.attach-info .nav-tabs').click(function () {
												$(this).parents('.wrapper-attach').find('.dropdown-toggle').attr("aria-expanded", "true");
								});

								$('body, .close-modal').click(function () {
												$('.modal').hide();
								});

								$('.modal-content .modal-body').click(function (event) {
												event.stopPropagation();
								});

								$('.contact-button').click(function (event) {
												event.preventDefault();
												$('#section1').addClass('form-open').removeClass('menu-open');
												$('#section1 .bg-menu').show();
								});

								$('#subscribe-form .close-btn').click(function () {
												$('#section1').removeClass('form-open');
												$('#section1 .bg-menu').hide();
												$('#paid_form').get(0).reset();
												$('#paid_form').find('.paid-message').html('<small>* Vui lÃ²ng Ä‘iá»n Ä‘áº§y Ä‘á»§ thÃ´ng tin</small>');
								});

								var heightss1 = $(window).width() * 956 / (2 * 937);
								if ($(window).width < 1024) {
												$('.section1').css('height', 'auto');
								} else {
												$('.section1').css('height', heightss1 * 0.7);
								}

								$(window).resize(function (event) {
												var heightss1 = $(window).width() * 956 / (2 * 937);
												if ($(window).width < 1024) {
																$('.section1').css('height', 'auto');
												} else {
																$('.section1').css('height', heightss1);
												}
								});

								$('.section1').css('height', heightss1);
								if ($('body').hasClass('home')) {
												var window_height = $(window).height();
												var top = $('#matbangtongthe').offset().top - 0.5 * window_height;
												var bot = $('#matbangtongthe').offset().top + $('#matbangtongthe').height() + 0.5 * window_height;
												$(window).scroll(function () {
																var scrolltop = $(window).scrollTop();
																if (scrolltop > top && scrolltop < bot && !$('#matbangtongthe').hasClass('active')) {
																				$('#matbangtongthe object').html("<embed src='" + wp_vars['tplurl'] + "/dist/assets/images/matbangtongthe_1.svg'> </embed>");
																				$('#matbangtongthe').addClass('active');
																} else {
																				$('#matbangtongthe').removeClass('active');
																}
												});
								}

								if (!$('body').hasClass('home') && $('body').find('#matbangtongthe').length) {
												var window_height = $(window).height();
												var top = $('#matbangtongthe').offset().top - 0.5 * window_height;
												var bot = $('#matbangtongthe').offset().top + $('#matbangtongthe').height() + 0.5 * window_height;
												$(window).scroll(function () {
																var scrolltop = $(window).scrollTop();
																if (scrolltop > top && scrolltop < bot && !$('#matbangtongthe').hasClass('active')) {
																				$('#matbangtongthe object').html("<embed src='" + wp_vars['tplurl'] + "/dist/assets/images/matbangtongthe_luxury.svg'> </embed>");
																				$('#matbangtongthe').addClass('active');
																} else {
																				$('#matbangtongthe').removeClass('active');
																}
												});
								}
								$('.panel-heading').click(function () {});

								//single subdivision
								// Sliders
								var sliders = $('body').find('.swiper-container');
								if (sliders.length > 0) {
												sliders.each(function (index, element) {
																var slide_id = $(this).attr('id');
																var options = $(this).data('options');
																var navigations = {
																				nextEl: options.nextButton,
																				prevEl: options.prevButton
																};
																var paginations = {
																				el: options.pagination,
																				type: 'bullets'
																};
																options.pagination = paginations;
																options.navigation = navigations;
																if (options.slidesPerView > 1) {
																				if (options.slidesPerView < 7 && options.slidesPerView > 3) {
																								options.breakpoints = {
																												960: {
																																slidesPerView: 4
																												},
																												650: {
																																slidesPerView: 2
																												},
																												480: {
																																slidesPerView: 1
																												}
																								};
																				} else if (options.slidesPerView < 4) {
																								options.breakpoints = {
																												960: {
																																slidesPerView: 2
																												},
																												650: {
																																slidesPerView: 1
																												}
																								};
																				}
																}

																window[slide_id] = new Swiper('#' + slide_id, options);
												});

												if ($('body').find('.tabbed-2').length) {
																$('body').find('.tabbed-2').each(function () {
																				var t = $(this);
																				t.find('.tab-content:first').show();
																				t.find('.tab-title li:first').addClass('active');

																				t.find('.tab-title li a').click(function (event) {
																								event.preventDefault();
																								var tab = $(this).attr('href');
																								$(this).parent('li').addClass('active').siblings('li.active').removeClass('active');
																								$(".swiper-slide-active " + tab).show().siblings().not('.tab-title').hide();
																				});
																});
												}
								}
				});

				$(window).load(function () {});
})(jQuery);

jQuery(document).ready(function ($) {
				if ($('body').find('.tabbed').length > 0) {
								$('body').find('.tabbed').each(function (index, el) {
												var t = $(this);
												t.find('.tab-content:first').show();
												t.find('.tab-title').each(function (index, el) {
																$(this).find('li:first').addClass('active');
												});
												t.find('.tab-row').each(function (index, el) {
																$(this).find('.tab-content:first').show();
												});
								});

								$('.tab-title a').click(function (event) {
												event.preventDefault();

												if ($(this).parent('li').hasClass('active')) return false;

												var tab = $(this).attr('href');
												$(this).parent('li').addClass('active').siblings('.active').removeClass('active');
												$(tab).show().siblings('.tab-content').hide();

												if ($(this).parent('li').hasClass('lv1')) {
																$(tab).find('.tab-title').each(function (index, el) {
																				$(this).find('li:first').addClass('active');
																});
																$(tab).find('.tab-row').each(function (index, el) {
																				$(this).find('.tab-content:first').show();
																});
												}
								});
				}
});