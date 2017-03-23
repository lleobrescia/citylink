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
$banner = get_field('banner_interno');
get_header();?>

<?php if($banner ): ?>
  <section class="breadcumb_area text-center" style="background-image: url('<?php echo $banner; ?>');">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcumb_section">
            <!-- Breadcumb page title start -->
            <div class="page_title">
              <h3><?php the_title(); ?></h3>
            </div>
            <!-- Breadcumb page pagination start -->
            <ol class="breadcrumb">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
              <li class="active">
                <?php the_title(); ?>
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
  <?php endif; ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php get_template_part( 'template-parts/content-page-builder' ); ?>
      </article>
    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <?php
get_footer();