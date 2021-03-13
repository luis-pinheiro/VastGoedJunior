// =================================== Test


(function($){

 // $(document).ready(function() {
                // alert('Its Working');

    $(window).scroll(function(event) {

        //Goto Top
        if ($(this).scrollTop() > 300) {
            $('.gototop').fadeIn();
        } else {
            $('.gototop').fadeOut();
        }
    });

    $('.gototop').click(function() {
        $('html').animate({
            scrollTop: 0
        }, 500);
    });

    $.lazyLoadXT.onload = function() {
        var $el = $(this);
        $el
            .removeClass('lazy-hidden')
            .addClass('animated ');
    };

    /* Scroll to search*/
    $(".vgv-footer1").click(function () {
    $('html,body').animate({
        scrollTop: $("#search").offset().top - 115
    }, "slow");
});

/* Scroll to registreren*/
    $("#btn-registreren").click(function () {
    $('html,body').animate({
        scrollTop: $("#registreren").offset().top - 100
    }, "slow");
});

/* Lees meer scroll*/
 $("#btn-lees-meer").click(function () {
    $('html,body').animate({
        scrollTop: $("#waarom-vastgoed").offset().top - 100
    }, "slow");
});

 /* Scroll to puck */
 $(".co-p").click(function () {
    $('html,body').animate({
        scrollTop: $("#coach-puck").offset().top - 100
    }, "slow");
});

 /* Scroll to wie zijn wijn */
 $(".cnt-wzw").click(function () {
    $('html,body').animate({
        scrollTop: $("#wie-zijn-wij").offset().top - 100
    }, "slow");
});

// })
// console.log('\'Allo \'Allo!');

// ========================================== scoll
$(".nav-link").click(function(e) {
    e.preventDefault();
    var link = $(this);
    var href = link.attr("href");
    $("html,body").animate({
        scrollTop: $(href).offset().top - 80
    }, 500);
    link.closest(".navbar").find(".navbar-toggle:not(.collapsed)").click();
});

})(jQuery);