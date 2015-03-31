/*
 (function($) {
 */
/*
 *  render_map
 *//*

 function render_map( $el ) {
 var $markers = $el.find('.marker');
 var args = {
 zoom		: 20,
 center		: new google.maps.LatLng(0, 0),
 mapTypeId	: google.maps.MapTypeId.ROADMAP
 };
 var map = new google.maps.Map( $el[0], args);
 map.markers = [];
 $markers.each(function(){
 add_marker( $(this), map );
 });
 center_map( map );
 }

 */
/*
 *  add_marker
 *//*

 function add_marker( $marker, map ) {
 var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
 var marker = new google.maps.Marker({
 position	: latlng,
 map			: map
 });
 map.markers.push( marker );
 if( $marker.html() )
 {
 var infowindow = new google.maps.InfoWindow({
 content		: $marker.html()
 });
 google.maps.event.addListener(marker, 'click', function() {
 infowindow.open( map, marker );
 });
 }
 }

 */
/*
 *  center_map
 *
 *//*

 function center_map( map ) {
 var bounds = new google.maps.LatLngBounds();
 $.each( map.markers, function( i, marker ){
 var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
 bounds.extend( latlng );
 });
 if( map.markers.length == 1 )
 {
 map.setCenter( bounds.getCenter() );
 map.setZoom( 1 );
 }
 else
 {
 map.fitBounds( bounds );
 }
 }
 $(document).ready(function(){
 $('.map').each(function(){
 render_map( $(this) );
 });
 });

 })(jQuery);
 */

/*jQuery(window).scroll(function() {
 if (jQuery('.navbar-fixed-top').offset().top > 195) {
 jQuery('.navbar-fixed-top').addClass('top-nav-collapse');
 } else {
 jQuery('.navbar-fixed-top').removeClass('top-nav-collapse');
 }
 });*/

$(document).ready(function () {
    $('.slider .photo, .discoveries .photo, .slider').owlCarousel({
        pagination: false,
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: false,
        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        stopOnHover: true
    });
    $('.explore, .carte').owlCarousel({
        pagination: false,
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: false,
        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        stopOnHover: true,
        transitionStyle: "fade"
    });

    $('.row > .flex .trigger').removeClass("open");
    $('.row > .flex .desc .trigger').click(function (e) {
        e.preventDefault();
        var button = $('.row > .flex .trigger');
        var photo = $('.row > .flex .photo');
        $(this).addClass('open');//this has no point unless changing the arrow's direction
        var thisRow = $(this).closest('.row');

        //Show or hide the paragraphs in this section
        if (thisRow.find('.wrap').is(":visible")) {
            thisRow.find('.flex>.desc>p, .flex>.desc>ul').hide();
            thisRow.find('.flex>.desc>ul.book-button').show();
        }
        else {
            thisRow.find('.flex>.desc>p, .flex>.desc>ul').show();
        }
        ;

        //Activate the 'A la carte' slider
        if ($(this).hasClass("trigger_c")) {
            //$('.trigger_e').removeClass("open");//no point
            //$('.row > .explore').removeClass('show');//no point
            //$('.row > .flex .desc').toggleClass('hide');//no point
            thisRow.find('.carte').addClass('show').delay(500).animate({ opacity: 1 });
            thisRow.find('.explore').removeClass('show');

        }
        //Activate the 'Explore' slider
        else if ($(this).hasClass("trigger_e")) {
            //$('.trigger_c').removeClass("open");
            thisRow.find('.carte').removeClass('show');
            thisRow.find('.explore').addClass('show').delay(500).animate({ opacity: 1 });

        }
        ;
        //photo.toggleClass("transparent");

        //$('.row > .flex .trigger').

    });

    $('body').each(function () {
        var width = $(this).width();
        if (width <= 768) {
            $('.about .flex, .advantages .flex').owlCarousel({
                pagination: false,
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoPlay: false,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                stopOnHover: true,
                transitionStyle: "fade"
            })
        }
    });

    if ($('.home').length) {
        $('.navbar-main-collapse ul.navbar-nav li a, footer .grid-span-1 a, footer .grid-span-2 a').click(function (ev) {
            var target = $(this).attr('href');
            if (target.indexOf('#') === 0) {
                if (target === '#footer')
                    $("html, body").animate({ scrollTop: $('footer').offset().top - 150 }, 600);
                else if (target === '#contact')
                    $('#myContactForm').modal('show');
                else
                    $("html, body").animate({ scrollTop: $('section.' + target.substr(1)).offset().top - 150 }, 600);
                $('.navbar-collapse').collapse('hide');
                ev.preventDefault();
            }
        });
        $('#menu-user-menu a, section.events .book-button a').click(function (ev) {
            var target = $(this).attr('href');
            if (target.indexOf('#') === 0) {
                if (target === '#contact') {
                    $('#myContactForm').modal('show');
                }
                ev.preventDefault();
            }
        });
    }
    else {
        $('.navbar-main-collapse ul.navbar-nav li a, footer .grid-span-1 a, footer .grid-span-2 a').click(function (ev) {
            var target = $(this).attr('href');
            if (target.indexOf('#') === 0) {
                location.href = '/' + target;
                ev.preventDefault();
            }
        });
    }
    //on page load, check hash in path and move to the correct anchor
    var path = document.URL;
    if (path.indexOf('/#') > 0) {
        var target = path.substr(path.indexOf('/#') + 1);
        var test = $('section.' + target.substr(1));
        if (target.indexOf('#') === 0) {
            if (target === '#footer')
                $("html, body").animate({ scrollTop: $('footer').offset().top - 150 }, 600);
            else
                $("html, body").animate({ scrollTop: $('section.' + target.substr(1)).offset().top - 150 }, 600);
            $('.navbar-collapse').collapse('hide');
        }
    }
});

$(window).resize(function () {
    $('body').each(function () {
        var width = $(this).width();
        if (width <= 768) {
            $('.about .flex, .advantages .flex').owlCarousel({
                pagination: false,
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoPlay: false,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                stopOnHover: true,
                transitionStyle: "fade"
            })
        }
    });
});
