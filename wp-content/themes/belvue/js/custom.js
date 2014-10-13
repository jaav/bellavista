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

jQuery(window).scroll(function() {
    if (jQuery('.navbar-fixed-top').offset().top > 195) {
        jQuery('.navbar-fixed-top').addClass('top-nav-collapse');
    } else {
        jQuery('.navbar-fixed-top').removeClass('top-nav-collapse');
    }
});

$(document).ready(function() {
    $('.slider .photo, .discoveries .photo, .slider').owlCarousel({
        pagination: false,
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay : false,
        navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        stopOnHover : true
    });
});