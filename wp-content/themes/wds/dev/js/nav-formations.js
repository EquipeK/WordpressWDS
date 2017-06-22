$(document).ready(function() {
	$('#txt_dev').hide();
	$('#txt_dg').hide();
	$('#txt_md').show();
	$('#txt_sr').hide();

	$('#btn_d').click(function (){
		$('#txt_dev').show();
		$('#txt_dg').hide();
		$('#txt_md').hide();
		$('#txt_sr').hide();
		$('#front_formations').css("background-color", "#07b57a");
	});

	$('#btn_md').click(function (){
		$('#txt_dev').hide();
		$('#txt_dg').hide();
		$('#txt_md').show();
		$('#txt_sr').hide();
		$('#front_formations').css("background-color", "#53308c");
	});
	$('#btn_dg').click(function (){
		$('#txt_dev').hide();
		$('#txt_dg').show();
		$('#txt_md').hide();
		$('#txt_sr').hide();
		$('#front_formations').css("background-color", "#f93d3d");
	});
	$('#btn_sr').click(function (){
		$('#txt_dev').hide();
		$('#txt_dg').hide();
		$('#txt_md').hide();
		$('#txt_sr').show();
		$('#front_formations').css("background-color", "#efd502");
	});
/*Changement d'image*/
  $("#cf7_controls").on('click', 'li', function() {
  //$("#cf7_controls").on('click', 'span', function() {
    $("#cf7 img").removeClass("opaque");

    var newImage = $(this).index();

    $("#cf7 img").eq(newImage).addClass("opaque");
	$("#cf7_controls li").removeClass("selected");
	$("#cf7_controls li").removeClass("current");
    // $("#cf7_controls span").removeClass("selected");
	$(this).addClass("current");
    $(this).addClass("selected");
  });
});