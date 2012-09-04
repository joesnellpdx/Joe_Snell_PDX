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
	
	//$('.portfolio').equalizer(
	//{
		//	columns : '> li',
			//min: 300,
			//overflow: 'overflowed'
			
			//});
//$('.content-wrap').equalizer({ min: 200 });
	$("#insertContent").hide();

	if (document.documentElement.clientWidth < 766) {
		$("#insertContent").hide();
	}
	
	if (document.documentElement.clientWidth > 767) {
		
		$(".btn-about").click(function(event) {
				event.preventDefault();
				$('#insertContent').fadeOut('fast',function() {
					$('#insertContent').load('about-me #main', function () {
						$('#insertContent').addClass('insertCont');
						$('#insertContent').hide().fadeIn('normal');
					});
				});
		});
		
		$(".btn-blog").click(function(event) {
				event.preventDefault();
				$('#insertContent').fadeOut('fast',function() {
					$('#insertContent').load('blog #main', function () {
						$('#insertContent').addClass('insertCont');
						$('#insertContent').hide().fadeIn('normal');
					});
				});
		});
		
		$(".btn-work").click(function(event) {
				event.preventDefault();
				$('#insertContent').fadeOut('fast',function() {
					$('#insertContent').load('work #main', function () {
						$('#insertContent').addClass('insertCont');
						$('#insertContent').hide().fadeIn('normal');
					});
				});
		});
		
		$(".btn-contact").click(function(event) {
				event.preventDefault();
				$("#insertContent").fadeOut('fast',function() {
					$('#insertContent').load('contact #main', function () {
						$('#insertContent').addClass('insertCont');
						$('#insertContent').hide().fadeIn('normal');
					});
				});
		});
		
		
		//$('.btn-about').click(function() {
			//alert("Handler for .click() called.");
		
			//$('#insertContent').load('about-me .entry-content');
		//}); //click
		//$('.btn-blog a').click(function() {
			//$('#insertContent').load('blog .entry-content');
		//}); //click
	}// end media 768

}
(window.jQuery)


