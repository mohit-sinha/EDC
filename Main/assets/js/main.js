jQuery(function() {
    jQuery("body").hide().show()
});
var today = new Date;
$(".year").text(today.getFullYear()), $(document).ready(function() {
    $(".menuWrapperOuter").sticky({
        topSpacing: 0,
        className: "sticked"
    })
}), $(document).ready(function() {
    if ($(".leftNav dd")) {
        var t = $(".leftNav dd"),
            a;
        for (a = 0; a < t.length; a++) "." + window.location.pathname.replace("/nova", "") + window.location.search === t[a].childNodes[0].getAttribute("href") && t[a].setAttribute("class", "current")
    }
    $("nav ul li").hover(function() {
        $(this).addClass("active"), $(this).find("ul").stop(!0, !0).show().animate({
            opacity: 1
        }, 400)
    }, function() {
        $(this).find("ul").stop(!0, !0).hide().animate({
            opacity: 0
        }, 200), $(this).removeClass("active")
    }), $("nav ul li ul li:first-child").prepend('<li class="arrow"></li>'), $("nav ul li:first-child").addClass("first"), $("nav ul li:last-child").addClass("last"), $("nav ul li ul").parent().append('<span class="dropdown"></span>').addClass("drop")
}), $("#tabs li a").click(function(t) {
    $("#tabs li, #content .current").removeClass("current").removeClass("fadeInLeft"), $(this).parent().addClass("current");
    var a = $(this).attr("href");
    $(a).addClass("current fadeInLeft"), t.preventDefault()
});
var h = $(window).height() - ($("header").height() + $("footer").height());
h > 0 && $(".content").css("min-height", h + "px");