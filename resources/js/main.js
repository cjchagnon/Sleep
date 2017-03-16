$(document).ready(function(){

  $('#card-wake').click(function(event){
    event.preventDefault();
    $(this).fadeOut(function(){
      $('#card-sleep').fadeIn();
    });
  })

  $('#card-sleep').click(function(event){
    event.preventDefault();
    $(this).fadeOut(function(){
      $('#card-wake').fadeIn();
    });
  })

});
