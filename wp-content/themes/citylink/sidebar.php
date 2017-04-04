<?php
/**
* The sidebar containing the main widget area
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Citylink
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

  <aside id="secondary" class="widget-area" role="complementary">
    <div class="col-xs-12 col-md-3">
      
      <!-- Blog Sidebar -->
      <div class="event_sidebar">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
               
      </div>
      <!--event_sidebar-->
    </div>
    <!--col-xs-12 col-md-3-->
  </aside>
  <!-- #secondary -->