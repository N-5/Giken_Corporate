<?php
/*
Template Name: english-top
*/
?>
<?php get_header(); ?>

<main id="top">
  <section class="top-hero">
    <div class="l-container">
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
          Dummy::Create a flow in manufacturing around the world <br>with automation technology.
          It moves the world,<br>
          I will surely create a new flow in the world.<br>
          Our job is to create the "flow" itself.<br>
          Giken will be the source of the flow that moves the world.
        </p>
        <div class="top-hero__btn" data-animation-hero-fade="3">
          <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/en/vision/"><span>MORE OUR VISION</span></a></div>
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
      <h2 class="m-top-section__title" data-inview><span class="en">SERVICE</span></h2>
      <figure class="top-service__img" data-inview><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-service-figure_en.png" alt="Auto Mmotive,Aluminum Processing, Industrial Machinery"></figure>
      <div class="top-service__inner" data-inview>
        <p class="m-top-section__copy">自動化技術を未来とクロスする、<br>それが私たちの仕事。</p>
        <p class="u-m">Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy </p>
        <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>/en/service/"><span>MORE</span></a></div>
      </div>
    </div>
  </section>

  <section class="top-company">
    <div class="l-container__large">
      <div class="top-company__award" data-inview>
        <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-company-award.png" alt="PATENTS and AWARDS"></div>
        <div class="text">We have obtained a <br>number of patents in Japan, <br>South Korea and the United States. <br>We have received <br>many awards and letters of appreciation. </div>
      </div>
      <div class="top-company__image" data-inview>
        <picture>
          <source media="(max-width:769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-company-image_sp.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-company-image_pc.jpg" alt="company">
        </picture>
      </div>
      <div class="top-company__inner" data-inview>
        <h2 class="m-top-section__title"><span class="en">COMPANY</span></h2>
        <p class="m-top-section__copy">ずっと安心して使い続けられる、<br>良質なものを世界へ。</p>
        <p class="u-m">Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy </p>
        <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/en/company/"><span>MORE</span></a></div>
      </div>
    </div>
  </section>

  <section class="top-information en">
    <div class="top-information__outer">
      <div class="top-information__recruit">
        <div class="top-information__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-recruit__image.jpg" alt="RECRUIT"></div>
        <div class="top-information__inner">
          <h2 class="m-top-section__title"><span class="en">RECRUIT</span></h2>
          <h3 class="m-top-section__copy">世界と交わり、<br>次世代を担う。</h3>
          <p class="u-m">Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy </p>
          <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>/en/recruit/"><span>MORE</span></a></div>
        </div>
      </div>
      <div class="top-information__csr">
        <div class="top-information__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-csr__image.jpg" alt="CSR"></div>
        <div class="top-information__inner">
          <h2 class="m-top-section__title"><span class="en">CSR</span></h2>
          <h3 class="m-top-section__copy">社会と重なり、<br>大切な物を築く。</h3>
          <p class="u-m">Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy Dummy </p>
          <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>/en/csr/"><span>MORE</span></a></div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>