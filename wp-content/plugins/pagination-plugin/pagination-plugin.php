<?php
/*
Plugin Name: Pagination
Description: Simple pagination plugins. Usage: get_pagination($range,$tagOpen,$tagClose). Default: get_pagination(4,&lt;ol&gt;,&lt;/ol&gt;')
Version: 0.1
License: GPL
*/

function pagination_init()
{
	$relPath = dirname(plugin_basename(__FILE__)) . '/languages/';
	load_plugin_textdomain( 'pagination', null, $relPath );
}
add_action('init', 'pagination_init');

/**
* A pagination function
* @param integer $range: The range of the slider, works best with even numbers
* Used WP functions:
* get_pagenum_link($i) - creates the link, e.g. http://site.com/page/4
* previous_posts_link(' « '); - returns the Previous page link
* next_posts_link(' » '); - returns the Next page link
*/
function get_pagination($range = 4, $tagOpen='<ol>', $tagClose='</ol>'){
  // $paged - number of the current page
  global $paged, $wp_query;
  // How much pages do we have?
  if ( !$max_page ) {
    $max_page = $wp_query->max_num_pages;
  }
  // We need the pagination only if there are more than 1 page
  if($max_page > 1){
    if (!empty($tagOpen)){
        echo $tagOpen;
    }
    if(!$paged){
      $paged = 1;
    }
    // On the first page, don't put the First page link
    if($paged != 1){
      echo '<li class="start"><a href="' . get_pagenum_link(1) . '">'. __('Początek', 'pagination') .'</a></li> ';
    }
    // To the previous page
    if (get_previous_posts_link()) {
        echo('<li class="prev">');
        previous_posts_link('&#171;');
        echo('</li>');
    }
    // We need the sliding effect only if there are more pages than is the sliding range
    if($max_page > $range){
      // When closer to the beginning
      if($paged < $range){
        for($i = 1; $i <= ($range + 1); $i++){
          echo " <li ";
          if($i==$paged) echo "class='current'";
          echo "><a href='" . get_pagenum_link($i) ."'";
          echo ">$i</a></li> ";
        }
      }
      // When closer to the end
      elseif($paged >= ($max_page - ceil(($range/2)))){
        for($i = $max_page - $range; $i <= $max_page; $i++){
          echo " <li ";
          if($i==$paged) echo "class='current'";
          echo "><a href='" . get_pagenum_link($i) ."'";
          echo ">$i</a></li> ";
        }
      }
      // Somewhere in the middle
      elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
        for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){
          echo " <li ";
          if($i==$paged) echo "class='current'";
          echo "><a href='" . get_pagenum_link($i) ."'";
          echo ">$i</a></li> ";
        }
      }
    }
    // Less pages than the range, no sliding effect needed
    else{
      for($i = 1; $i <= $max_page; $i++){
        echo " <li ";
        if($i==$paged) echo "class='current'";
        echo "><a href='" . get_pagenum_link($i) ."'";
        echo ">$i</a></li> ";
      }
    }
    // Next page
    if (get_next_posts_link()) {
        echo('<li class="next">');
        next_posts_link('&#187;');
        echo('</li>');
    }
    // On the last page, don't put the Last page link
    if($paged != $max_page){
      echo ' <li class="end"><a href="' . get_pagenum_link($max_page) . '">'. __('Koniec', 'pagination'). '</a></li> ';
    }
    if (!empty($tagClose)){
        echo $tagClose;
    }
  }
}