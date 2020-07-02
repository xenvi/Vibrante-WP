  jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();

    if (scroll > 50) {
        jQuery("header").addClass("smallnav");
    } else {
        jQuery("header").removeClass("smallnav");
    }
});

function toggle() {
    if ( jQuery( window ).width() >= 800 ) {
      jQuery( '.nav.mobile-menu' ).hide();
      jQuery( '.nav.desktop-menu' ).show();
    } else {
      jQuery( '.nav.desktop-menu' ).hide();
      jQuery( '.nav.mobile-menu' ).show();
    }
}

toggle();

jQuery( window ).resize( function () {
    toggle();
} );