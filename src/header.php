<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <?php get_template_part('lib/favicons'); ?>
    <?php wp_head() ?>
  </head>
  <body <?php body_class( $class ); ?> <?php $locale = get_post_meta( $post_id, '_locale', true ); ?>>
    <div class="l-wrapper">
      <header id="header" class="header <?php if ( !is_home() && !is_front_page() ) : ?>header-bg<?php endif; ?>">
        <div class="header-inner">
          <?php if ( is_home() || is_front_page() ) : ?>
          <h1 class="header-logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/logo_caption.svg" alt="<?php bloginfo('name'); ?>"></a>
          </h1>
          <?php else : ?>
          <div class="header-logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/logo_caption.svg" alt="<?php bloginfo('name'); ?>"></a>
          </div>
          <?php endif; ?>
          <div class="header-language">
            <div class="header-language-list">
              <div class="header-language-list__item <?php $locale = get_locale(); if($locale == 'ja') : echo 'is-active'; endif; ?>">
                <a href="<?php echo home_url(); ?>">JP</a>
              </div>
              <div class="header-language-list__between">／</div>
              <div class="header-language-list__item <?php $locale = get_locale(); if($locale == 'en_US') : echo 'is-active'; endif; ?>">
                <a href="<?php echo home_url(); ?>/en/">EN</a>
              </div>
              <div class="header-language-list__between">／</div>
              <div class="header-language-list__item <?php $locale = get_locale(); if($locale == 'zh_CN') : echo 'is-active'; endif; ?>">
                <a href="<?php echo home_url(); ?>/ch/">CH</a>
              </div>
            </div>
          </div>
          <nav class="header-gnav">
            <ul class="header-gnav-list">
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/service/"><span>SERVICE</span></a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/vision/"><span>VISION</span></a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/company/"><span>COMPANY</span></a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/recruit/"><span>RECRUIT</span></a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/csr/"><span>CSR</span></a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/news/"><span>NEWS</span></a></li>
              <li class="header-gnav-list__item"><a href="<?php echo home_url(); ?>/contact/"><span>CONTACT</span></a></li>
            </ul>
          </nav>
          <div class="header-humberger" data-menu-hamburger><span></span><span></span><span></span></div>
        </div>
      </header>