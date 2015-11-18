/*
*  jQuery stuff for the whole site
*  Do not use $() for jQuery variable.
*  Use jQuery()

jQuery(document).ready(function(){
    jQuery(#somefunction) ...
});
*/
//Main Navigation Sticky Top

// Page Scroll
jQuery(document).ready(function ($) {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') || location.hostname === this.hostname) {

			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top - 32
				}, 1000);
				return false;
			}
		}
	});
});

// Fixed Nav
jQuery(document).ready(function ($) {
	$(window).scroll(function(){
		var scrollTop = 200;
		if($(window).scrollTop() >= scrollTop){
			$('nav').css({
				position : 'fixed',
				top : '0',
				"padding-top": '0px',
				"z-index": '9999',
				height: '60'
			});
			$('#nav-toggle-tall').css({
				display: 'block',
				opacity: '1',
				"max-width" : '1400px',
				margin: '0 auto'
			});
			$('.mbb_head').css({
				"max-width": '100%'
			});
			$('.mbb_head_right').css({
				width: '100%',
				"padding-left": '0'
			});
			$('.main-navigation').css({
				"margin-top" : '0',
				background : 'rgba(255,255,255,.9)',
				padding: '0 0 0 175px',
				"max-width": '100%'
			});
		}
		if($(window).scrollTop() < scrollTop){
			$('nav').removeAttr('style');
			$('#nav-toggle-tall').css({
				display: 'none',
				opacity: '0'
			});
			$('.mbb_head').css({
				"max-width": '1300px'
			});
			$('.mbb_head_right').css({
				width: '75%'
			});
			$('.main-navigation').css({
				margin: '60px 0 0 0'
			});
		}
	});
  
  // Active Nav Link
  $('nav ul li a').click(function(){
         $('nav ul li a').removeClass('active');
         $(this).addClass('active');
    });
});
