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
    <meta name="google-site-verification" content="6cHev29VxkaqTQ6Z1ludAgRxQq5C707eqjGv67VS2PE" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script>
      (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-91118528-1', 'auto');
      ga('send', 'pageview');
    </script>

    <?php wp_head(); ?>
    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body <?php body_class(); ?> id="home">
    <article>

      <header>
        <button type="button" class="menu__button" aria-expanded="false">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="container">
          <div class="row">

            <div class="col-xs-9 col-sm-2">
              <!-- Logo Area:: For better view in all device please use logo image max-width 70px -->
              <div class="logo_area">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <?php the_header_image_tag(array('class' => 'img-responsive')); ?>
                </a>
              </div>
            </div>

            <div class="col-xs-3 col-sm-10">
              <!-- Menu Area Start -->
              <div class="main_menu_area fechado">
                <?php 
                 wp_nav_menu( array(
                  'theme_location'  => 'menu-1',
                  'container_class' => 'mainmenu',
                  'menu_id'         => 'nav',
                  'depth'           => 1
                  ) ); 
                ?>
              </div>
              <!-- Menu Area End -->
            </div>
          </div>
        </div>
      </header>
      <div id="main-wrap">

        <section id="bem_vindo" class="home__section container-fluid" style="background-image: url('<?php the_field('imagem'); ?>')">
          <div class="home__box text-center bem__vindo">
            <h1>
              <?php the_field('titulo'); ?>
            </h1>
            <h2>
              <?php the_field('subtitulo'); ?>
            </h2>
            <?php the_field('texto'); ?>
            <a href="<?php the_field('link'); ?>" rel="next" title="<?php the_field('botao'); ?>" class="home__botao">
              <?php the_field('botao'); ?>
            </a>
          </div>
          <!--home__box-->
        </section>
        <!--bem_vindo-->

        <?php
      // check if the flexible content field has rows of data
      if( have_rows('chamada_do_aplicativo') ):
          // loop through the rows of data
          while ( have_rows('chamada_do_aplicativo') ) : the_row();
              if( get_row_layout() == 'chamada' ):
      ?>
          <section class="home__section container-fluid" style="background-image: url('<?php the_sub_field('imagem_de_fundo'); ?>')">
            <div class="section__box container">
              <div class="row">

                <div class="col-sm-6 col-sm-push-6">
                  <div style="max-width:370px;" class="p_wrapper">
                    <h2>
                      <?php the_sub_field('titulo'); ?>
                    </h2>

                    <?php the_sub_field('descrição'); ?>

                    <a href="<?php echo get_permalink(get_sub_field('pagina_inicial_do_aplicativo')); ?>" rel="next" title="<?php the_sub_field('titulo_do_botão'); ?>"
                      class="home__botao">
                      <?php the_sub_field('titulo_do_botão'); ?>
                    </a>
                  </div>

                </div>
                <!--col-xs-6-->

                <div class="col-sm-6 col-sm-pull-6">
                  <img src="<?php the_sub_field('imagem_de_exemplo'); ?>" alt="exemplo">
                </div>
                <!--col-xs-6-->
              </div>
              <!--row-->
            </div>
            <!--section__box-->
          </section>
          <!--home__section-->

          <?php
                endif;
            endwhile;
        endif;
        ?>
      </div>
      <!--#main-wrap-->
      <footer class="home__footer container hidden-xs">
        <div class="row">
          <div class="col-xs-12">
            <p class="pull-left">
              &copy;
              <?php echo date("Y"); ?> Citylink
            </p>
            <div class="footer_social_area pull-right">
              <?php
                  $facebook = get_option('citylink_facebook');
                  $twitter = get_option('citylink_twitter');
                  $instagram = get_option('citylink_instagram');
                  ?>

                <?php if ($facebook != null) : ?>
                <a href="<?php echo $facebook; ?>" class="wow fadeInDown" rel="external" target="_blank">
                  <i class="icofont icofont-social-facebook"></i>
                </a>
                <?php endif; ?>
                <?php if ($instagram  != null) : ?>
                <a href="<?php echo $instagram; ?>" class="wow fadeInDown" rel="external" target="_blank">
                  <i class="icofont icofont-social-instagram"></i>
                </a>
                <?php endif; ?>
                <?php if ($twitter  != null) : ?>
                <a href="<?php echo $twitter; ?>" class="wow fadeInDown" rel="external" target="_blank">
                  <i class="icofont icofont-social-twitter"></i>
                </a>
                <?php endif; ?>
            </div>
            <!--footer_social_area-->
          </div>
          <!--col-xs-12-->
        </div>
        <!--row-->
        <i id="block-down-arrow" class="fa fa-angle-down" role="button" aria-hidden="true" style="cursor:pointer"></i>
      </footer>
      <!--home__footer-->
      <a id="goUp" class="hidden-xs" role="button" rel="nofollow"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    </article>
    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri() . '/js/blockScroll.js '?>"></script>
    <script>
      (function ($) {
        var largura = $(window).width();
        var blockScroller;
        if (largura >= 768) {
          blockScroller = $("#main-wrap").blockScroll({
            fadeBlocks: false
          });
          $("#goUp").on('click',function(){
            blockScroller.goto([1]);
          });
        }
        //desabilita o botao do mobile quando scrolling
        var lastScrollTop = 0;
        $(window).scroll(function (event) {
          var st = $(this).scrollTop();
          if (st > 0) {
            if (st > lastScrollTop) {
              // downscroll code
              $('.menu__button').addClass('sumir');
               $('#goUp').removeClass('sumir');
            } else {
              // uproll code
              $('.menu__button').removeClass('sumir');
              $('#goUp').addClass('sumir');
            }
          }
          lastScrollTop = st;
        });
        //Botao mobile
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
  </body>

  </html>