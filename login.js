// 11119006 - Bagus Susilo
$('.toggle').click(function(){
  $(this).children('i').toggleClass('fa-pencil'); 
  $('.form').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: "toggle"
  }, "slow");
});