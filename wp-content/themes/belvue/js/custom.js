jQuery(window).scroll(function() {
    if (jQuery('.navbar-fixed-top').offset().top > 195) {
        jQuery('.navbar-fixed-top').addClass('top-nav-collapse');
    } else {
        jQuery('.navbar-fixed-top').removeClass('top-nav-collapse');
    }
});

$(document).ready(function() {
    $('.owl .wrap').owlCarousel({
        navigation : false,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay : true,
        stopOnHover : true
    });
});