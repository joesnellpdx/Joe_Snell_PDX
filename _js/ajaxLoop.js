// ajaxLoop.js
jQuery(function($){
    
    if (document.documentElement.clientWidth > 660) {
        var page = 1;
        var loading = true;
        var $window = $(window);
        var $content = $("body.landingbody .content-landing");
        var load_posts = function(){
                $.ajax({
                    type       : "GET",
                    data       : {numPosts : 12, pageNumber: page},
                    dataType   : "html",
                    url        : "http://WWW.joesnellpdx.com/wp-content/themes/Joe_Snell_PDX/loopHandler.php",
                    beforeSend : function(){
                        if(page != 1){
                            $content.append('<div id="temp_load" style="text-align:center">\
                                <img src="../_img/ajax-loader.gif" />\
                                </div>');
                        }
                    },
                    success    : function(data){
                        $data = $(data);
                        if($data.length){
                            $data.hide();
                            $content.append($data);
                            $data.fadeIn(500, function(){
                                $("#temp_load").remove();
                                loading = false;
                            });
                        } else {
                            $("#temp_load").remove();
                        }
                    },
                    error     : function(jqXHR, textStatus, errorThrown) {
                        $("#temp_load").remove();
                        alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                    }
            });
        }
        // $window.scroll(function() {
        //     var content_offset = $content.offset();
        //     console.log(content_offset.top);
        //     if(!loading && ($window.scrollTop() +
        //         $window.height()) > ($content.scrollTop() +
        //         $content.height() + content_offset.top)) {
        //             loading = true;
        //             page++;
        //             load_posts();
        //     }
        // });
        
        load_posts().ajaxComplete(function(event,request, settings){
           $(this).equalheight('.main article');
         });
    }
    $(window).resize(function(){
        if (document.documentElement.clientWidth < 660) {
            $('body.landingbody #content-loop').empty();
        }
        if (document.documentElement.clientWidth > 660) {
            if ($('.body.landingbody #content-loop:empty').length) {

                $(window).load(function(){
  equalheight('.main article');
});
            };

        }
    });
});