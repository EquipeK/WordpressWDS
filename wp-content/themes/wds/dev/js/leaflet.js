$(function()
{
  $("#form_email_leaflet").hide();
  $("#link").on('click', function(e){
    e.preventDefault();
    $("#form_email_leaflet").toggle();
  });
});
