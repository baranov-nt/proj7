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
$('#modal-5').on('hidden.bs.modal', function (e) {
    $("#modal-5 iframe").attr("src", $("#modal-5 iframe").attr("src"));
});
$('#modal-6').on('hidden.bs.modal', function (e) {
    $("#modal-6 iframe").attr("src", $("#modal-6 iframe").attr("src"));
});
