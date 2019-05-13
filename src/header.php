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
      <header id="header" class="header <?php if(!is_page(array('jp', 'en', 'cn'))) : ?>header-bg<?php endif; ?>">
        <div class="header-inner">
            <?php if ( is_home() || is_front_page() ) : ?>
            <h1 class="header-logo">
            <?php else : ?>
            <div class="header-logo">
            <?php endif; ?>
            <?php if(is_page(89) || is_parent_slug() === 'en'): ?>
              <a href="<?php echo home_url(); ?>/en/">
            <?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?>
                <a href="<?php echo home_url(); ?>/cn/">
            <?php else: ?>
              <a href="<?php echo home_url(); ?>">
            <?php endif; ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/logo_caption.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            <?php if ( is_home() || is_front_page() ) : ?>
            </h1>
            <?php else : ?>
            </div>
            <?php endif; ?>

            <div class="header-language">
              <div class="header-language-list">
                <div class="header-language-list__item <?php if(is_page(89) || is_parent_slug() === 'en'): ?><?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?><?php else: ?>is-active<?php endif; ?>">
                  <a href="<?php echo home_url(); ?>">JP</a>
                </div>
                <div class="header-language-list__between">／</div>
                <div class="header-language-list__item <?php if(is_page(89) || is_parent_slug() === 'en'): ?>is-active<?php endif; ?>">
                  <a href="<?php echo home_url(); ?>/en/">EN</a>
                </div>
                <div class="header-language-list__between">／</div>
                <div class="header-language-list__item <?php if(is_page(90) || is_parent_slug() === 'cn'): ?>is-active<?php endif; ?>">
                  <a href="<?php echo home_url(); ?>/cn/">CH</a>
                </div>
              </div>
            </div>
           
            <nav class="header-gnav">
              <ul class="header-gnav-list">
                <li class="header-gnav-list__item">
                  <?php if(is_page(89) || is_parent_slug() === 'en'): ?>
                  <a href="<?php echo home_url(); ?>/en/service/"><span>SERVICE</span></a>
                  <?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?>
                  <a href="<?php echo home_url(); ?>/cn/service/"><span>SERVICE</span></a>
                  <?php else: ?>
                  <a href="<?php echo home_url(); ?>/service/" class="jp"><span>事業内容</span></a>
                  <?php endif; ?>
                </li>
                <li class="header-gnav-list__item">           
                  <?php if(is_page(89) || is_parent_slug() === 'en'): ?>
                  <a href="<?php echo home_url(); ?>/en/vision/"><span>VISION</span></a>
                  <?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?>
                  <a href="<?php echo home_url(); ?>/cn/vision/"><span>VISION</span></a>
                  <?php else: ?>
                  <a href="<?php echo home_url(); ?>/vision/" class="jp"><span>ヴィジョン</span></a>
                  <?php endif; ?>
                </li>
                <li class="header-gnav-list__item">
                  <?php if(is_page(89) || is_parent_slug() === 'en'): ?>
                  <a href="<?php echo home_url(); ?>/en/company/"><span>COMPANY</span></a>
                  <?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?>
                  <a href="<?php echo home_url(); ?>/cn/company/"><span>COMPANY</span></a>
                  <?php else: ?>
                  <a href="<?php echo home_url(); ?>/company/" class="jp"><span>会社紹介</span></a>
                  <?php endif; ?>
                </li>
                <?php if(is_page(89) || is_parent_slug() === 'en'): ?>
                <?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?>
                <?php else: ?>
                <li class="header-gnav-list__item">
                  <a href="<?php echo home_url(); ?>/recruit/" class="jp"><span>採用情報</span></a>
                  <?php endif; ?>
                </li>
                <li class="header-gnav-list__item">
                  <?php if(is_page(89) || is_parent_slug() === 'en'): ?>
                  <a href="<?php echo home_url(); ?>/en/csr/"><span>CSR</span></a>
                  <?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?>
                  <a href="<?php echo home_url(); ?>/cn/csr/"><span>CSR</span></a>
                  <?php else: ?>
                  <a href="<?php echo home_url(); ?>/csr/" class="jp"><span>社会貢献活動</span></a>
                  <?php endif; ?>
                </li>
                <li class="header-gnav-list__item">
                  <?php if(is_page(89) || is_parent_slug() === 'en'): ?>
                  <a href="<?php echo home_url(); ?>/en/vision/movie/"><span>MOVIE</span></a>
                  <?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?>
                  <a href="<?php echo home_url(); ?>/cn/vision/movie/"><span>MOVIE</span></a>
                  <?php else: ?>
                  <a href="<?php echo home_url(); ?>/vision/movie/" class="jp"><span>ムービー</span></a>
                  <?php endif; ?>
                </li>
                <?php if(is_page(89) || is_parent_slug() === 'en'): ?>
                <?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?>
                <?php else: ?>
                <li class="header-gnav-list__item">
                  <a href="<?php echo home_url(); ?>/news/" class="jp"><span>ニュース</span></a>
                  <?php endif; ?>
                </li>
                <li class="header-gnav-list__item">
                  <?php if(is_page(89) || is_parent_slug() === 'en'): ?>
                  <a href="<?php echo home_url(); ?>/en/contact/"><span>CONTACT</span></a>
                  <?php elseif(is_page(90) || is_parent_slug() === 'cn'): ?>
                  <a href="<?php echo home_url(); ?>/cn/contact/"><span>CONTACT</span></a>
                  <?php else: ?>
                  <a href="<?php echo home_url(); ?>/contact/" class="jp"><span>お問い合わせ</span></a>
                  <?php endif; ?>
                </li>
              </ul>
            </nav>
            <div class="header-humberger" data-menu-hamburger><span></span><span></span><span></span></div>
          </div>
        </header>