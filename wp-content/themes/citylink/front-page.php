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

  <body <?php body_class(); ?> id="home">

    <header>
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
    </header>

    <section id="bem_vindo" class="home__section container-fluid" style="background-image: url('<?php the_field('imagem'); ?>')">
      <div class="home__box text-center bem__vindo">
        <h1>
          <?php the_field('titulo'); ?>
        </h1>
        <p>
          <?php the_field('texto'); ?>
        </p>
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

            <div class="col-xs-6 text-right">
              <img src="<?php the_sub_field('imagem_de_exemplo'); ?>" alt="exemplo">
            </div>
            <!--col-xs-6-->

            <div class="col-xs-6" style="max-width:370px">
              <h2>
                <?php the_sub_field('titulo'); ?>
              </h2>
              <p>
                <?php the_sub_field('descrição'); ?>
              </p>
              <a href="<?php echo get_permalink(the_sub_field('pagina_inicial_do_aplicativo')); ?>" rel="next" title="<?php the_sub_field('titulo_do_botão'); ?>"
                class="home__botao">
                <?php the_sub_field('titulo_do_botão'); ?>
              </a>
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

        <footer class="home__footer container">
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
                  <a href="<?php echo $facebook; ?>" class="wow fadeInDown" data-wow-delay="0.2s" target="_blank">
                    <i class="icofont icofont-social-facebook"></i>
                  </a>
                  <?php endif; ?>
                  <?php if ($instagram  != null) : ?>
                  <a href="<?php echo $instagram; ?>" class="wow fadeInDown" data-wow-delay="0.4s" target="_blank">
                    <i class="icofont icofont-social-instagram"></i>
                  </a>
                  <?php endif; ?>
                  <?php if ($twitter  != null) : ?>
                  <a href="<?php echo $twitter; ?>" class="wow fadeInDown" data-wow-delay="0.6s" target="_blank">
                    <i class="icofont icofont-social-twitter"></i>
                  </a>
                  <?php endif; ?>
              </div>
              <!--footer_social_area-->
            </div>
            <!--col-xs-12-->
          </div>
          <!--row-->
          <i class="fa fa-angle-down" aria-hidden="true" style="cursor:pointer"></i>
        </footer>
        <!--home__footer-->

        <?php wp_footer(); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
        <script>
          (function ($) {
            var altura = $(window).height();
            //Muda a altura dos blocos de acordo com a altura do dispositivo
            $('.home__section').css('height', altura);

            function wheel($div, deltaY, steps) {
              var step = steps;
              var pos = $div.scrollTop();
              var nextPos = pos + (step * (-deltaY));
              $div.scrollTop(nextPos);
            }
            $('.fa-angle-down').on('click', function () {
              wheel($('#home'), -1, altura);
            })
            $('#home').bind('mousewheel', function (event, delta, deltaX, deltaY) {
              if (delta > -2 && delta < 2) {
                wheel($(this), deltaY, altura);
                event.preventDefault();
              }
            });
          })(jQuery);
        </script>
  </body>

  </html>