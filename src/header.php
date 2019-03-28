<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <?php get_template_part('lib/favicons'); ?>
    <?php wp_head() ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="l-wrapper">
      <header id="header" class="header <?php if ( !is_home() && !is_front_page() ) : ?>header-bg<?php endif; ?>">
        <div class="header-inner">
          <div class="header-logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/logo.svg" alt="<?php bloginfo('name'); ?>"></a>
          </div>
          <nav class="header-gnav">
            <ul class="header-gnav-list">
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/service/">SERVICE</a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/vistion/">VISION</a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/company/">COMPANY</a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/recruit/">RECRUIT</a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/csr/">CSR</a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/news/">NEWS</a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
            </ul>
          </nav>
          <div class="header-humberger" data-menu-hamburger><span></span><span></span><span></span></div>
        </div>
      </header>