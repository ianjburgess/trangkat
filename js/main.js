//Stack menu when collapsed

//$('#mainNav').on('show.bs.collapse', function() {
//    $('.nav-pills').addClass('nav-stacked');
//});

//Unstack menu when not collapsed
//$('#mainNav').on('hide.bs.collapse', function() {
//    $('.nav-pills').removeClass('nav-stacked');
//});

//Remove nav stacked class on screen > resize
(function($) {
    var $window = $(window),
        $stacked = $('.nav-pills');
        $collapse = $('#mainNav');

    $window.resize(function resize(){
        if ($window.width() > 767) {
            $collapse.removeClass('in');
            $stacked.removeClass('nav-stacked');

        }
    }).trigger('resize');
})(jQuery);
