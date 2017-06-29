$(document).ready(function() {
    $('#content_objectif').fadeIn(700);
    $('#content_matiere').hide();
    $('#content_debouche').hide();

    $('#btn_objectif').click(function() {
        $('#content_objectif').fadeIn(700);
        $('#content_matiere').hide();
        $('#content_debouche').hide();
    });
    $('#btn_matiere').click(function() {
        $('#content_objectif').hide();
        $('#content_matiere').fadeIn(700);
        $('#content_debouche').hide();
    });
    $('#btn_debouche').click(function() {
        $('#content_objectif').hide();
        $('#content_matiere').hide();
        $('#content_debouche').fadeIn(700);
    });
    /*Changement d'image*/
    $("#cf7_controls").on('click', 'li', function() {
        //$("#cf7_controls").on('click', 'span', function() {
        $("#cf7 img").removeClass("opaque");

        var newImage = $(this).index();

        $("#cf7 img").eq(newImage).addClass("opaque");
        $("#cf7_controls li").removeClass("current");
        // $("#cf7_controls span").removeClass("selected");
        $(this).addClass("current");
    });
});