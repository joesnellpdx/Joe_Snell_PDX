// CUSTOM JS ADD
// FOR JOESNELL THEME
// ++++++++++++++++++++++++++++++++++++++++++

!function ($) {

$('body').addClass('js');
  var $menu = $('#menu'),
    $menulink = $('.menu-link');
    $containerfluid = $('.container-fluid');
  
$menulink.click(function() {
  $menulink.toggleClass('active');
  $menu.toggleClass('active');
  $containerfluid.toggleClass('active');
  return false;
});






// function resizeHandler(){
	
// 	if (document.documentElement.clientWidth < 766) {
// 		$("#insertContent").hide();
// 		$(".nav-collapse").find("ul").addClass("nav");
// 	}
	
// 	if (document.documentElement.clientWidth > 767) {
// 		$(".nav-collapse").find("ul").removeClass("nav");
		
// 		 $(".btn-about").click(function(event) {
// 				event.preventDefault();
// 				$('#insertContent').fadeOut('fast',function() {
// 					$('#insertContent').load('about-me #main', function () {
// 						$('#insertContent').addClass('insertCont');
// 						$('#insertContent').hide().fadeIn('normal');
// 					});
// 				});
// 		});
		
// 		$(".btn-blog").click(function(event) {
// 				event.preventDefault();
// 				$('#insertContent').fadeOut('fast',function() {
// 					$('#insertContent').load('blog #main', function () {
// 						$('#insertContent').addClass('insertCont');
// 						$('#insertContent').hide().fadeIn('normal');
// 					});
// 				});
// 		});
		
// 		$(".btn-work").click(function(event) {
// 				event.preventDefault();
// 				$('#insertContent').fadeOut('fast',function() {
// 					$('#insertContent').load('work #main', function () {
// 						$('#insertContent').addClass('insertCont');
// 						$('#insertContent').hide().fadeIn('normal');
// 					});
// 				});
// 		});
		
// 		$(".btn-contact").click(function(event) {
// 				event.preventDefault();
// 				$("#insertContent").fadeOut('fast',function() {
// 					$('#insertContent').load('contact #main', function () {
// 						$('#insertContent').addClass('insertCont');
// 						$('#insertContent').hide().fadeIn('normal');
// 					});
// 				});
// 		});
		
		
// 		//$('.btn-about').click(function() {
// 			//alert("Handler for .click() called.");
		
// 			//$('#insertContent').load('about-me .entry-content');
// 		//}); //click
// 		//$('.btn-blog a').click(function() {
// 			//$('#insertContent').load('blog .entry-content');
// 		//}); //click 
// 	} //end media 768
// 	if (document.documentElement.clientWidth < 980) {
// 		$('#content').removeClass('span6').addClass('span8');
// 		$('.brand-text').removeClass('span10').removeClass('offset2');
// 		$('#sidebar').hide();
// 		$('.menu li').hover(
			
// 				function() {
// 					$(this).find('i').animate({
// 						opacity: 1
// 					});
// 				}, // end 1st hover function
// 				function() {
// 					$(this).find('i').animate({
// 						opacity: 1
// 					});
// 				} // end 2nd hover function
				
// 			);// end hover
// 		/*$('.nav-collapse li').hover(
			
// 				function() {
// 					$(this).find('i').css('color','blue' );
// 				}, // end 1st hover function
// 				function() {
// 					$(this).find('i').css('color','green' );
// 				} // end 2nd hover function
				
// 			);// end hover */
			
			
// 	}
// 	if (document.documentElement.clientWidth > 980) {
// 		$('#content').removeClass('span8').addClass('span6');
// 		$('.brand-text').addClass('span10').addClass('offset2');
// 		$('#sidebar').show('normal');
// 		$('.menu li').hover(
			
// 				function() {
// 					$(this).find('i').animate({
// 						opacity: 1
// 					}, 500 );
// 				}, // end 1st hover function
// 				function() {
// 					$(this).find('i').animate({
// 						opacity: 0
// 					}, 500 );
// 				} // end 2nd hover function
				
// 			);// end hover
// 		/*$('.nav-collapse li').hover(
			
// 				function() {
// 					$(this).find('i').css('color','blue' );
// 				}, // end 1st hover function
// 				function() {
// 					$(this).find('i').css('color','green' );
// 				} // end 2nd hover function
				
// 			);// end hover */
			
			
// 	}
// }

	
	$('body').scrollTop(1);
	$('#sidebar').hide();
	var resizeTimer;
	$(window).resize(function() {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(resizeHandler(), 1000);
	});


	
	//$(".nav-collapse").find("#menu-primary-navigation").addClass("nav");
	//$(".main-navigation").find("ul").addClass("masthead-links");
	// $(".landingmenu").find("a").addClass("btn btn-large btn-inverse landing-button");
	// $("nav[role=navigation] li a").addClass("btn btn-inverse");
	//$(".portfolioimg").find("img").addClass("thumbnail");
	// $('.btn-about a').prepend('<p class="btn-icon"><i class="icon-user"></i></p>');
	// $('.btn-work a').prepend('<p class="btn-icon"><i class="icon-briefcase"></i></p>');
	// $('.btn-blog a').prepend('<p class="btn-icon"><i class="icon-pencil"></i></p>');
	// $('.btn-contact a').prepend('<p class="btn-icon"><i class="icon-comment"></i></p>');
	//$('.content-link-list a').prepend('<i class="icon-link"></i>');
	//$('.contact-intro').prepend('<div class="quick-links"><a href="mailto:joesnellpdx@gmail.com"><i class="icon-envelope"></i></a><a href="https://twitter.com/joesnellpdx" target="_blank"><i class="icon-twitter"></i></a><a href="http://www.linkedin.com/in/joesnellpdx" target="_blank"><i class="icon-linkedin"></i></a><a href="tel:+15037011968"><i class="icon-phone"></i></a></div>');
	
	//$(".landingmenu").find( "ul" ).css('margin', '0px');
	

	
	//$('.portfolio').equalizer(
	//{
		//	columns : '> li',
			//min: 300,
			//overflow: 'overflowed'
			
			//});
//$('.content-wrap').equalizer({ min: 200 });
	// $("#insertContent").hide();

//	resizeHandler();

}
(window.jQuery)