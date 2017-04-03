<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// check if the flexible content field has rows of data
if( have_rows('citylink_layout') ):

  // loop through the rows of data
  while ( have_rows('citylink_layout') ) : the_row();
?>

  <?php  if( get_row_layout() == 'bloco_bem-vindo' ): ?>
  <section class="welcome_area" id="home">
    <div class="table">
      <div class="table_cell">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-md-8">
              <div class="welcome_text_area">
                <h2>
                  <?php the_sub_field('bem-vindo_titulo');?>
                </h2>
                <p>
                  <?php the_sub_field('bem-vindo_subtitulo');?>
                </p>
                <a href="<?php the_sub_field('bem-vindo_link');?>" class="btn btn-default btn-lg" target="_blank" title="<?=get_sub_field('bem-vindo_texto-link');?>"
                  rel="external">
                <i class="fa <?php the_sub_field('bem-vindo_icone');?>" aria-hidden="true"></i>
                <?php the_sub_field('bem-vindo_texto-link');?>
              </a>
              </div>
              <!--welcome_text_area-->
            </div>
            <!--col-sm-7 col-md-8-->
            <div class="col-sm-5 col-md-4">
              <div class="welcome_area_thumb">
                <img src="<?php the_sub_field('bem-vindo_imagem');?>" alt="">
              </div>
              <!--welcome_area_thumb-->
            </div>
            <!--col-sm-5 col-md-4-->
          </div>
          <!--row-->
        </div>
        <!--container-->
      </div>
      <!--table_cell-->
    </div>
    <!--table-->
    <!-- Welcome Area Background Style -->
    <div class="welcome_style_one"></div>
    <div class="welcome_style_two"></div>
    <div class="welcome_style_three"></div>
    <div class="welcome_style_four"></div>
  </section>
  <!--welcome_area-->

  <?php  elseif( get_row_layout() == 'bloco_features' ): ?>
  <section class="about_area section_padding_100_70" id="product">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Section Heading Start -->
          <div class="section_heading wow fadeInUp">
            <h2>
              <?php the_sub_field('titulo_feature');?>
            </h2>
            <p>
              <?php the_sub_field('features_subtitulo');?>
            </p>
          </div>
          <!-- Section Heading End -->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-2">
          <div class="about_product_discription">
            <div class="row">
              <?php if( have_rows('features') ): ?>
              <?php while ( have_rows('features') ) : the_row(); ?>
              <div class="col-xs-12">
                <div class="single_about_part wow fadeInUp" data-wow-delay="0.2s">
                  <div class="feature_icon">
                    <i class="fa <?php the_sub_field('feature_icone');?>" aria-hidden="true"></i>
                  </div>
                  <h3>
                    <?php the_sub_field('feature_titulo');?>
                  </h3>
                  <p>
                    <?php the_sub_field('feature_texto');?>
                  </p>
                </div>
              </div>
              <!--col-xs-12-->
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <!--row-->
          </div>
          <!--about_product_discription-->
        </div>
        <!--col-xs-12 col-sm-6 col-md-4 col-md-offset-2-->

        <div class="col-xs-12 col-sm-6 col-md-4">
          <!-- About Product Thumb Area Start -->
          <div class="about_product_thumb text-center wow fadeInLeft" data-wow-delay="0.2s">
            <img src="<?php the_sub_field('features_imagem');?>" alt="">
          </div>
          <!--about_product_thumb-->
        </div>
        <!--col-xs-12 col-sm-6 col-md-4-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--product-->

  <?php  elseif( get_row_layout() == 'bloco_video' ): ?>
  <?php $corInicial = get_sub_field('cor_inicial'); $corFinal = get_sub_field('cor_final'); ?>
  <section class="video_area" style="background-image: url('<?php the_sub_field('video_imagem');?>');">
    <div class="table">
      <div class="table_cell">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <!-- Video Area Text -->
              <div class="video_area_text text-center section_padding_100">
                <h2>
                  <?php the_sub_field('video_titulo');?>
                </h2>
                <p>
                  <?php the_sub_field('video_subtitulo');?>
                </p>
                <a href="<?php the_sub_field('video_link');?>" class="video_btn" data-fancybox rel="nofollow" role="button">
                  <i class="icofont icofont-play"></i>
                </a>
              </div>
              <!--video_area_text-->
            </div>
            <!--col-xs-12-->
          </div>
          <!--row-->
        </div>
        <!--container-->
      </div>
      <!--table_cell-->
    </div>
    <!--table-->
  </section>
  <!--video_area-->
  <style>
    .video_area:before {
      background: <?=$corInicial ?>;
      background: -webkit-linear-gradient(to left, <?=$corFinal ?>, <?=$corInicial ?>);
      background: -webkit-linear-gradient(right, <?=$corFinal ?>, <?=$corInicial ?>);
      background: linear-gradient(to left, <?=$corFinal ?>, <?=$corInicial ?>);
    }
  </style>

  <?php  elseif( get_row_layout() == 'bloco_sobre' ): ?>
  <section class="about_app_area section_padding_100">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-5 col-md-offset-1">
          <!-- About Image -->
          <div class="about_image">
            <img src="<?php the_sub_field('sobre_imagem');?>" alt="" class="center-block img-responsive">
          </div>
          <!--about_image-->
        </div>
        <!--col-sm-6 col-md-5 col-md-offset-1-->
        <div class="col-sm-6 col-md-5">
          <!-- About Text -->
          <div class="about_us_text_area">
            <h3>
              <?php the_sub_field('sobre_titulo');?>
            </h3>
            <?php the_sub_field('sobre_conteudo');?>
            <a href="<?php the_sub_field('sobre_link');?>" rel="next" title="<?=get_sub_field('sobre_titulo');?>">
              <?php the_sub_field('sobre_botao');?>
            </a>
          </div>
          <!--about_us_text_area-->
        </div>
        <!--col-sm-6 col-md-5-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--about_app_area-->

  <?php  elseif( get_row_layout() == 'bloco_beneficios' ): ?>
  <section class="more_features_area section_padding_100_70" id="features">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Section Heading Start -->
          <div class="section_heading wow fadeInUp">
            <h2>
              <?php the_sub_field('beneficios_titulo');?>
            </h2>
            <p>
              <?php the_sub_field('beneficios_subtitulo');?>
            </p>
          </div>
          <!-- Section Heading End -->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
      <div class="row flex__stretch">
        <?php	if( have_rows('beneficio') ): $count = 1;?>
          <?php while ( have_rows('beneficio') ) : the_row(); ?>
          <div class="col-sm-6 col-md-3 flex__stretch">
            <div class="single_benifits wow fadeInUp item active" data-wow-delay="0.2s">
              <div class="icon_box">
                <i class="fa <?php the_sub_field('beneficio_icone');?>" aria-hidden="true"></i>
              </div>
              <h4>
                <?php the_sub_field('beneficio_titulo');?>
              </h4>
              <?php the_sub_field('beneficio_texto');?>
            </div>
          </div>
          <!--col-sm-6 col-md-3-->

          <div class="clearfix visible-xs"></div>
          <?php if($count == 4): ?>
          <div class="clearfix hidden-xs hidden-sm"></div>
          <?php elseif($count == 2): ?>
          <div class="clearfix visible-sm"></div>
          <?php endif; ?>
          <?php $count++; endwhile; ?>
          <?php endif; ?>
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--more_features_area-->

  <?php  elseif( get_row_layout() == 'bloco_como_funciona' ): ?>
  <section class="work_process_area section_padding_100_70">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Section Heading Start -->
          <div class="section_heading wow fadeInUp">
            <h2>
              <?php the_sub_field('funciona_titulo');?>
            </h2>
            <p>
              <?php the_sub_field('funciona_subtitulo');?>
            </p>
          </div>
          <!-- Section Heading End -->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->

      <div class="row flex__stretch">
        <?php if( have_rows('passos') ): $count = 1;?>
        <?php while ( have_rows('passos') ) : the_row(); ?>

        <div class="col-sm-6 col-md-3 flex__stretch">
          <div class="single_work_step wow fadeInUp" data-wow-delay="0.2s">
            <i class="fa <?php the_sub_field('passo_icone');?>" aria-hidden="true"></i>
            <h4>
              <?php the_sub_field('passo_titulo');?>
            </h4>
            <p>
              <?php the_sub_field('passo_texto');?>
            </p>
          </div>
          <!--single_work_step-->
        </div>
        <!--col-sm-6 col-md-3-->
        <div class="clearfix visible-xs"></div>
        <?php if($count == 4): ?>
        <div class="clearfix hidden-xs hidden-sm"></div>
        <?php elseif($count == 2): ?>
        <div class="clearfix visible-sm"></div>
        <?php endif; ?>

        <?php $count++; endwhile; ?>
        <?php endif; ?>
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--work_process_area-->

  <?php  elseif( get_row_layout() == 'bloco_depoimentos' ): ?>
  <section class="testimonial_area section_padding_100" style="background-image: url('<?php the_sub_field('depo_bg');?>');">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <div class="testimonials_area">
            <div class="testimonials owl-carousel">
              <?php if( have_rows('depoimento') ): ?>
              <?php while ( have_rows('depoimento') ) : the_row(); ?>
              <div class="single_testimonial_area text-center">
                <!-- Single testimonial thumb  -->
                <div class="testimonial_author_thumb">
                  <img src="<?php the_sub_field('depoimento_foto');?>" alt="">
                </div>
                <!-- Single testimonial text  -->
                <div class="testimonial_text">
                  <?php the_sub_field('depoimento_comentario');?>
                  <!--  Rating  -->
                  <div class="rating">
                  </div>
                  <div class="testimonial_author_name">
                    <h4>
                      <?php the_sub_field('depoimento_nome');?>
                    </h4>
                    <h5>
                      <?php the_sub_field('depoimento_titulo');?>
                    </h5>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <!--testimonials-->
          </div>
          <!--testimonials_area-->
        </div>
        <!--col-xs-12 col-md-8 col-md-offset-2-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--testimonial_area-->

  <?php  elseif( get_row_layout() == 'bloco_slide' ): ?>
  <section class="app_screenshot_area section_padding_100">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Section Heading Start -->
          <div class="section_heading wow fadeInUp">
            <h2>
              <?php the_sub_field('slide_titulo');?>
            </h2>
            <p>
              <?php the_sub_field('slide_subtitulo');?>
            </p>
          </div>
          <!-- Section Heading End -->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->

      <div class="row">
        <div class="col-xs-12">
          <!-- App Screenshot Slider Area -->
          <div class="app_screenshots owl-carousel">
            <?php if( have_rows('slide_imagens') ): ?>
            <?php while ( have_rows('slide_imagens') ) : the_row(); ?>

            <div class="single_screenshot">
              <img src="<?php the_sub_field('slide_imagem');?>" alt="Screenshot">
            </div>

            <!--single_screenshot-->
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <!--app_screenshots-->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--app_screenshot_area-->
  <style>
    .app_screenshots .owl-prev,
    .app_screenshots .owl-next {
      cursor: pointer
    }
  </style>

  <?php  elseif( get_row_layout() == 'bloco_preco' ): ?>
  <section class="price_plan_area section_padding_100_70" id="price">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Section Heading Start -->
          <div class="section_heading wow fadeInUp">
            <h2>
              <?php the_sub_field('preco_titulo');?>
            </h2>
            <p>
              <?php the_sub_field('preco_subtitulo');?>
            </p>
          </div>
          <!-- Section Heading End -->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->

      <div class="row price_plan_list">
        <?php if( get_row_layout('preco_box') ): ?>
        <?php while ( have_rows('preco_box') ) : the_row(); ?>
        <div class="col-sm-6 col-md-3">
          <div class="single_price_plan item wow fadeInUp" data-wow-delay="0.2s">
            <div class="title">
              <h3>
                <?php the_sub_field('preco_box_titulo');?>
              </h3>
              <p>
                <?php the_sub_field('preco_box_desc');?>
              </p>
            </div>
            <div class="price">
              <h4>
                <?php the_sub_field('preco_preco');?>
              </h4>
            </div>
            <div class="description">
              <?php the_sub_field('preco_descricao');?>
            </div>
            <div class="button">
              <a class="btn btn-default" href="<?php the_sub_field('preco_link');?>" role="button">
                <?php the_sub_field('preco_botao');?>
              </a>
            </div>
          </div>
        </div>
        <!--col-sm-6 col-md-3-->
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--price_plan_area-->

  <?php  elseif( get_row_layout() == 'bloco_texto' ): ?>
  <section class="about_us_area section_padding_100">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Section Heading Start -->
          <div class="section_heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h2>
              <?php the_sub_field('texto_titulo');?>
            </h2>
            <p>
              <?php the_sub_field('text_subtitulo');?>
            </p>
          </div>
          <!-- Section Heading End -->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->

      <div class="row">
        <div class="col-xs-12">
          <?php the_sub_field('texto_conteudo');?>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--about_us_area-->

  <?php  elseif( get_row_layout() == 'bloco_faq' ): ?>
  <section class="faq_area section_padding_100" id="faq">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Section Heading Start -->
          <div class="section_heading wow fadeInUp">
            <h2>
              <?php the_sub_field('faq_titulo');?>
            </h2>
            <p>
              <?php the_sub_field('faq_subtitulo');?>
            </p>
          </div>
          <!-- Section Heading End -->
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 clearfix">
          <div class="accordions" id="accordion2" role="tablist" aria-multiselectable="true">
            <?php if( have_rows('pergunta_resposta') ): $count = 0;?>
            <?php while ( have_rows('pergunta_resposta') ) : the_row(); ?>
            <!-- single accordian area start -->
            <div class="panel single-accordion">
              <h5>
                <a role="button" class="collapsed" aria-expanded="true" aria-controls="six<?php echo $count; ?>" data-toggle="collapse" data-parent="#accordion2"
                  href="#six<?php echo $count; ?>">
                  <?php the_sub_field('faq_pergunta');?>
                  <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                  <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                </a>
              </h5>
              <div id="six<?php echo $count; ?>" class="accordion-content collapse">
                <p>
                  <?php the_sub_field('faq_resposta');?>
                </p>
              </div>
            </div>
            <?php $count++; ?>
            <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php  elseif( get_row_layout() == 'bloco_historico' ): ?>
  <section class="timeline_area section_padding_100">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Section Heading Start -->
          <div class="section_heading wow fadeInUp">
            <h2>
              <?php the_sub_field('histo_titulo');?>
            </h2>
            <p>
              <?php the_sub_field('histo_subtitulo');?>
            </p>
          </div>
          <!-- Section Heading End -->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->

      <div class="row">
        <div class="col-xs-12">
          <div class="history_timeline_area">
            <?php if( have_rows('eventos') ): ?>
            <?php $lado = 'even-item'; ?>
            <?php while ( have_rows('eventos') ) : the_row(); ?>
            <!-- Single Timeline Area Start -->
            <div class="single_timeline_block <?php echo $lado; ?> clearfix wow fadeInUp">
              <div class="timeline_icon">
                <i class="fa <?php the_sub_field('evento_icone');?>" aria-hidden="true"></i>
              </div>
              <!--timeline_icon-->
              <div class="timeline_text_content">
                <h3>
                  <?php the_sub_field('evento_titulo');?>
                </h3>
                <h5>
                  <?php the_sub_field('evento_data');?>
                </h5>
                <p>
                  <?php the_sub_field('evento_descricao');?>
                </p>
              </div>
              <!--timeline_text_content-->
            </div>
            <?php
            if($lado == 'even-item'){
              $lado = 'odd-item';
            }else{
              $lado = 'even-item';
            }
          ?>
              <!--single_timeline_block-->
              <?php endwhile; ?>
              <?php endif; ?>
          </div>
          <!--history_timeline_area-->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--timeline_area-->

  <?php  elseif( get_row_layout() == 'bloco_videos' ): ?>
  <section class="work_process_area section_padding_100_70">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Section Heading Start -->
          <div class="section_heading wow fadeInUp">
            <h2>
              <?php the_sub_field('titulo_videos');?>
            </h2>
            <p>
              <?php the_sub_field('subtitulo_videos');?>
            </p>
          </div>
          <!-- Section Heading End -->
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->

      <div class="row">
        <?php if( have_rows('videos') ): $count = 1;?>
        <?php while ( have_rows('videos') ) : the_row(); ?>
        <div class="col-sm-6 col-md-3">
          <figure class="videos_blocos_thumb">
            <a href="<?=get_sub_field('link_do_video') ?>" data-fancybox rel="nofollow" role="button">
              <?= wp_get_attachment_image( get_sub_field('thumbnail'), 'full', "", array( "class" => "img-responsive" ) );  ?>
              <i class="fa fa-play" aria-hidden="true"></i>
            </a>
          </figure>

        </div>
        <!--col-sm-6 col-md-3-->
        <div class="clearfix visible-xs"></div>
        <?php if($count == 4): ?>
        <div class="clearfix hidden-xs hidden-sm"></div>
        <?php elseif($count == 2): ?>
        <div class="clearfix visible-sm"></div>
        <?php endif; ?>

        <?php $count++; endwhile; ?>
        <?php endif; ?>
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>
  <!--work_process_area-->

  <?php
      endif;
  endwhile;
else : ?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p>
            <?php esc_html_e( 'It looks like nothing was found at this location.', 'citylink' ); ?>
          </p>
        </div>
      </div>
    </div>
    <?php endif;?>