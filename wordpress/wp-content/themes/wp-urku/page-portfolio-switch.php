<?php /* Template Name: Portfolio Switch Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <section id="post-<?php the_ID(); ?>" <?php post_class('ae-container-fluid ae-container-fluid--inner rk-portfolio rk-main'); ?>>

      <div class="au-xs-ta-center au-lg-ta-left">
        <?php wpeSideNav(); ?>
      </div>

      <div class="rk-portfolio__items">

        <?php if( have_rows('blocks') ): while ( have_rows('blocks') ) : the_row(); ?>

          <!-- Wide -->
          <?php $content_type = get_sub_field('blocks_type');

            if ( $content_type == 'Wide') { ?>

              <?php $posts = get_sub_field('item_one'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-1 rk-size-12 rk-tosize-6 rk-landscape" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                  <div class="item-meta">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('post_subtitle'); ?></p>
                  </div>
                </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

            <!-- Two Half -->
            <?php } else if ( $content_type == 'Two Half') { ?>

              <?php $posts = get_sub_field('item_one'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-2 rk-size-6 rk-portrait" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                  <div class="item-meta">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('post_subtitle'); ?></p>
                  </div>
                </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

              <?php $posts = get_sub_field('item_two'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-3 rk-size-6 rk-tosize-4 rk-portrait rk-tosquare" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                  <div class="item-meta">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('post_subtitle'); ?></p>
                  </div>
                </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

            <!-- Left Two Right One -->
            <?php } else if ( $content_type == 'Left Two Right One') { ?>

              <?php $posts = get_sub_field('item_one'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

              <div class="rk-items-cont rk-size-6 rk-tosize-8">
                <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-4 rk-size-12 rk-tosize-6 rk-landscape" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                  <div class="item-meta">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('post_subtitle'); ?></p>
                  </div>
                </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

              <?php $posts = get_sub_field('item_two'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                  <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-5 rk-size-12 rk-tosize-6 rk-landscape" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                    <div class="item-meta">
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_field('post_subtitle'); ?></p>
                    </div>
                  </a>
                </div>

              <?php endforeach; wp_reset_postdata(); endif; ?>

              <?php $posts = get_sub_field('item_three'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-6 rk-size-6 rk-tosize-4 rk-portrait rk-tosquare" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                  <div class="item-meta">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('post_subtitle'); ?></p>
                  </div>
                </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

            <!-- Left Two Small Right One Big -->
            <?php } else if ( $content_type == 'Left Two Small Right One Big') { ?>

              <?php $posts = get_sub_field('item_one'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

              <div class="rk-items-cont rk-size-4 rk-tosize-8">
                <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-7 rk-size-12 rk-tosize-6 rk-square" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                  <div class="item-meta">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('post_subtitle'); ?></p>
                  </div>
                </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

              <?php $posts = get_sub_field('item_two'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                  <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-8 rk-size-12 rk-tosize-6 rk-square" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                    <div class="item-meta">
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_field('post_subtitle'); ?></p>
                    </div>
                  </a>
                </div>

              <?php endforeach; wp_reset_postdata(); endif; ?>

              <?php $posts = get_sub_field('item_three'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-9 rk-size-8 rk-tosize-3 rk-square" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                  <div class="item-meta">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('post_subtitle'); ?></p>
                  </div>
                </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

            <!-- Left One Right Two -->
            <?php } else if ( $content_type == 'Left One Right Two') { ?>

              <?php $posts = get_sub_field('item_one'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-10 rk-size-6 rk-tosize-3 rk-portrait rk-tosquare" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                  <div class="item-meta  rk-tosmallfont">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('post_subtitle'); ?></p>
                  </div>
                </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

              <?php $posts = get_sub_field('item_two'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                <div class="rk-items-cont rk-size-6 rk-tosize-6">
                  <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-11 rk-size-12 rk-tosize-6 rk-landscape rk-tosquare" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                    <div class="item-meta">
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_field('post_subtitle'); ?></p>
                    </div>
                  </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

              <?php $posts = get_sub_field('item_three'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                  <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-12 rk-size-12 rk-tosize-6 rk-landscape rk-tosquare" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                    <div class="item-meta">
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_field('post_subtitle'); ?></p>
                    </div>
                  </a>
                </div>

              <?php endforeach; wp_reset_postdata(); endif; ?>

            <!-- Left One Big Tight Two Small -->
            <?php } else if ( $content_type == 'Left One Big Tight Two Small') { ?>

              <?php $posts = get_sub_field('item_one'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-13 rk-size-8 rk-tosize-3 rk-square " style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                  <div class="item-meta">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('post_subtitle'); ?></p>
                  </div>
                </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

              <?php $posts = get_sub_field('item_two'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                <div class="rk-items-cont rk-size-4 rk-tosize-6">
                  <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-14 rk-size-12 rk-tosize-6 rk-square" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                    <div class="item-meta">
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_field('post_subtitle'); ?></p>
                    </div>
                  </a>

              <?php endforeach; wp_reset_postdata(); endif; ?>

              <?php $posts = get_sub_field('item_three'); if( $posts ): foreach( $posts as $post): setup_postdata($post); ?>

                  <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-15 rk-size-12 rk-tosize-6 rk-square" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                    <div class="item-meta">
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_field('post_subtitle'); ?></p>
                    </div>
                  </a>
                </div>

              <?php endforeach; wp_reset_postdata(); endif; ?>

            <?php } ?>

        <?php endwhile; endif; ?>

      </div>
    </section>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>
