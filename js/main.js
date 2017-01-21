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

$(document).ready(function(){

$(function(){
 
    $(document).on( 'scroll', function(){
 
    	if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

});

