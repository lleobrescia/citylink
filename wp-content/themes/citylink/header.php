<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Citylink
 */

?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body <?php body_class(); ?>>
    <div id="page" class="site default-version">
      <header class="header_area">
        <!-- Main Header Area Start -->
        <div class="main_header_area animated">
          <div class="container">
            <div class="row">

              <div class="col-sm-2 col-xs-9">
                <!-- Logo Area:: For better view in all device please use logo image max-width 70px -->
                <div class="logo_area">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php the_header_image_tag(array('class' => 'img-responsive')); ?>
                  </a>
                </div>
              </div>

              <div class="col-sm-10 col-xs-12">
                <!-- Menu Area Start -->
                <div class="main_menu_area">
                    <?php wp_nav_menu( array(
                      'theme_location'  => 'menu-1',
                      'container_class'      => 'mainmenu',
                      'menu_id'         => 'nav',
                      'depth'           => 1
                   ) ); ?>
                </div>
                <!-- Menu Area End -->
              </div>
            </div>
          </div>
        </div>
        <!-- Main Header Area End -->
      </header>

      <div id="content" class="site-content">