<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Citylink
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

  </div>
  <!-- #content -->

  <footer class="footer_area">
    <!-- Bottom Footer Area Start -->
    <div class="footer_bottom_area">
      <div class="container">
        <div class="row">
          <!-- Footer Social Area Start -->
          <div class="col-xs-12">
            <div class="footer_social_area">
              <?php
                $facebook = get_option('citylink_facebook');
                $twitter = get_option('citylink_twitter');
                $instagram = get_option('citylink_instagram');
                ?>

                <?php if ($facebook != null) : ?>
                <a href="<?php echo $facebook; ?>" class="wow fadeInDown" data-wow-delay="0.2s" target="_blank" rel="external" title="Facebook Citylink">
                  <i class="icofont icofont-social-facebook"></i>
                </a>
                <?php endif; ?>
                <?php if ($instagram  != null) : ?>
                <a href="<?php echo $instagram; ?>" class="wow fadeInDown" data-wow-delay="0.4s" target="_blank" rel="external" title="Instagram Citylink">
                  <i class="icofont icofont-social-instagram"></i>
                </a>
                <?php endif; ?>
                <?php if ($twitter  != null) : ?>
                <a href="<?php echo $twitter; ?>" class="wow fadeInDown" data-wow-delay="0.6s" target="_blank" rel="external" title="Twitter Citylink">
                  <i class="icofont icofont-social-twitter"></i>
                </a>
                <?php endif; ?>
            </div>
            <!-- Footer Menu Area Start -->
            <?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'menu_id' => 'footer-menu', 'menu_class' => 'footer_menu' ) ); ?>
          </div>
        </div>
      </div>
      <!-- end./ row -->
    </div>
    <!-- end./ container -->

  </footer>
  </div>
  <!-- #page -->

  <script>
    (function ($) {
      $(document).ready(function () {
        $('.menu__button').on('click', function (event) {
          event.preventDefault();
          var check = $(this).attr('aria-expanded');
          if (check === 'true') {
            $('.main_menu_area').removeClass("aberto").addClass("fechado");
            $(this).attr({
              'aria-expanded': 'false'
            });
          } else {
            $('.main_menu_area').removeClass("fechado").addClass("aberto");
            $(this).attr({
              'aria-expanded': 'true'
            });
          }
        });
      });
    })(jQuery);
  </script>
  <?php wp_footer(); ?>

  </body>

  </html>