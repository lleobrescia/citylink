<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Citylink
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <section class="singl-blog-post-area section_padding_100">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <!-- Blog Main Image -->
                <div class="blog-img">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="singl-blog-post">
                  <figure>
                    <!-- Blog Title -->
                    <div class="singl-blog-title">
                      <h3>
											<?php the_title(); ?>
											</h3>
                    </div>
                    <!-- Single Blog Details Area -->
                    <div class="singl-blog-details text-justify">
                      <?php the_content();?>
                    </div>
                    <!-- Blog Tag and share Area -->

                  </figure>
                </div>
                <!--singl-blog-post-->
              </div>
              <!--col-xs-12-->

            </div>
            <!-- row -->
          </div>
          <!--container-->
        </section>

        <?php	endwhile; ?>

				<section class="container" style="margin-bottom: 30px;">
					<div class="row">
						<div class="col-xs-12">
							<?php comments_template(); ?>
						</div>
						<!--col-xs-12-->
					</div>
					<!--row-->
				</section>
				<!--container-->
				
    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->


  <?php
get_footer();