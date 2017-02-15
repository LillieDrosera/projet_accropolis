$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('#accropo-nav').addClass('sticky');
    } else {
        $('#accropo-nav').removeClass('sticky');
    }
});
