<?php
/*
Template Name: chinese-top
*/
?>
<?php get_header(); ?>

<main id="top">
  <section class="top-hero">
    <div class="l-container">
      <p class="top-hero__heading" data-animation-hero-fade="1">技術で世界の流れをつくる。</p>
      <div class="top-hero__catchcopy">
        <span class="top-hero__reveal" data-animation-reveal>MAKE</span><br>
        <span class="top-hero__reveal" data-animation-reveal>THE</span><br class="u-sm_max">
        <span class="top-hero__reveal" data-animation-reveal>WORLD</span><br class="u-sm_max">
        <span class="top-hero__reveal" data-animation-reveal>FROW</span><br>
        <span class="top-hero__reveal" data-animation-reveal>WITH</span><br>
        <span class="top-hero__reveal" data-animation-reveal>TECHNOLOGY</span>
      </div>
      <div class="top-hero__inner">
        <p class="top-hero__lead" data-animation-hero-fade="2">
          自動化技術で、世界中のものづくりに流れをつくる。<br>
          それは世界を動かして、<br>
          きっと世の中にも新しい流れをつくる。<br>
          私たちの仕事は、「流れ」そのものを生み出すことだ。<br>
          技研は、世界を動かす流れの源になる。
        </p>
        <div class="top-hero__btn" data-animation-hero-fade="3">
          <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/cn/vision/"><span>MORE OUR VISION</span></a></div>
          <div class="m-link m-link__list"><a href="http://www.youtube.com/watch?v=T4nOX00HhqA" class="popup-youtube"><span>CONCEPT MOVIE</span></a></div>
        </div>
      </div>
      <div class="top-hero__monument" data-animation-hero-move><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-hero_world.png" alt="world"></div>
    </div>
    <div class="top-hero__bg">
      <picture>
        <source media="(max-width:1000px)" srcset="<?php echo get_template_directory_uri(); ?>/img/top/top-hero_bg_sp.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-hero_bg.jpg" alt="">
      </picture>
    </div>
  </section>

  <section class="top-service">
    <div class="l-container">
      <h2 class="m-top-section__title" data-inview><span class="en">SERVICE</span><span class="jp">事業内容</span></h2>
      <figure class="top-service__img" data-inview><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-service-figure_cn.png" alt="自動車産業、アルミ産業、産業機械事業"></figure>
      <div class="top-service__inner" data-inview>
        <p class="m-top-section__copy">自動化技術を未来とクロスする、<br>それが私たちの仕事。</p>
        <p class="u-m">ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お応えしています。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かします。ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お応えしています。装置開発。</p>
        <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>/cn/service/"><span>MORE</span></a></div>
      </div>
    </div>
  </section>

  <section class="top-company">
    <div class="l-container__large">
      <div class="top-company__award" data-inview>
        <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-company-award.png" alt="PATENTS and AWARDS"></div>
        <div class="text">取得多项日本、美国、<br>韩国的专利。<br>获得多项表彰、感谢信。</div>
      </div>
      <div class="top-company__image" data-inview>
        <picture>
          <source media="(max-width:769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-company-image_sp.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-company-image_pc.jpg" alt="技研外観写真">
        </picture>
      </div>
      <div class="top-company__inner" data-inview>
        <h2 class="m-top-section__title"><span class="en">COMPANY</span><span class="jp">公司概要</span></h2>
        <p class="m-top-section__copy">ずっと安心して使い続けられる、<br>良質なものを世界へ。</p>
        <p class="u-m">ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お客さまの多お応えしています。</p>
        <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/cn/company/"><span>MORE</span></a></div>
      </div>
    </div>
  </section>

  <section class="top-information cn">
    <div class="top-information__outer">
      <div class="top-information__recruit">
        <div class="top-information__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-recruit__image.jpg" alt="採用情報"></div>
        <div class="top-information__inner">
          <h2 class="m-top-section__title"><span class="en">RECRUIT</span><span class="jp">採用情報</span></h2>
          <h3 class="m-top-section__copy">世界と交わり、<br>次世代を担う。</h3>
          <p class="u-m">ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お客さまの多お応えしています。</p>
          <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>/recruit/"><span>MORE</span></a></div>
        </div>
      </div>
      <div class="top-information__csr">
        <div class="top-information__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-csr__image.jpg" alt="社会への取り組み"></div>
        <div class="top-information__inner">
          <h2 class="m-top-section__title"><span class="en">CSR</span><span class="jp">社会への取り組み</span></h2>
          <h3 class="m-top-section__copy">社会と重なり、<br>大切な物を築く。</h3>
          <p class="u-m">ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お客さまの多お応えしています。</p>
          <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>/csr/"><span>MORE</span></a></div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>