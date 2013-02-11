  jQuery(document).ready(function($) {
    if (matchMedia('only screen and (min-width: 41.26em)').matches) {

        $('#content article').load('about #content article', function () {
            picturefill();
            $( this ).hide().fadeIn('slow');
        });

    }

    $(window).resize(function(){
      if ($('#content .loading-div').length) 

        {

          if (matchMedia('only screen and (min-width: 41.26em)').matches)
            {

            $('#content article').load('about #content article',
              function () {
                picturefill();
                $( this ).hide().fadeIn('slow');
              });

          }
      }
    });

  });