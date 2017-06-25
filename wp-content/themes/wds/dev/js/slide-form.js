$('.pagenation').on('click', function() {
  $('.pagenation').removeClass('is-active');
  $(this).addClass('is-active');
})

$('.page-01').on('click', function() {
  $('.block').removeClass('is-active');
  $('.block-01').addClass('is-active');
  $('.pagenation').removeClass('is-active');
  $('.page-01').addClass('is-active');
});

$('.page-02').on('click', function() {
  $('.block').removeClass('is-active');
  $('.block-02').addClass('is-active');
   $('.pagenation').removeClass('is-active');
  $('.page-02').addClass('is-active');
});

$('.page-03').on('click', function() {
  $('.block').removeClass('is-active');
  $('.block-03').addClass('is-active');
   $('.pagenation').removeClass('is-active');
  $('.page-03').addClass('is-active');
});

$('.page-04').on('click', function() {
  $('.block').removeClass('is-active');
  $('.block-04').addClass('is-active');
   $('.pagenation').removeClass('is-active');
  $('.page-04').addClass('is-active');
});

$('.page-05').on('click', function() {
  $('.block').removeClass('is-active');
  $('.block-05').addClass('is-active');
   $('.pagenation').removeClass('is-active');
  $('.page-05').addClass('is-active');
})

$("#Autre").on("click",function()
{
    $("#sliding").slideToggle(500);
}); 