//Stack menu when collapsed
$('#mainNav').on('show.bs.collapse', function() {
    $('.nav-pills').addClass('nav-stacked');
});

//Unstack menu when not collapsed
$('#mainNav').on('hide.bs.collapse', function() {
    $('.nav-pills').removeClass('nav-stacked');
});
