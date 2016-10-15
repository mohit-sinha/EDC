var today = new Date();
$('.year').text(today.getFullYear());

$(document).ready(function() {
    $('#slider2').leanSlider({
        directionNav: '#slider-direction-nav',
        controlNav: '#slider-control-nav'
    });
});

$(document).ready(function() {
    $(".menuWrapperOuter").sticky({
        topSpacing: 0,
        className: "sticked"
    });
});

$(document).ready(function() {

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

String.prototype.trimToLength = function(m) {
    return (this.length > m) ? jQuery.trim(this).substring(0, m).split(" ").slice(0, -1).join(" ") + "..." : this;
};

var x = $('.news ul .headline');
for (var i = 0; i < x.length; i++) {
    x[i].innerHTML = x[i].innerHTML.trimToLength(150);
}

if (!($('.no-news')[0])) {
    $('.nano').easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'slow',
        interval: 5000,
        height: 'auto',
        visible: 2,
        mousePause: 1,
        controls: {
            up: '.news-down',
            down: '.news-up',
            toggle: '.news-play',
            playText: 'Play',
            stopText: 'Stop'
        }
    });

    $('.news').hover(function() {
        $('.news>.pager').css('opacity', 1);
    }, function() {
        $('.news>.pager').css('opacity', 0);
        $('.news-play').click();
    });


} else {
    $('.news').css('height', '100px');
}

var h = $(window).height() - ($('header').height() + $('footer').height());
if (h > 0) {
    $('.content').css('min-height', h + 'px');
}