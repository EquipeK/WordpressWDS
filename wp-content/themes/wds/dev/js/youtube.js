$(function()
{
    $('#bloc_video_pres').click(function (){
        // Load the IFrame Player API code asynchronously.
        $('#ytapiplayer2').show();
        $('#ytapiplayer2').append('<iframe width="1130" height="636" src="http://www.youtube.com/embed/tnDYKqE0uLc?autoplay=1" frameborder="0" allowfullscreen></iframe>');
        $('#bloc_video_pres').hide();
    });
});




