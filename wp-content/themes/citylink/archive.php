<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Citylink
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			  <?php get_template_part( 'template-parts/content' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
