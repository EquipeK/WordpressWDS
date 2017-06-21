$(function()
{
    /*$('article').hover(function(){
        $('.resume_article').css("opacity", "0.8").css("visibility", "visible");
        }, function(){
        $('.resume_article').css("opacity", "0").css("visibility", "hidden");
    });*/

    $('article').hover(function(){
        $(this).children(".resume_article").toggleClass("animation_article");
    });
});

