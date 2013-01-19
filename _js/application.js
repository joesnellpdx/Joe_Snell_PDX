// CUSTOM JS ADD
// FOR JOESNELL THEME
// ++++++++++++++++++++++++++++++++++++++++++

(function ($) {

  
  
// });

  var start = function () {

    // Give post excerpts in portfolio and blog loop equal height

      var equalheight = function(container){

      var currentTallest = 0,
           currentRowStart = 0,
           rowDivs = new Array(),
           $el,
           topPosition = 0;

       $('#content-loop a').each(function() {

         $el = $(this);
         $($el).height('auto');
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
      };

      var navicons = function () {

        $('.add-icon-user a').addClass('icon-user');
        $('.add-icon-pencil a').addClass('icon-pencil');
        $('.add-icon-briefcase a').addClass('icon-briefcase');
        $('.add-icon-comment a').addClass('icon-comment');

      };

    // Conditionally load sidebar

      var sidebarload = function () {

        if ($('#sidebar .loading-div').length)

          {

            if (matchMedia('only screen and (min-width: 62em)').matches)
              {

               $('#sidebar').load('load #secondary', function () {
                  $( this ).hide().fadeIn('slow'),
                  $(Chirp);
              });

          }
        }

      };

    // Matchmedia application

      var matchmediaapply = function () {

        $("[data-append],[data-replace],[data-after],[data-before]").ajaxInclude();

      };



  // functions to call
    
    navicons();
    equalheight('.main article');
    sidebarload();

  };

  $(window).load(function(){
    start();
  });


  $(window).resize(function(){
    start();
  });

})(jQuery);