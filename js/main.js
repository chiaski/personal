new WOW().init();

$(function () {
    $('a').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({ scrollTop: target.offset().top }, 1000);
                return false;
            }
        }
    });
});


$(function () {
    $("#open").click(function (e) {
        $("#ok, #bg").fadeIn();
        return false;
    });
    $("#bg").click(function() {
        $("#bg").delay(600).fadeOut();
        $("#ok").delay(300).fadeOut();
    });
});