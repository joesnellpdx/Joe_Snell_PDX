// CUSTOM JS ADD
// FOR JOESNELL THEME
// ++++++++++++++++++++++++++++++++++++++++++
!function(e){e("body").addClass("js");var t=e("#menu"),n=e(".menu-link");$containerfluid=e(".container-fluid");n.click(function(){n.toggleClass("active");t.toggleClass("active");$containerfluid.toggleClass("active");return!1});e("body").scrollTop(1);e("#sidebar").hide();var r;e(window).resize(function(){clearTimeout(r);r=setTimeout(resizeHandler(),1e3)})}(window.jQuery);