$(document).ready(function() {
  $('.wizard1').show();
  $('.wizard2').hide();
  $('#eventMan').hide();
  $('#activities').hide();
  $('#venues').hide();
  $('#legal').hide();
  $('#transport').hide();
  $('#technical').hide();
  $('#music').hide();
  $('#food').hide();
  $('#floral').hide();
  $('#user').hide();
  $('#supplier').hide();
  $('#registra').show();
  $('#package').hide();
  $('.top-nav').hide();
  $('.panel-content').hide();
  $('.tab-body').hide();
  $('.panel-container').hide();
  $('#formQuote').hide();
  $('#company-tab').hide();

  $("#gallery-tab").addClass("hide-slider");
});

$('#company-link').click(function() {
  $('#company-tab').show();
});

$('#gallery-link').click(function() {
  $("#addimages").addClass("show-slider");
});

$('#navGallerySlider').click(function() {
  $('#gallery-tab').show();
  $("#gallery-link").addClass("active");
  $("#company-link").removeClass("active");
  $("#addimages").addClass("show-slider");

});

$('#navCompanyDetails').click(function() {
  $('#company-tab').show();
  $("#company-link").addClass("active");
  $("#user-link").removeClass("active");
});

$('#getQuote').click(function() {
  $('#quoteContainer').hide();
  $('.top-nav').show();
  $('.panel-content').show();
  $('.tab-body').show();
  $('.panel-container').show();
});

$('#foodNav').click(function() {
  $(".deco").removeClass("active");
  $(".foodBev").addClass("active");
});
$('#getQuoteForm').click(function() {
  $('.panel-content').hide();
  $('.tab-body').hide();
  $('.panel-container').hide();
  $('#formQuote').show();
});

$('#musicNav').click(function() {
  $(".foodBev").removeClass("active");
  $(".entertainment").addClass("active");
});

$('#backEntertainmentNav').click(function() {
  $(".entertainment").removeClass("active");
  $(".foodBev").addClass("active");
});

$('#entertainmentNav').click(function() {
  $(".entertainment").removeClass("active");
  $(".technical").addClass("active");
});

$('#backFoodNav').click(function() {
  $(".foodBev").removeClass("active");
  $(".deco").addClass("active");
});

$('#technicalNav').click(function() {
  $(".technical").removeClass("active");
  $(".transport").addClass("active");
});

$('#venuesNav').click(function() {
  $(".venues").removeClass("active");
  $(".eventMan").addClass("active");
});

$('#backTechnicalNav').click(function() {
  $(".technical").removeClass("active");
  $(".entertainment").addClass("active");
});

$('#backTransportNav').click(function() {
  $(".transport").removeClass("active");
  $(".technical").addClass("active");
});

$('#transportNav').click(function() {
  $(".transport").removeClass("active");
  $(".venues").addClass("active");
});

$('#eventNav').click(function() {
  $(".eventMan").removeClass("active");
  $(".activities").addClass("active");
});

$('#backVenuesNav').click(function() {
  $(".venues").removeClass("active");
  $(".transport").addClass("active");
});

$('#backEventNav').click(function() {
  $(".eventMan").removeClass("active");
  $(".venues").addClass("active");
});

$('#backActivitiesNav').click(function() {
  $(".activities").removeClass("active");
  $(".eventMan").addClass("active");
});

$('#activitiesNav').click(function() {
  $(".activities").removeClass("active");
  $(".legal").addClass("active");
});

$('#regUser').click(function() {
  $('#registra').hide();
  $('#user').hide();
  $('.wizard1').hide();
  $('#package').show();
});

$('#regSupplier').click(function() {
  $('#registra').hide();
  $('#supplier').show();
});
$('#packStandard').click(function() {
  $('#user').show();
  $('.wizard1').show();
  $('#package').hide();
});
$('#packPlus').click(function() {
  $('#user').show();
  $('.wizard1').show();
  $('#package').hide();
});
$('#packPremium').click(function() {
  $('#user').show();
  $('.wizard1').show();
  $('#package').hide();
});

$('#search_bar_container').affix({
  offset: {
    top: 140
  }
});

$('#sticky-search').hide();
$('#hero').mouseover(function() {
  $('#sticky-search').show();
  //alert();
});
$('#position').mouseover(function() {
  $('#sticky-search').show();
  //alert();
});

$('.wizard1-btn').click(function() {
  $('.wizard1').hide();
  $('.wizard2').show();
});

$('#activities-thumb').click(function() {
  $('#categories').hide();
  $('#activities').show();
  $('#eventMan').hide();
  $('#legal').hide();
  $('#venues').hide();
  $('#transport').hide();
  $('#technical').hide();
  $('#music').hide();
  $('#food').hide();
  $('#floral').hide();
});

$('#event-thumb').click(function() {
  $('#categories').hide();
  $('#activities').hide();
  $('#eventMan').show();
  $('#legal').hide();
  $('#venues').hide();
  $('#transport').hide();
  $('#technical').hide();
  $('#music').hide();
  $('#food').hide();
  $('#floral').hide();
});

$('#legal-thumb').click(function() {
  $('#categories').hide();
  $('#activities').hide();
  $('#eventMan').hide();
  $('#legal').show();
  $('#venues').hide();
  $('#transport').hide();
  $('#technical').hide();
  $('#music').hide();
  $('#food').hide();
  $('#floral').hide();
});

