/*----------------------------------------------------*/
/* Navbar fadein and Out - S.Poscher
------------------------------------------------------ */

$(function () {
    // Affichage du sous menu en douceur
    jQuery('ul.nav li.dropdown').hover(function () {
        jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
    }, function () {
        jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
    });

});

/*----------------------------------------------------*/
/* Opening Hours
------------------------------------------------------ */

//hide table
$('.tg').fadeOut(0);

// $d new date

var d = new Date();

// $weekdays array
var weekday = new Array(7);
weekday[0] = "Dimanche";
weekday[1] = "Lundi";
weekday[2] = "Mardi";
weekday[3] = "Mercredi";
weekday[4] = "Jeudi";
weekday[5] = "Vendredi";
weekday[6] = "Samedi";

// get weekday from array
var n = weekday[d.getDay()];

// format date info
var displayDate = (d.getDate()) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();

//times to display

var lundi = ['9h', '12h', '14h', '19.00h'];
var mardi = ['9h', '12h', '14h', '19.00h'];
var mercredi = ['9h', '12h', '14h', '19.00h'];
var jeudi = ['9h', '12h', '14h', '19.00h'];
var vendredi = ['9h', '12h', '14h', '19.00h'];
var samedi = ['/', '/', '/', '/'];
var dimanche = ['/', '/', '/', '/'];

//text to display

var day0 = 'The center is <strong>closed</strong>';
var day1 = 'We are <strong>open</strong> from<strong> ' + lundi[0] + ' to ' + lundi[1] + '</strong> and from <strong>' + lundi[2] + ' to ' + lundi[3] + '</strong>';
var day2 = 'We are <strong>open</strong> from<strong> ' + mardi[0] + ' to ' + mardi[1] + '</strong> and from <strong>' + mardi[2] + ' to ' + mardi[3] + '</strong>';
var day3 = 'We are <strong>open</strong> from<strong> ' + mercredi[0] + ' to ' + mercredi[1] + '</strong> and from <strong>' + mercredi[2] + ' to ' + mercredi[3] + '</strong>';
var day4 = 'We are <strong>open</strong> from<strong> ' + jeudi[0] + ' to ' + jeudi[1] + '</strong> and from <strong>' + jeudi[2] + ' to ' + jeudi[3] + '</strong>';
var day5 = 'We are <strong>open</strong> from<strong> ' + vendredi[0] + ' to ' + vendredi[1] + '</strong> and from <strong>' + vendredi[2] + ' to ' + vendredi[3] + '</strong>';
var day6 = 'The center is <strong>closed</strong>';

//update the clock function

function updateClock() {
  var d = new Date();
  var currentHours = d.getHours();
  var currentMinutes = d.getMinutes();
  var currentSeconds = d.getSeconds();

  currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
  currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

  var time = d.getHours() + ":" + currentMinutes + ":" + currentSeconds;
  $('#timeholder').empty().append('<span class="time"><i class="fa fa-clock-o"></i> ' + time + ' H</span>');
}

