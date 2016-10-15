jQuery(function() { jQuery('body').hide().show(); });
var today = new Date();

$('.year').text(today.getFullYear());

$(document).ready(function() {
    $(".menuWrapperOuter").sticky({
        topSpacing: 0,
        className: "sticked"
    });
});

$('.menuWrapper').mouseenter(function() {
    $('.menuItems').stop().slideDown(300);
}).mouseleave(function() {
    $('.menuItems').stop().slideUp(300);
});


$(document).ready(function() {

    if ($('.leftNav dd')) {
        var a = $('.leftNav dd');
        var x;
        for (x = 0; x < a.length; x++) {
            if ('.' + window.location.pathname.replace('/nova', '') + window.location.search === (a[x].childNodes[0].getAttribute('href'))) {

                a[x].setAttribute('class', 'current');
            }
        }
    }

    // Requried: Navigation bar drop-down
    $("nav ul li").hover(function() {
        $(this).addClass("active");
        $(this).find("ul").show().animate({
            opacity: 1
        }, 400);
    }, function() {
        $(this).find("ul").hide().animate({
            opacity: 0
        }, 200);
        $(this).removeClass("active");
    });

    // Requried: Addtional styling elements
    $('nav ul li ul li:first-child').prepend('<li class="arrow"></li>');
    $('nav ul li:first-child').addClass('first');
    $('nav ul li:last-child').addClass('last');
    $('nav ul li ul').parent().append('<span class="dropdown"></span>').addClass('drop');

});

$('#tabs li a').click(function(e) {

    $('#tabs li, #content .current').removeClass('current').removeClass('fadeInLeft');
    $(this).parent().addClass('current');
    var currentTab = $(this).attr('href');
    $(currentTab).addClass('current fadeInLeft');
    e.preventDefault();

});



var h = $(window).height() - ($('header').height() + $('footer').height());
if (h > 0) {
    $('.content').css('min-height', h + 'px');
}
