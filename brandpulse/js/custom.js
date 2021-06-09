/*Page Loader*/
jQuery(window).on('load', function(){
    jQuery(".se-pre-con").fadeOut("slow");
    jQuery("html").addClass("show-page");

    var newHeight = jQuery(".over-top-two-col-img").outerHeight();
    jQuery(".over-top-two-col-inner .col-6").height(newHeight);

    var newHeightb = jQuery(".caps-two-col-img").outerHeight();
    jQuery(".caps-two-col-section .col-6").height(newHeightb);
    setTimeout(function(){
      jQuery("html").addClass("add-3s");
    }, 2000);

});
/*Page Loader End*/

jQuery( document ).ready(function() {
  jQuery(".menu-icon-cover").click(function(){
    jQuery("html").toggleClass("show-menu");
  });

  jQuery(".team-caps-btn").click(function(){
    jQuery(this).next("show-menu");
  });

  jQuery('.team-caps-btn').click(function(e) {
    jQuery('.team-caps-block').slideUp().removeClass('show-team-caps');
    jQuery('.team-caps-block-active').not(this).removeClass('team-caps-block-active');
    if (jQuery(this).hasClass('team-caps-block-active')) {
      jQuery(this).removeClass('team-caps-block-active');
    jQuery(this).next('.team-caps-block').slideUp().removeClass('show-team-caps');
    }else{
        jQuery(this).addClass('team-caps-block-active');
        jQuery(this).next('.team-caps-block').slideDown().addClass('show-team-caps');
    }
  });
  jQuery('#over-ons-candidate .over-ons-block').click(function(e) {
    jQuery('.over-ons-block').not(this).removeClass('over-active');
    jQuery('.over-ons-block').not(this).prev().removeClass('over-active-pre');
    jQuery('.over-ons-block').not(this).next().removeClass('over-active-nxt');
    jQuery(this).toggleClass('over-active');
    jQuery(this).prev().toggleClass('over-active-pre');
    jQuery(this).next().toggleClass('over-active-nxt');
  });
});


/*Sticky Header*/
jQuery(window).scroll(function(){
  var sticky = jQuery('.site-header, .news-back-link,body'),
      scroll = jQuery(window).scrollTop();
  if (scroll >= 30) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});

/*Sticky Header End*/


jQuery('.mail-sec-caps .btn,.pricing-block__btn .btn').click(function(){
  var tab_id = jQuery(this).attr('data-tab');
  jQuery('.services-sticky-bg-block-caps .btn,.over-ons-block .overlay-link').removeClass('current');
  jQuery('html').removeClass('open-popup-html');
  jQuery('.services-inner-form').removeClass('open-service-form');
  jQuery(this).addClass('current');
  jQuery('html').addClass('open-popup-html');
  jQuery("#"+tab_id).addClass('open-service-form');
});
jQuery(".back-link").click(function(){
  jQuery('.services-inner-form').removeClass("open-service-form");
  jQuery('html').removeClass("open-popup-html");
  jQuery('.services-sticky-block .btn').removeClass("current");
});

jQuery(".close-icon").click(function(){
  jQuery('.register-popup-block').hide();
  jQuery('.register-popup-block').addClass('hide-popup');
});

width_counter = function(){
  	var win_width = jQuery( window ).width();
  	var con_width = jQuery('.container').width();
  	var count_width = win_width - con_width;
  	var count_2 = parseInt(count_width/2) - parseInt(15);
  	jQuery('.container-left').css('padding-left', count_2 + 15);
  	jQuery('.container-right').css('padding-right', count_2 + 15);
}

width_counter();

jQuery(window).on("load resize", function() {
	width_counter();
});


if(jQuery(window).width() <= 1023){
  jQuery('.mobile-carousel-style .container').addClass('container-left');
}



/*-------Slectbox auto width Start-------*/


/*-------Slectbox auto width End-------*/