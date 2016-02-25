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

        if ( $(this).scrollTop() == 0 ) {
            $("#ex1 .post").each(function(){
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