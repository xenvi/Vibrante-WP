jQuery(".header").click(function() {
    jQuery('.content').slideToggle().toggleClass('active');
    if (jQuery('.content').hasClass('active')) {
      jQuery('.header span').text('Collapse');
    } else {
      jQuery('.header span').text('Expand');
    }
  });
  jQuery('button').click(function(){
      jQuery(".header").trigger('click');
  })

  jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();

    if (scroll > 110) {
        jQuery("header").addClass("smallnav");
    } else {
        jQuery("header").removeClass("smallnav");
    }
});