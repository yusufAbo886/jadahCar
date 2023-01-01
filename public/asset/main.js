$('.navbar-toggler').mouseover(function(){
    $('.one').css('width',' 80%');
    $('.tow').css('width', '70%');
  
});
$('.navbar-toggler').mouseout(function(){
    $('.one').css('width','90%');
    $('.tow').css('width','90%');
    $('.tree').css('width','90%');

  $(".dene").click(function(){

$('.one').css('background-color','black');

// alert("fe");
});
});

var element = document.getElementById("dene");
$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
      var _opened = $(".offcanvas-collapse").hasClass("open");
      $('.offcanvas-collapse').toggleClass('open');
  if(_opened){
      element.classList.add("collapsed"); 
  }else{
      element.classList.remove("collapsed")
  }
})
})