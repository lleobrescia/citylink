<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Citylink
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	  <section class="welcome_area" id="home">
    <div class="table">
      <div class="table_cell">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-md-8">
              <div class="welcome_text_area">
                <h2>Let's your dreams start today</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum repellendus dicta maiores pariatur possimus
                  corrupti cum corporis officia quas facere?</p>
                <a href="#download" class="btn btn-default btn-lg"><i class="icofont icofont-download-alt"></i>download now</a>
              </div>
            </div>
            <div class="col-sm-5 col-md-4">
              <div class="welcome_area_thumb">
                <img src="img/bg-pattern/welcome-pro-1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Welcome Area Background Style -->
    <div class="welcome_style_one"></div>
    <div class="welcome_style_two"></div>
    <div class="welcome_style_three"></div>
    <div class="welcome_style_four"></div>
  </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