$('#venues-thumb').click(function() {
  $('#categories').hide();
  $('#activities').hide();
  $('#eventMan').hide();
  $('#legal').hide();
  $('#venues').show();
  $('#transport').hide();
  $('#technical').hide();
  $('#music').hide();
  $('#food').hide();
  $('#floral').hide();
});

$('#transport-thumb').click(function() {
  $('#categories').hide();
  $('#activities').hide();
  $('#eventMan').hide();
  $('#legal').hide();
  $('#venues').hide();
  $('#transport').show();
  $('#technical').hide();
  $('#music').hide();
  $('#food').hide();
  $('#floral').hide();
});

$('#technical-thumb').click(function() {
  $('#categories').hide();
  $('#activities').hide();
  $('#eventMan').hide();
  $('#legal').hide();
  $('#venues').hide();
  $('#transport').hide();
  $('#technical').show();
  $('#music').hide();
  $('#food').hide();
  $('#food').hide();
  $('#floral').hide();
});

$('#food-thumb').click(function() {
  $('#categories').hide();
  $('#activities').hide();
  $('#eventMan').hide();
  $('#legal').hide();
  $('#venues').hide();
  $('#transport').hide();
  $('#technical').hide();
  $('#music').hide();
  $('#food').show();
  $('#floral').hide();
});

$('#floral-thumb').click(function() {
  $('#categories').hide();
  $('#activities').hide();
  $('#eventMan').hide();
  $('#legal').hide();
  $('#venues').hide();
  $('#transport').hide();
  $('#technical').hide();
  $('#music').hide();
  $('#food').hide();
  $('#floral').show();
});

$('#music-thumb').click(function() {
  $('#categories').hide();
  $('#activities').hide();
  $('#eventMan').hide();
  $('#legal').hide();
  $('#venues').hide();
  $('#transport').hide();
  $('#technical').hide();
  $('#music').show();
  $('#food').hide();
  $('#floral').hide();
});

/* ==============================================
    Preload
=============================================== */
$(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({
      'overflow': 'visible'
    });
  })
  /* ==============================================
    Sticky nav
  =============================================== */
$(window).scroll(function() {
  'use strict';
    $('header').addClass("sticky");
});

/* ==============================================
    Menu
=============================================== */
$('a.open_close').on("click", function() {
  $('.main-menu').toggleClass('show');
  $('.layer').toggleClass('layer-is-visible');
});
$('a.show-submenu').on("click", function() {
  $(this).next().toggleClass("show_normal");
});
$('a.show-submenu-mega').on("click", function() {
  $(this).next().toggleClass("show_mega");
});
if ($(window).width() <= 480) {
  $('a.open_close').on("click", function() {
    $('.cmn-toggle-switch').removeClass('active')
  });
}

$(window).bind('resize load', function() {
  if ($(this).width() < 991) {
    $('.collapse#collapseFilters').removeClass('in');
    $('.collapse#collapseFilters').addClass('out');
  } else {
    $('.collapse#collapseFilters').removeClass('out');
    $('.collapse#collapseFilters').addClass('in');
  }
});
/* ==============================================
    Overaly mask form + incrementer
=============================================== */
$('.expose').on("click", function(e) {
  "use strict";
  $(this).css('z-index', '2');
  $('#overlay').fadeIn(300);
});
$('#overlay').click(function(e) {
  "use strict";
  $('#overlay').fadeOut(300, function() {
    $('.expose').css('z-index', '1');
  });
});

/* ==============================================
    Common
=============================================== */

<!-- Tooltip -->    
$('.tooltip-1').tooltip({
  html: true
});

//accordion 
function toggleChevron(e) {
  $(e.target)
    .prev('.panel-heading')
    .find("i.indicator")
    .toggleClass('icon-plus icon-minus');
}
$('#accordion').on('hidden.bs.collapse shown.bs.collapse', toggleChevron);

/* ==============================================
    Animation on scroll
=============================================== */
new WOW().init();

/* ==============================================
    Video modal dialog + Parallax + Scroll to top + Incrementer
=============================================== */
$(function() {
  'use strict';
  $('.video').magnificPopup({
    type: 'iframe'
  }); /* video modal*/
  $('.parallax-window').parallax({}); /* Parallax modal*/
  // Image popups

  $('.magnific-gallery').each(function() {
    $(this).magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  });

  $('.dropdown-menu').on("click", function(e) {
    e.stopPropagation();
  }); /* top drodown prevent close*/

  /* Hamburger icon*/
  var toggles = document.querySelectorAll(".cmn-toggle-switch");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener("click", function(e) {
      e.preventDefault();
      (this.classList.contains("active") === true) ? this.classList.remove("active"): this.classList.add("active");
    });
  };

  /* Scroll to top*/
  $(window).scroll(function() {
    if ($(this).scrollTop() != 0) {
      $('#toTop').fadeIn();
    } else {
      $('#toTop').fadeOut();
    }
  });
  $('#toTop').on("click", function() {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
  });

  /* Input incrementer*/
  $(".numbers-row").append('<div class="inc button_inc">+</div><div class="dec button_inc">-</div>');
  $(".button_inc").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    $button.parent().find("input").val(newVal);
  });
});