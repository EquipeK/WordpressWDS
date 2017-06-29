$(function()
{
    $('#launch_video').click(function (){
        // Load the IFrame Player API code asynchronously.
        $('#ytapiplayer2').show();
        $('#ytapiplayer2').append('<iframe width="1130" height="636" src="http://www.youtube.com/embed/NN_zCyMv-Pk?autoplay=0&rel=0" frameborder="0" allowfullscreen></iframe>');
        $('#bloc_video_pres').hide();
    });
});




