<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('rk-blog__item'); ?>>
    <div class="post-img post-9 rk-landscape-alt rk-toportrait" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
      <div class="item-meta">
        <p>
          <a href="<?php the_permalink(); ?>" class="arrow-button">Read More<span class="arrow-cont"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#arrow"></use></svg></span></a>
        </p>
      </div>
    </div>

    <div class="blog-info">
      <h2 class="blog-info__title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h5 class="blog-info__author">By <a href="blog-post.html" class="ae-u-bolder"><?php the_author_posts_link(); ?></a></h5>
      <p class="blog-info__excerpt"><?php wpeExcerpt('wpeExcerpt40'); ?></p>
    </div>
    <div class="blog-meta">
      <span class="e-u-bolder blog-meta__comments blog-meta__container "><?php comments_popup_link( __( 'Leave your thoughts', 'wpeasy' ), __( '1 Comment', 'wpeasy' ), __( '% Comments', 'wpeasy' )); ?></span>
      <span class="ae-kappa ae-u-bold blog-meta__date"><?php the_time('F, j Y'); ?></span>
      <a href="<?php the_permalink(); ?>" class="arrow-button blog-meta__read-more">Read More<span class="arrow-cont"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#arrow"></use></svg></span></a>
    </div>
  </div>
<?php endwhile; endif; ?>
