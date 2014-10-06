<?php
/*
 * Custom styles
 */
function custom_scripts() {

    wp_register_style('font-awesome.min', get_stylesheet_directory_uri()."/assets/font-awesome/css/font-awesome.min.css");
    wp_enqueue_style('font-awesome.min');
/*    wp_register_style('fonts', get_stylesheet_directory_uri()."/css/fonts.css" );
    wp_enqueue_style('fonts');*/
    wp_register_style( 'bootstrap.min', get_stylesheet_directory_uri()."/bootstrap.css");
    wp_enqueue_style('bootstrap.min');
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', '1.0',  false );
    wp_enqueue_script('jquery');
   /* wp_register_style('jquery_ui_css', '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css');
    wp_enqueue_style('jquery_ui_css');
    wp_register_script('jquery_ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js', '1.0',  false );
    wp_enqueue_script('jquery_ui');*/
    wp_register_script('bootstrap_js', get_stylesheet_directory_uri()."/js/bootstrap.min.js", '1.0',  false );
    wp_enqueue_script('bootstrap_js');
/*    wp_register_script('easing', get_stylesheet_directory_uri()."/js/jquery.easing.min.js", '1.0',  false );
    wp_enqueue_script('easing')*/;
   /* wp_register_script('modernizr', get_stylesheet_directory_uri()."/js/modernizr.js", '1.0',  false );
    wp_enqueue_script('modernizr');*/
    wp_register_style('owl.carousel', get_stylesheet_directory_uri()."/assets/owl-carousel/owl.carousel.css");
    wp_enqueue_style('owl.carousel');
    wp_register_style('owl.theme', get_stylesheet_directory_uri()."/assets/owl-carousel/owl.theme.css");
    wp_enqueue_style('owl.theme');
    wp_register_script('owl_js', get_stylesheet_directory_uri()."/assets/owl-carousel//owl.carousel.min.js", '1.0',  false );
    wp_enqueue_script('owl_js');
    wp_register_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'style' );
    wp_register_script('custom', get_stylesheet_directory_uri()."/js/custom.js", '1.0',  true );
    wp_enqueue_script('custom');
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

/*
 * ACF options
 */
if (function_exists('register_options_page')){
    //register_options_page('Name');
}

/*
 * Main menu
 */
register_nav_menu( 'main', __( 'Main menu', 'belvue' ) );

/*/*
 * Remove additional menu classes
 */
add_filter('nav_menu_item_id', 'nav_css_filter', 10, 1);
add_filter('nav_menu_css_class', 'nav_css_filter', 10, 2);
add_filter('page_css_class', 'nav_css_filter', 10, 1);

function nav_css_filter($classes) {
    $current = array('current-menu-item', 'current-menu-parent');
    if (is_array($classes)) {
        $classes = array_intersect($classes, $current);
    } else {
        $classes = '';
    }
    return $classes;
}



