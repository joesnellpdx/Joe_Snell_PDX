if (document.documentElement.clientWidth > 980) {
    $('.navbtn').removeClass('icon-reorder').addClass('icon-arrow-left');
    $('.navbtn').addClass('menu-link-display');

	  $('#main a.menu-link').click(function(){
		  $(this).toggleClass('menu-link-active');
		});
	  $('#main a.menu-link-right').click(function(){
		  $(this).toggleClass('menu-link-right-active');
		});
}