$(document).ready(function() {

  var active1 = false;
  var active2 = false;
  var active3 = false;
  var active4 = false;
  var active5 = false;
  var active6 = false;
 

    $('.nav2').on('mousedown touchstart', function() {
    
    if (!active1) $(this).find('.drop1').css({'background-color': 'gray', 'transform': 'translate(0px,85px)'});
    else $(this).find('.drop1').css({'background-color': 'dimGray', 'transform': 'none'}); 
     if (!active2) $(this).find('.drop2').css({'background-color': 'gray', 'transform': 'translate(0px,170px)'});
    else $(this).find('.drop2').css({'background-color': 'darkGray', 'transform': 'none'});
      if (!active3) $(this).find('.drop3').css({'background-color': 'gray', 'transform': 'translate(0px,255px)'});
    else $(this).find('.drop3').css({'background-color': 'silver', 'transform': 'none'});
      if (!active4) $(this).find('.drop4').css({'background-color': 'gray', 'transform': 'translate(0px,340px)'});
    else $(this).find('.drop4').css({'background-color': 'silver', 'transform': 'none'});
      if (!active5) $(this).find('.drop5').css({'background-color': 'gray', 'transform': 'translate(0px,425px)'});
    else $(this).find('.drop5').css({'background-color': 'silver', 'transform': 'none'});
      if (!active6) $(this).find('.drop6').css({'background-color': 'gray', 'transform': 'translate(0px,510px)'});
    else $(this).find('.drop6').css({'background-color': 'silver', 'transform': 'none'});
    active1 = !active1;
    active2 = !active2;
    active3 = !active3;
    active4 = !active4;
    active5 = !active5;
    active6 = !active6;
      
});

});

