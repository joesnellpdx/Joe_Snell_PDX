// CUSTOM JS ADD
// FOR JOESNELL THEME
// ++++++++++++++++++++++++++++++++++++++++++
!function(e){function t(){if(document.documentElement.clientWidth<766){e("#insertContent").hide();e(".basemenu").find("a").removeClass("btn btn-large btn-inverse landing-button");e(".nav-collapse").find("ul").addClass("nav")}if(document.documentElement.clientWidth>767){e(".basemenu").find("a").addClass("btn btn-large btn-inverse landing-button");e(".nav-collapse").find("ul").removeClass("nav")}if(document.documentElement.clientWidth<980){e("#content").removeClass("span6").addClass("span8");e(".brand-text").removeClass("span10").removeClass("offset2");e("#sidebar").hide();e(".menu li").hover(function(){e(this).find("i").animate({opacity:1})},function(){e(this).find("i").animate({opacity:1})})}if(document.documentElement.clientWidth>980){e("#content").removeClass("span8").addClass("span6");e(".brand-text").addClass("span10").addClass("offset2");e("#sidebar").show("normal");e(".menu li").hover(function(){e(this).find("i").animate({opacity:1},500)},function(){e(this).find("i").animate({opacity:0},500)})}}e("body").scrollTop(1);e("#sidebar").hide();var n;e(window).resize(function(){clearTimeout(n);n=setTimeout(t(),1e3)});e(".main-navigation").find("ul").addClass("masthead-links");e(".landingmenu").find("a").addClass("btn btn-large btn-inverse landing-button");e(".portfolioimg").find("img").addClass("thumbnail");e(".btn-about a").prepend('<p class="btn-icon"><i class="icon-user"></i></p>');e(".btn-work a").prepend('<p class="btn-icon"><i class="icon-briefcase"></i></p>');e(".btn-blog a").prepend('<p class="btn-icon"><i class="icon-pencil"></i></p>');e(".btn-contact a").prepend('<p class="btn-icon"><i class="icon-comment"></i></p>');e(".content-link-list a").prepend('<i class="icon-link"></i>');e(".contact-intro").prepend('<div class="quick-links"><a href="mailto:joesnellpdx@gmail.com"><i class="icon-envelope"></i></a><a href="https://twitter.com/joesnellpdx" target="_blank"><i class="icon-twitter"></i></a><a href="http://www.linkedin.com/in/joesnellpdx" target="_blank"><i class="icon-linkedin"></i></a><a href="tel:+15037011968"><i class="icon-phone"></i></a></div>');t()}(window.jQuery);