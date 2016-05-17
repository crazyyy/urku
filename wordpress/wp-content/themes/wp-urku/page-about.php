<?php /* Template Name: About Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <div id="post-<?php the_ID(); ?>" <?php post_class('ae-container-fluid ae-container-fluid--inner rk-main'); ?>>

      <div class="ae-grid au-xs-ta-center au-mb-4">
        <?php if( have_rows('team') ): while ( have_rows('team') ) : the_row(); ?>
          <div class="ae-grid__item item-lg-4 ae-kappa au-mb-3">
            <?php $image = get_sub_field('photo'); if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="au-mb-3" />
            <?php endif; ?>
            <h5 class="ae-u-bolder au-mt-2"><?php the_sub_field('name'); ?></h5>
            <p class="ae-u-bolder au-mb-3"><?php the_sub_field('post'); ?></p>
            <p class="au-lg-ta-left au-mb-3 au-pl-4 au-pr-4"><?php the_sub_field('bio'); ?></p><a href="<?php the_sub_field('link_href'); ?>" class="ae-u-bolder au-underline"><?php the_sub_field('link_title'); ?></a>
          </div>
        <?php endwhile; endif; ?>
      </div>

      <div class="ae-grid au-pt-2">
        <div class="ae-grid__item item-lg-8 item-lg--offset-2">
          <h4 class="ae-u-bolder"><?php the_title(); ?></h4>
          <?php the_content(); ?>
        </div>
      </div>

      <div class="ae-grid ae-grid--alt au-xs-ptp-1">
        <?php if( have_rows('three_blocks') ): while ( have_rows('three_blocks') ) : the_row(); ?>
          <div class="ae-grid__item--alt item-lg-4">
            <h6 class="ae-u-boldest"><?php the_sub_field('block_title'); ?></h6>
            <?php the_sub_field('block_content'); ?>
          </div>
        <?php endwhile; endif; ?>
      </div>

      <p class="au-flex au-pt-4 group-buttons">
        <a href="<?php echo home_url(); ?>/portfolios" class="au-mt-4 arrow-button arrow-button--right arrow-button--out">View Our Portfolio
          <span class="arrow-cont">
            <svg>
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#arrow"></use>
            </svg>
          </span>
        </a>
      </p>
    </div>




  <?php endwhile; endif; ?>
<?php get_footer(); ?>
