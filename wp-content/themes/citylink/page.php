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
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$banner = get_field('banner_interno');
get_header();?>

  <?php
 $cor = get_field('cor_predominante');
 
?>

    <style>
      .welcome_text_area a,
      .single_about_part .feature_icon:before,
      .single_about_part .feature_icon,
      .single_about_part .feature_icon:after,
      .video_area_text>a,
      .about_us_text_area>a,
      .single_benifits.active .icon_box,
      .single_price_plan .price,
      .single-accordion h5 a,
      .single_about_part:hover,
      .app_screenshots .owl-prev:hover,
      .app_screenshots .owl-next:hover {
        background-color: <?=$cor ?>;
      }

      .welcome_text_area a:hover,
      .welcome_text_area a:focus,
      .about_us_text_area>a:hover {
        color: <?=$cor ?>;
        background-color: #fff;
      }

      .single_benifits.active h4,
      .single_work_step>i,
      .footer_menu a:hover {
        color: <?=$cor ?>;
      }

      .single_price_plan .button>a:hover,
      .single_price_plan .button>a:focus {
        color: #fff;
        border: 3px solid transparent;
        background-color: <?=$cor ?>;
      }

      .video_area_text>a:hover,
      .single_price_plan .button>a,
      .about_us_text_area>a:hover {
        border-color: <?=$cor ?>;
        color: <?=$cor ?>;
      }

      .app_screenshots .owl-prev:hover,
      .app_screenshots .owl-next:hover {
        border-color: <?=$cor ?>;
      }

      .footer_social_area a {
        color: <?=$cor ?>;
      }

      .footer_social_area a:hover {
        background-color: <?=$cor ?>;
        border-color: <?=$cor ?>;
      }
    </style>
    <?php if($banner ): ?>
    <section class="breadcumb_area text-center" style="background-image: url('<?php echo $banner; ?>');">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="breadcumb_section">
              <!-- Breadcumb page title start -->
              <div class="page_title">
                <h3>
                  <?php the_title(); ?>
                </h3>
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