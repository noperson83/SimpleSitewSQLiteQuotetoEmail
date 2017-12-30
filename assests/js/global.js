/////////////////////////////////////////////////
/////////////////////////////////////////////////
///////                                   ///////
///////           GLOBAL ACTIONS          ///////
///////                                   ///////
/////////////////////////////////////////////////
/////////////////////////////////////////////////

// Initiate TouchGallery Element
$(document).ready(function() {
    $(function(){$('a.touchgallery').touchTouch();});
});

// Toggle records menu options
$(function() {
    $("#children-records").click(function() {
        $('ul.children, #children-records').toggleClass("active");
    });
});

// FAQ accordion
$(document).ready(function() {
    $('.question').click(function() {

        if($(this).next().is(':hidden') != true) {
            $(this).removeClass('active');
            $(this).next().slideUp("fast");
        } else {
            //   $('.question').removeClass('active');
            //    $('.answer').slideUp('normal');
            if($(this).next().is(':hidden') == true) {
                $(this).addClass('active');
                $(this).next().slideDown('fast');
            }
        }
    });

    $('.answer').hide();
});