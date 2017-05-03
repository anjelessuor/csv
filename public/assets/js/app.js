// $(".category").tagsinput('items');
// $(function () {
//     var citynames = new Bloodhound({
//         datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
//         queryTokenizer: Bloodhound.tokenizers.whitespace,
//         prefetch: {
//             url: '/category.json',
//             filter: function (list) {
//                 return $.map(list, function (cityname) {
//                     return {
//                         name: cityname
//                     };
//                 });
//             }
//         }
//     });
//     citynames.initialize();

//     $('input').tagsinput({
//         typeaheadjs: {
//             name: 'citynames',
//             displayKey: 'name',
//             valueKey: 'name',
//             source: citynames.ttAdapter()
//         }
//     });
// });

//JS de la navbar
$(function () {
    // Affichage du sous menu en douceur
    jQuery('ul.nav li.dropdown').hover(function () {
        jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
    }, function () {
        jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
    });

});

// opening hours

//hide table
$('.tg').fadeOut(0);

// $d new date

var d = new Date();

// $weekdays array 
var weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

// get weekday from array
var n = weekday[d.getDay()];

// format date info
var displayDate = (d.getDate()) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();

//times to display

var monday = ['9h', '12h', '13h', '20.30h'];
var tuesday = ['9h', '12h', '13h', '19.30h'];
var wednesday = ['9h', '12h', '13h', '17.30h'];
var thursday = ['9h', '12h', '13h', '16.30h'];
var friday = ['9h', '12h', '13h', '15.30h'];
var saturday = ['9h', '12h', '13h', '14.30h'];
var sunday = ['/', '/', '/', '/'];

//text to display

var day0 = 'The shop is <strong>closed</strong>';
var day1 = 'We are <strong>open</strong> from<strong> ' + monday[0] + ' to ' + monday[1] + '</strong> and from <strong>' + monday[2] + ' to ' + monday[3] + '</strong>';
var day2 = 'We are <strong>open</strong> from<strong> ' + tuesday[0] + ' to ' + tuesday[1] + '</strong> and from <strong>' + tuesday[2] + ' to ' + tuesday[3] + '</strong>';
var day3 = 'We are <strong>open</strong> from<strong> ' + wednesday[0] + ' to ' + wednesday[1] + '</strong> and from <strong>' + wednesday[2] + ' to ' + wednesday[3] + '</strong>';
var day4 = 'We are <strong>open</strong> from<strong> ' + thursday[0] + ' to ' + thursday[1] + '</strong> and from <strong>' + thursday[2] + ' to ' + thursday[3] + '</strong>';
var day5 = 'We are <strong>open</strong> from<strong> ' + friday[0] + ' to ' + friday[1] + '</strong> and from <strong>' + friday[2] + ' to ' + friday[3] + '</strong>';
var day6 = 'We are <strong>open</strong> from<strong> ' + saturday[0] + ' to ' + saturday[1] + '</strong> and from <strong>' + saturday[2] + ' to ' + saturday[3] + '</strong>';

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
      $(".ophbtn").text('Close openinghours').append('<i class="fa fa-times fa-fw"></i>');
    } else {
      $(".ophbtn i").removeClass('fa-times fa-fw').addClass('fa-caret-right fa-fw');
      $(".ophbtn").text('See all openinghours').append('<i class="fa fa-caret-right fa-fw"></i>');
    }
  });

  //append Times in table

  $('.mon').append('<td class="tg-032e">Mo:</td><td class="tg-031e">' + monday[0] + '</td><td class="tg-031e">' + monday[1] + '</td><td class="tg-031e">' + monday[2] + '</td><td class="tg-031e">' + monday[3] + '</td>');
  $('.tue').append('<td class="tg-032e">Tu:</td><td class="tg-031e">' + tuesday[0] + '</td><td class="tg-031e">' + tuesday[1] + '</td><td class="tg-031e">' + tuesday[2] + '</td><td class="tg-031e">' + tuesday[3] + '</td>');
  $('.wen').append('<td class="tg-032e">We:</td><td class="tg-031e">' + wednesday[0] + '</td><td class="tg-031e">' + wednesday[1] + '</td><td class="tg-031e">' + wednesday[2] + '</td><td class="tg-031e">' + wednesday[3] + '</td>');
  $('.thu').append('<td class="tg-032e">Th:</td><td class="tg-031e">' + thursday[0] + '</td><td class="tg-031e">' + thursday[1] + '</td><td class="tg-031e">' + thursday[2] + '</td><td class="tg-031e">' + thursday[3] + '</td>');
  $('.fri').append('<td class="tg-032e">Fr:</td><td class="tg-031e">' + friday[0] + '</td><td class="tg-031e">' + friday[1] + '</td><td class="tg-031e">' + friday[2] + '</td><td class="tg-031e">' + friday[3] + '</td>');
  $('.sat').append('<td class="tg-032e">Sa:</td><td class="tg-031e">' + saturday[0] + '</td><td class="tg-031e">' + saturday[1] + '</td><td class="tg-031e">' + saturday[2] + '</td><td class="tg-031e">' + saturday[3] + '</td>');
  $('.sun').append('<td class="tg-032e">Su:</td><td class="tg-031e">' + sunday[0] + '</td><td class="tg-031e">' + sunday[1] + '</td><td class="tg-031e">' + sunday[2] + '</td><td class="tg-031e">' + sunday[3] + '</td>');

  //check day and display text accordingly and color day row	
  switch (d.getDay()) {
    case 0:
      //sunday
      $('#displaytextholder').append('<span class="displaytext">' + day0 + '</span>');
      $('.sun').addClass("activeTr");
      break;
    case 1:
      //monday
      $('#displaytextholder').append('<span class="displaytext">' + day1 + '</span>');
      $('.mon').addClass("activeTr");
      break;
    case 2:
      //tuesday
      $('#displaytextholder').append('<span class="displaytext">' + day2 + '</span>');
      $('.tue').addClass("activeTr");
      break;
    case 3:
      //wensday
      $('#displaytextholder').append('<span class="displaytext">' + day3 + '</span>');
      $('.wen').addClass("activeTr");

      break;
    case 4:
      //thursday
      $('#displaytextholder').append('<span class="displaytext">' + day4 + '</span>');
      $('.thu').addClass("activeTr");
      break;
    case 5:
      //friday
      $('#displaytextholder').append('<span class="displaytext">' + day5 + '</span>');
      $('.fri').addClass("activeTr");
      break;
    case 6:
      //saturday
      $('#displaytextholder').append('<span class="displaytext">' + day6 + '</span>');
      $('.sat').addClass("activeTr")
      break;
  }

});

