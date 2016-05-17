<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/img/urku-ico.svg">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class('top-fixed'); ?>>

  <header class="ae-container-fluid ae-container-fluid--full rk-header ">
    <input type="checkbox" id="mobile-menu" class="rk-mobile-menu">
    <label for="mobile-menu">
      <svg>
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#bar"></use>
      </svg>
      <svg>
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#bar"></use>
      </svg>
      <svg>
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#bar"></use>
      </svg>
    </label>
    <div class="ae-container-fluid rk-topbar">
      <h1 class="rk-logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
          <a href="<?php echo home_url(); ?>">
            <?php  } ?>
            urku portfolio<sup>tm</sup>
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
          </a>
        <?php } ?>
      </h1>
      <nav class="rk-navigation">
        <?php wpeHeadNav(); ?>
        <form class="rk-search" method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
          <input type="text" placeholder="Search" id="urku-search" class="rk-search-field">
          <label for="urku-search">
            <svg>
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/symbols.svg#icon-search"></use>
            </svg>
          </label>
        </form>
      </nav>
    </div>
  </header>
