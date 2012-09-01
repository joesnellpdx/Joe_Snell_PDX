// CUSTOM JS ADD
// FOR JOESNELL THEME
// ++++++++++++++++++++++++++++++++++++++++++

!function ($) {
	
	$(".nav-collapse").find("ul").addClass("nav");
	//$(".nav-collapse").find("#menu-primary-navigation").addClass("nav");
	$(".main-navigation").find("ul").addClass("masthead-links");
	$(".landingmenu").find("a").addClass("btn btn-large btn-inverse landing-button");
	$(".portfolioimg").find("img").addClass("thumbnail");
	$('.btn-about a').prepend('<p class="btn-icon"><i class="icon-user"></i></p>');
	$('.btn-work a').prepend('<p class="btn-icon"><i class="icon-briefcase"></i></p>');
	$('.btn-blog a').prepend('<p class="btn-icon"><i class="icon-pencil"></i></p>');
	$('.btn-contact a').prepend('<p class="btn-icon"><i class="icon-comment"></i></p>');
	//$(".landingmenu").find( "ul" ).css('margin', '0px');
	
	$('body').scrollTop(1);
	
	$('.portfolio').equalizer(
	{
			columns : '> li',
			min: 300,
			overflow: 'overflowed'
			
			});
//$('.content-wrap').equalizer({ min: 200 });

}
(window.jQuery)


