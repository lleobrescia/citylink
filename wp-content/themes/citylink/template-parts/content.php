<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Citylink
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

	<section class="blog_area section_padding_100">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<div class="row">
						<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post();  ?>
						<!-- single latest news area start -->
						<div class="col-xs-12 col-sm-6">
							<div class="single_latest_news_area item">
								<!-- single latest news thumb -->
								<div class="single_latest_news_img_area">
									<?php the_post_thumbnail(); ?>
									<!-- single latest news published date -->
								</div>
								<div class="single_latest_news_text_area">
									<!-- single latest news title -->
									<div class="news_title">
										<a href="<?php echo esc_url( get_permalink() ); ?>" rel="next">
											<h4>
												<?php the_title(); ?>
											</h4>
										</a>
									</div>
									<div class="author_name_date">
										<div class="author">
											<i class="icofont icofont-user"></i>
											<p>
												<?php the_author(); ?>
											</p>
										</div>
										<time class="date">
											<i class="icofont icofont-calendar"></i>
											<p>
												<?php the_time(); ?>
											</p>
										</time>
									</div>
									<!-- single latest news excerp -->
									<div class="news_content">
										<p>
											<?php echo get_excerpt(); ?>
										</p>
									</div>
									<!-- learn more button -->
									<div class="learn_more_button">
										<a class="btn btn-default" role="button" href="<?php echo esc_url( get_permalink() ); ?>" rel="next">
											<?php esc_html_e( 'Read More', 'citylink' ); ?>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!--col-xs-12 col-sm-6-->

						<?php endwhile; ?>
					</div>
					<!--row-->
				</div>
				<!--col-xs-12 col-md-9-->

				<?php get_sidebar(); ?>
			</div>
			<!-- end. row -->

			<div class="row">
				<div class="col-xs-12">
					<nav aria-label="">
						<ul class="pager">
							<li class="previous">
								<?php next_posts_link( 'Posts Anteriores' ); ?>
							</li>
							<li class="next">
								<?php previous_posts_link( 'Novos Posts' ); ?>
							</li>
						</ul>
					</nav>
				</div>
				<!--col-xs-12-->
			</div>
			<!--row-->
			<?php else: ?>
				<?php get_template_part( 'template-parts/content-none' ); ?>
			<?php endif; ?>
		</div>
		<!-- container -->
	</section>