  jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();

    if (scroll > 50) {
        jQuery("header").addClass("smallnav");
    } else {
        jQuery("header").removeClass("smallnav");
    }
});