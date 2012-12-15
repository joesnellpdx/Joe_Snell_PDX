// CUSTOM JS ADD
// FOR JOESNELL THEME
// ++++++++++++++++++++++++++++++++++++++++++

(function ($) { 

// $('body').addClass('js');
//   var $menu = $('#menu'),
//     $menulink = $('.menu-link');
//     $menulinkleft = $('.menu-link-left');
//     $menulinkright = $('.menu-link-right');
//     $sidebar = $('#sidebar');
//     $containerfluid = $('.container-fluid');
  
// $menulink.click(function() {
//   $menulink.toggleClass('active');
//   $menu.toggleClass('active');
//   $containerfluid.toggleClass('active');
//   return false;
// });
// $menulinkleft.click(function() {
//   $menulinkleft.toggleClass('active');
//   $menu.toggleClass('active');
//   $containerfluid.toggleClass('active');
//   return false;
// });
// $menulinkright.click(function() {
//   $menulinkright.toggleClass('active');
//   $sidebar.toggleClass('active');
//   $containerfluid.toggleClass('activeright');
//   return false;
// });


equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $('#content-loop a').each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function(){
  equalheight('.main article');
});


// //var resizeTimer;
$(window).resize(function(){
	// clearTimeout(resizeTimer);
	// resizeTimer = setTimeout(resizeHandler(), 1000);
  	equalheight('.main article');
});

$('body').scrollTop(1);

}
)(jQuery);