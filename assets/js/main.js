$(function() {
    // preloader
    $(window).on('load', function () {
        $('.preloader').delay(500).fadeOut('slow', function () {
            $(this).attr('style', 'display: none !important')
        })
    })
    
    baguetteBox.run('.gallery');

    // scroll to top
    var scrollToTop = $('#scrollToTop')

    $(window).on('scroll', function () {
        if ( $(this).scrollTop() > 300 ) {
            scrollToTop.fadeIn()
        } else {
            scrollToTop.fadeOut()
        }
    })

    scrollToTop.on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800)
        return false
    })
});