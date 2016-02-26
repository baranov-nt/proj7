/**
 * Created by phpNT on 25.02.2016.
 */
$(document).ready(function(){
    var h = $(window).height();

    $(window).scroll(function(){
        if ( ($(this).scrollTop()+h) >= $("#ex1").offset().top) {
            $("#ex1 .post").css({visibility:"visible"});
            $("#ex1 .post").addClass('col-md-6 col-md-offset-6 animated bounceInRight');
        }

        if ( ($(this).scrollTop()+h) >= $("#ex2").offset().top) {
            $("#ex2 .post").css({visibility:"visible"});
            $("#ex2 .post").addClass('col-md-6 animated bounceInLeft');
        }

        if ( ($(this).scrollTop()+h) >= $("#ex3").offset().top) {
            $("#ex3 .post").css({visibility:"visible"});
            $("#ex3 .post").addClass('row animated fadeIn');
        }

        if ( ($(this).scrollTop()+h) >= $("#ex4").offset().top) {
            $("#ex4 .post").css({visibility:"visible"});
            $("#ex4 .post").addClass('row animated zoomIn');
        }

        if ( $(this).scrollTop() == 0 ) {
            $("#ex1 #ex2 #ex3 #ex4 .post").each(function(){
                if ( $(this).hasClass('last') ) {
                    $(this).removeClass().addClass('post last');
                } else {
                    $(this).removeClass().addClass('post');
                }
                $(this).css({visibility:"hidden"});
            });
        }
    });
});