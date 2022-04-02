/**
  * Theme Js file.
**/

// ===== Mobile responsive Menu ==== 

function online_pharmacy_menu_open_nav() {
  jQuery(".sidenav").addClass('open');
}
function online_pharmacy_menu_close_nav() {
  jQuery(".sidenav").removeClass('open');
}

// ===== Scroll to Top ==== 

jQuery(function($){
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {
      $('#return-to-top').fadeIn(200);
    } else {
      $('#return-to-top').fadeOut(200);
    }
  });
  $('#return-to-top').click(function() {
    $('body,html').animate({
      scrollTop : 0
    }, 500);
  });
});

// ===== Loader ==== 

jQuery('document').ready(function($){
  setTimeout(function () {
  jQuery(".loader").fadeOut("slow");
  },1000);
});
