/**
 * Created by phpNT on 25.02.2016.
 */
$(".img-container")
    .mouseenter(function(){
        //$(".img-container .img-container-content").children().css("display", "none");
        $(this).children('.img-container-content').css("display","none");
        $(this).children('.img-container-active-content').css("display","block");
    })
    .mouseleave(function(){
        $(this).children('.img-container-active-content').css("display","none");
        $(this).children('.img-container-content').css("display","block");
    });