<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section id="post-<?php the_ID(); ?>" <?php post_class('ae-container-fluid ae-container-fluid--full'); ?>>
      <header class="rk-portfolio-cover post-inside-1" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
        <div class="item-inside__meta">
          <h1 class="ae-u-bolder rk-portfolio-title "><?php the_title(); ?></h1>
          <p class="ae-theta rk-portfolio-category ">by <span class="ae-u-bolder"><?php the_author(); ?></span></p>
        </div>
      </header>

      <div class="ae-container-fluid">
        <div class="ae-grid ae-grid--collapse rk-portfolio-info ">
          <div class="ae-grid__item item-lg-8 item-sm--center au-xs-ta-center au-lg-ta-left">
            <h2 class="rk-portfolio-inner-title "><?php the_field('post_subtitle'); ?></h2>
          </div>

          <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-right rk-portfolio-details">
            <p class="rk-portfolio-inner-client "><span class="ae-lambda">Client: </span><span class="ae-u-bolder"><?php the_field('client_name'); ?></span></p>
            <p class="au-underline rk-portfolio-inner-website "><a href="http://<?php the_field('client_link'); ?>" class="ae-kappa"><?php the_field('client_link'); ?></a></p>
            <p class="ae-kappa ae-u-bold rk-portfolio-inner-date "><?php the_time('j F, Y'); ?></p>
          </div>
        </div>
      </div>

      <div class="ae-container-fluid ae-container-fluid--inner rk-portfolio--inner">

        <?php if( have_rows('post_content') ): while ( have_rows('post_content') ) : the_row(); ?>

          <?php
            $content_type = get_sub_field('content_type');
            if ( $content_type == 'Image Right') { ?>

            <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
              <div class="ae-grid__item item-lg-5 au-lg-ptp-1">
                <p class="ae-u-bolder"><?php the_sub_field('block_title'); ?></p>
                <?php the_sub_field('block_content'); ?>
              </div>
              <div class="ae-grid__item item-lg-6 item-lg--offset-1">
                <?php $image = get_sub_field('block_image'); if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
              </div>
            </div>

          <?php } else if ( $content_type == 'Image Left') { ?>

            <div class="ae-grid ae-grid--collapse">
              <div class="ae-grid__item item-lg-6">
                <?php $image = get_sub_field('block_image'); if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
              </div>
              <div class="ae-grid__item item-lg-5 item-lg--offset-1 au-lg-ptp-1">
                <p class="ae-u-bolder"><?php the_sub_field('block_title'); ?></p>
                <?php the_sub_field('block_content'); ?>
              </div>
            </div>

          <?php } else if ( $content_type == 'Content Wide') { ?>

            <div class="ae-grid ae-grid--collapse au-xs-ptp-1 au-xs-pbp-1">
              <div class="ae-grid__item item-lg-8 item-lg--offset-2">

                <?php if( get_sub_field('block_title') ): ?>
                  <h4 class="ae-u-bolder"><?php the_sub_field('block_title'); ?></h4>
                <?php endif; ?>

                <?php if( get_sub_field('block_subtitle') ): ?>
                  <p class="ae-eta"><?php the_sub_field('block_subtitle'); ?></p>
                <?php endif; ?>

                <?php the_sub_field('block_content'); ?>

              </div>
            </div>

          <?php } else if ( $content_type == 'Image Wide') { ?>

            <div class="ae-grid ae-grid--collapse">
              <div class="ae-grid__item item-lg--auto">
                <?php $image = get_sub_field('block_image'); if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
              </div>
            </div>

          <?php } else if ( $content_type == 'Blockquote') { ?>

            <div class="ae-grid ae-grid--collapse inner-box-3">
              <div class="ae-grid__item item-lg-10 item-lg--offset-1">
                <blockquote class="au-xs-ta-center">
                  <p class="ae-delta au-italic">“<?php the_sub_field('blockquote'); ?>”</p>
                  <footer>
                    <p class="ae-theta">By <span class="ae-u-bolder"><?php the_sub_field('author'); ?></span></p>
                  </footer>
                </blockquote>
              </div>
            </div>

          <?php } else if ( $content_type == 'Content Lists') { ?>

        <?php if( have_rows('block_lists') ): ?>
            <div class="ae-grid ae-grid--alt au-lg-ta-left au-xs-ptp-1">
          <?php $i = 1; ?>
          <?php while( have_rows('block_lists') ): the_row(); ?>

            <?php if ($i % 2 == 0) { ?>
                <span class="ae-u-boldest"><?php echo $i; ?>.</span>
                <p><?php the_sub_field('item'); ?></p>
              </div>
            <?php } else { ?>
              <div class="ae-grid__item--alt item-lg-4">
                <span class="ae-u-boldest"><?php echo $i; ?>.</span>
                <p><?php the_sub_field('item'); ?></p>
            <?php } ?>

            <?php $i++; ?>

          <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
            </div>
        <?php endif; } ?>

        <?php endwhile; endif; ?>

        <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
          <div class="ae-grid__item item-lg-12 au-xs-ta-center">
            <p class="ae-theta">Written by <span class="ae-u-bolder"><?php the_author(); ?></span></p>
            <p class="ae-theta">in <span class="ae-u-bolder"><?php the_category(', '); ?> </span></p>
          </div>
        </div>

        <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
          <div class="ae-grid__item item-lg-12"></div>
        </div>
      </div>
    </section>

  <?php endwhile; endif; ?>

  <?php comments_template(); ?>

  <section class="ae-container-fluid au-pt-4 au-pb-4">
    <div class="group-buttons au-mt-2">

      <?php $prev_post = get_adjacent_post( true, '', true ); if ( is_a( $prev_post, 'WP_Post' ) ) { ?>
        <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="arrow-button arrow-button--reverse">Prev Post <div class="arrow-cont arrow-cont-rev"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#arrow"></use></svg></div>
        </a>
      <?php } ?>

      <?php $next_post = get_adjacent_post( true, '', false ); if ( is_a( $next_post, 'WP_Post' ) ) {  ?>
        <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="arrow-button">Next Post <span class="arrow-cont"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#arrow"></use></svg></span>
        </a>
      <?php } ?>

    </div>
  </section>

<?php get_footer(); ?>
