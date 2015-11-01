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
		var scrollTop = 142;
		if($(window).scrollTop() >= scrollTop){
			$('nav').css({
				position : 'fixed',
				top : '0',
				"padding-top": '20px',
				"z-index": '9999',
				height: '120'
			});
		}
		if($(window).scrollTop() < scrollTop){
			$('nav').removeAttr('style');	
		}
	});
  
  // Active Nav Link
  $('nav ul li a').click(function(){
         $('nav ul li a').removeClass('active');
         $(this).addClass('active');
    });
});

// Registration/Login Tabs

jQuery('document').ready(function ($) {
				$('#flip-container').quickFlip();

				$('#flip-navigation li a').each(function () {
					$(this).click(function () {
						$('#flip-navigation li').each(function () {
							$(this).removeClass('selected');
						});
						$(this).parent().addClass('selected');
						var flipid = $(this).attr('id').substr(4);
						$('#flip-container').quickFlipper({}, flipid, 1);

						return false;
					});
				});
			});