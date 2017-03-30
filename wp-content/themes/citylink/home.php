<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Citylink
*/

get_header();?>
  <section class="breadcumb_area text-center" style="background-image: url('<?php the_field('banner_imagem',  get_the_ID()); ?>');">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcumb_section">
            <!-- Breadcumb page title start -->
            <div class="page_title">
              <h3>
                <?php wp_title(''); ?>
              </h3>
            </div>
            <!-- Breadcumb page pagination start -->
            <ol class="breadcrumb">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="prev" title="Página Inicial">Home</a></li>
              <li class="active">
                <?php wp_title(''); ?>
              </li>
            </ol>
          </div>
          <!--breadcumb_section-->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--breadcumb_area-->

  <?php get_template_part( 'template-parts/content' ); ?>

  <?php
get_footer();
