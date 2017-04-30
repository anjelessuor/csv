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

