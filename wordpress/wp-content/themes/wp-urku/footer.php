  <footer class="ae-container-fluid rk-footer ">
    <div class="ae-grid ae-grid--collapse">
      <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-left">
        <?php wpeFootNav(); ?>
        <p class="rk-footer__text rk-footer__copy "> <span class="ae-u-bold">© </span><span class="ae-u-bolder"><?php echo date("Y"); ?> <?php bloginfo('name'); ?> </span>All Right Reserved.</p>
      </div>
      <div class="ae-grid__item item-lg-4 au-xs-ta-center"><a href="#0" class="rk-social-btn ">
          <svg>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#icon-facebook"></use>
          </svg></a><a href="#0" class="rk-social-btn ">
          <svg>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#icon-twitter"></use>
          </svg></a><a href="#0" class="rk-social-btn ">
          <svg>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#icon-pinterest"></use>
          </svg></a><a href="#0" class="rk-social-btn ">
          <svg>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#icon-tumblr"></use>
          </svg></a></div>
      <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-right">
        <p class="rk-footer__text rk-footer__contact "> <span class="ae-u-bold">Email: </span><span class="ae-u-bolder"> <a href="#0" class="rk-dark-color ">contact@urkuportfolio.com </a></span></p>
        <p class="rk-footer__text rk-footer__by">Theme by <a href="http://pixeden.com" class="ae-u-bolder">Pixeden.</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/svg4everybody.min.js"></script>
  <script>svg4everybody();</script>

</body>
</html>
