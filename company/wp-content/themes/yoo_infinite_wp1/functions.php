<?php
/**
* @package   Infinite
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// load config    
require_once(dirname(__FILE__).'/config.php');

function my_scripts_method() {
    wp_enqueue_script(
        'floating',
        get_stylesheet_directory_uri() . '/js/floating-1.12.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );