// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
$(document).ready(function(){
    $('.modal').modal();
    jQuery(document).ready(function(){
      jQuery('#modal1').modal('open');
    });
    $('.parallax').parallax();
    $('.scrollspy').scrollSpy();
    $('.collapsible').collapsible();
    $('.pushpin').pushpin();
    $("#sticky").sticky({topSpacing:100});
    $('.slider').slider({
        indicators: true,
        transition: 1000,
        interval: 10000
    });
    jQuery(function(){
      jQuery("#bgndVideo").YTPlayer();
    });

  $('.toggle-overlay').click(function() {
    $('aside').toggleClass('open');
  });

  $('#menu-item-10').hover(function() {
    $('#menu-item-10 ul.sub-menu').toggleClass('open-menu');
  });

  $('#menu-item-11').hover(function() {
    $('#menu-item-11 ul.sub-menu').toggleClass('open-menu');
  });

  $('#menu-item-12').hover(function() {
    $('#menu-item-12 ul.sub-menu').toggleClass('open-menu');
  });

  $('#menu-item-14').hover(function() {
    $('#menu-item-14 ul.sub-menu').toggleClass('open-menu');
  });

});

$(function() {
    var header = $(".navegacao");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            header.removeClass('invisible').addClass("almost-black");
        } else {
            header.removeClass("almost-black").addClass('invisible');
        }
    });
});