<?php
/*
 * Custom styles
 *
 */
function custom_scripts() {

    wp_register_style('font-awesome', get_stylesheet_directory_uri()."/css/font-awesome.min.css" );
    wp_enqueue_style('font-awesome');
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', '1.0',  false );
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap_js', get_stylesheet_directory_uri()."/js/bootstrap.min.js", '1.0',  false );
    wp_enqueue_script('bootstrap_js');
    wp_register_style('owl.carousel', get_stylesheet_directory_uri()."/owl/owl.carousel.css");
    wp_enqueue_style('owl.carousel');
    wp_register_style('owl.theme', get_stylesheet_directory_uri()."/owl/owl.theme.css");
    wp_enqueue_style('owl.theme');
    wp_register_script('owl_js', get_stylesheet_directory_uri()."/owl/owl.carousel.min.js", '1.0',  false );
    wp_enqueue_script('owl_js');
    wp_register_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'style' );
    wp_register_script('custom', get_stylesheet_directory_uri()."/js/custom.js", '1.0',  true );
    wp_enqueue_script('custom');
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );


add_theme_support( 'post-thumbnails' );

add_image_size( 'home-thumb', 1200, 600, true );
add_image_size( 'slider', 600, 600, true );
add_image_size( 'slider-small', 720, 320, true );

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
register_nav_menu( 'user', __( 'User menu', 'belvue' ) );
register_nav_menu( 'membership', __( 'Membership menu', 'belvue' ) );

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

add_theme_support( 'html5', array( 'search-form' ) );


// add custom logo
function belvue_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'belvue_logo_section' , array(
        'title'       => __( 'Logo', 'belvue' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    $wp_customize->add_setting( 'belvue_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'belvue_logo', array(
        'label'    => __( 'Logo', 'belvue' ),
        'section'  => 'belvue_logo_section',
        'settings' => 'belvue_logo',
    ) ) );
}
add_action('customize_register', 'belvue_theme_customizer');





