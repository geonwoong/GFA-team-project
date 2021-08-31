$(function(){

$('#nav_btn .next').click(function(){
  $('#slide:not(:animated)').animate({
    'margin-left' : -1*$('#slide li').width()
  },function(){
    $('#slide').append($('#slide li:first-child'));
    $('#slide').css('margin-left','0');
  });
});

$('#nav_btn .prev').click(function(){
  $('#slide:not(:animated)').prepend($('#slide li:last-child'))
  .css('margin-left', -1*$('#slide li').width())
  .animate({
    'margin-left' : 0
  });
});


});