// doc ready
$(document).ready(function() {

  //display date and time data

  $('#todayholder').append('<span class="today"> ' + n + ' <strong>' + displayDate + '</strong> </span>');
  //$('#timeholder').append('<span class="time">'+time+' H</span>');
  var currentHours = d.getHours();
  var currentMinutes = d.getMinutes();
  var currentSeconds = d.getSeconds();

  currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
  currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

  var time = d.getHours() + ":" + currentMinutes + ":" + currentSeconds;
  $('#timeholder').empty().append('<span class="time"><i class="fa fa-clock-o"></i> ' + time + ' H</span>');

  //update clock

  setInterval('updateClock()', 1000);

  //table button

  $(".ophbtn").on("mousedown", function() {

    $('.tg').fadeToggle(1);
    if ($(".ophbtn i").hasClass('fa-caret-right')) {
      $(".ophbtn i").removeClass('fa-caret-right fa-fw').addClass('fa-times fa-fw');
      $(".ophbtn").text('ouvrir le oraires').append('<i class="fa fa-times fa-fw"></i>');
    } else {
      $(".ophbtn i").removeClass('fa-times fa-fw').addClass('fa-caret-right fa-fw');
      $(".ophbtn").text('tout le horaires').append('<i class="fa fa-caret-right fa-fw"></i>');
    }
  });

  //append Times in table

  $('.lun').append('<td class="tg-032e">Mo:</td><td class="tg-031e">' + lundi[0] + '</td><td class="tg-031e">' + lundi[1] + '</td><td class="tg-031e">' + lundi[2] + '</td><td class="tg-031e">' + lundi[3] + '</td>');
  $('.mar').append('<td class="tg-032e">Tu:</td><td class="tg-031e">' + mardi[0] + '</td><td class="tg-031e">' + mardi[1] + '</td><td class="tg-031e">' + mardi[2] + '</td><td class="tg-031e">' + mardi[3] + '</td>');
  $('.mer').append('<td class="tg-032e">We:</td><td class="tg-031e">' + mercredi[0] + '</td><td class="tg-031e">' + mercredi[1] + '</td><td class="tg-031e">' + mercredi[2] + '</td><td class="tg-031e">' + mercredi[3] + '</td>');
  $('.jeu').append('<td class="tg-032e">Th:</td><td class="tg-031e">' + jeudi[0] + '</td><td class="tg-031e">' + jeudi[1] + '</td><td class="tg-031e">' + jeudi[2] + '</td><td class="tg-031e">' + jeudi[3] + '</td>');
  $('.ven').append('<td class="tg-032e">Fr:</td><td class="tg-031e">' + vendredi[0] + '</td><td class="tg-031e">' + vendredi[1] + '</td><td class="tg-031e">' + vendredi[2] + '</td><td class="tg-031e">' + vendredi[3] + '</td>');
  $('.sam').append('<td class="tg-032e">Sa:</td><td class="tg-031e">' + samedi[0] + '</td><td class="tg-031e">' + samedi[1] + '</td><td class="tg-031e">' + samedi[2] + '</td><td class="tg-031e">' + samedi[3] + '</td>');
  $('.dim').append('<td class="tg-032e">Su:</td><td class="tg-031e">' + dimanche[0] + '</td><td class="tg-031e">' + dimanche[1] + '</td><td class="tg-031e">' + dimanche[2] + '</td><td class="tg-031e">' + dimanche[3] + '</td>');

  //check day and display text accordingly and color day row
  switch (d.getDay()) {
    case 0:
      //sunday
      $('#displaytextholder').append('<span class="displaytext">' + day0 + '</span>');
      $('.dim').addClass("activeTr");
      break;
    case 1:
      //monday
      $('#displaytextholder').append('<span class="displaytext">' + day1 + '</span>');
      $('.lun').addClass("activeTr");
      break;
    case 2:
      //tuesday
      $('#displaytextholder').append('<span class="displaytext">' + day2 + '</span>');
      $('.mar').addClass("activeTr");
      break;
    case 3:
      //wednesday
      $('#displaytextholder').append('<span class="displaytext">' + day3 + '</span>');
      $('.mer').addClass("activeTr");

      break;
    case 4:
      //thursday
      $('#displaytextholder').append('<span class="displaytext">' + day4 + '</span>');
      $('.jeu').addClass("activeTr");
      break;
    case 5:
      //friday
      $('#displaytextholder').append('<span class="displaytext">' + day5 + '</span>');
      $('.ven').addClass("activeTr");
      break;
    case 6:
      //saturday
      $('#displaytextholder').append('<span class="displaytext">' + day6 + '</span>');
      $('.sam').addClass("activeTr")
      break;
  }

});



/*----------------------------------------------------*/
/* Smooth Scrolling - not active
------------------------------------------------------ */
  //
  //  $('.smoothscroll').on('click',function (e) {
	//     e.preventDefault();
  //
	//     var target = this.hash,
	//     $target = $(target);
  //
	//     $('html, body').stop().animate({
	//         'scrollTop': $target.offset().top
	//     }, 800, 'swing', function () {
	//         window.location.hash = target;
	//     });
	// });


/*----------------------------------------------------*/
/* Highlight the current section in the navigation bar - not active
------------------------------------------------------*/

	// var sections = $("section");
	// var navigation_links = $("#nav-wrap a");
  //
	// sections.waypoint({
  //
  //     handler: function(event, direction) {
  //
	// 	   var active_section;
  //
	// 		active_section = $(this);
	// 		if (direction === "up") active_section = active_section.prev();
  //
	// 		var active_link = $('#nav-wrap a[href="#' + active_section.attr("id") + '"]');
  //
  //        navigation_links.parent().removeClass("current");
	// 		active_link.parent().addClass("current");
  //
	// 	},
	// 	offset: '35%'
  //
	// });
