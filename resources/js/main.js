$(document).ready(function(){

  $('#card-wake-up').click(function(event){
    event.preventDefault();
    $(this).fadeOut();
    console.log("clicked");
  })
});
