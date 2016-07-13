//Stack menu when collapsed
<<<<<<< HEAD

//$('#mainNav').on('show.bs.collapse', function() {
//    $('.nav-pills').addClass('nav-stacked');
//});

//Unstack menu when not collapsed
//$('#mainNav').on('hide.bs.collapse', function() {
//    $('.nav-pills').removeClass('nav-stacked');
//});
=======
$('#mainNav').on('show.bs.collapse', function() {
    $('.nav-pills').addClass('nav-stacked');
});

//Unstack menu when not collapsed
$('#mainNav').on('hide.bs.collapse', function() {
    $('.nav-pills').removeClass('nav-stacked');
});
>>>>>>> 7c3d83e29194e5115ce11482bdbf157d350d5611

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
<<<<<<< HEAD


// Gallery
$(function(){
    var $gallery = $('.gallery a').simpleLightbox();

    $gallery.on('show.simplelightbox', function(){
        console.log('Requested for showing');
    })
        .on('error.simplelightbox', function(e){
            console.log('No image found, go to the next/prev');
            console.log(e);
        });
});


=======
>>>>>>> 7c3d83e29194e5115ce11482bdbf157d350d5611
