jQuery(document).ready(function($){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")||location.hostname===this.hostname){var i=$(this.hash);if(i=i.length?i:$("[name="+this.hash.slice(1)+"]"),i.length)return $("html,body").animate({scrollTop:i.offset().top-32},1e3),!1}})}),jQuery(document).ready(function($){$(window).scroll(function(){var i=142;$(window).scrollTop()>=i&&$("nav").css({position:"fixed",top:"0","padding-top":"20px","z-index":"9999",height:"120"}),$(window).scrollTop()<i&&$("nav").removeAttr("style")}),$("nav ul li a").click(function(){$("nav ul li a").removeClass("active"),$(this).addClass("active")})}),jQuery("document").ready(function($){$("#flip-container").quickFlip(),$("#flip-navigation li a").each(function(){$(this).click(function(){$("#flip-navigation li").each(function(){$(this).removeClass("selected")}),$(this).parent().addClass("selected");var i=$(this).attr("id").substr(4);return $("#flip-container").quickFlipper({},i,1),!1})})});