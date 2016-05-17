<?php get_header(); ?>

  <section class="ae-container-fluid rk-main">
    <input type="radio" name="layout-ctrl" checked id="layout-base" class="layout-ctrl-input">
    <div class="ae-container-fluid rk-layout-ctrl-cont">
      <label for="layout-base" class="rk-layout-ctrl">
        <svg>
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#icon-view-full"></use>
        </svg>
      </label>
    </div>
    <input type="radio" name="layout-ctrl" id="layout-grid" class="layout-ctrl-input">
    <div class="ae-container-fluid rk-layout-ctrl-cont">
      <label for="layout-grid" class="rk-layout-ctrl">
        <svg>
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#icon-view-alt"></use>
        </svg>
      </label>
    </div>
    <div class="rk-layout-ctrl-mobile  layout-blog">
      <svg viewBox="0 0 9 9" class="layout-mob-1">
        <rect width="100%" height="100%" fill="currentColor"></rect>
      </svg>
      <svg viewBox="0 0 9 9" class="layout-mob-2">
        <rect width="100%" height="100%" fill="currentColor"></rect>
      </svg>
      <svg viewBox="0 0 9 9" class="layout-mob-3">
        <rect width="100%" height="100%" fill="currentColor"></rect>
      </svg>
      <svg viewBox="0 0 9 9" class="layout-mob-4">
        <rect width="100%" height="100%" fill="currentColor"></rect>
      </svg>
    </div>

    <section class="ae-container-fluid ae-container-fluid--inner rk-blog">
      <h1 class="ctitle"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
      <div class="rk-blog__items">
        <?php get_template_part('loop'); ?>
      </div>
    </section>


  </section>

<?php get_footer(); ?>
