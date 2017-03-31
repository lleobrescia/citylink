<?php
/**
* Addging additional setting for theme
*
* @package Citylink
*/

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
      'page_title' 	=> esc_html__( 'Theme Settings', 'citylink' ),
      'menu_title'	=> esc_html__( 'Theme Settings', 'citylink' ),
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));
    
}