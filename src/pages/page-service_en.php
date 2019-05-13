<?php
/*
Template Name: english-service
*/
?>
<?php get_header(); ?>

<main id="service">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">SERVICE</h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-lower.jpg">
      </div>
    </div>
  </section>

  <section class="service-information">
    <div class="infromation-list">
      <div class="information-list__item" data-inview>
        <div class="l-container__large">
          <div class="information-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-information_1.jpg"></div>
          <div class="information-list__detail">
            <h2 class="m-section-title">AUTOMOTIVE</h2>
            <p class="u-m">
              From stand-alone equipment to entire automated production line systems – our expertise meets the technological specifications demanded in the world today.
            </p>
            <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/en/service/automotive/"><span>MORE</span></a></div>
          </div>
        </div>
      </div>

      <div class="information-list__item item-revese" data-inview>
        <div class="l-container__large">
          <div class="information-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-information_2.jpg"></div>
          <div class="information-list__detail">
            <h2 class="m-section-title">ALUMINUM</h2>
            <p class="u-m">
              We adapt to market needs. <br>Our production capability enables us to provide cost-effective solutions and quick delivery.
            </p>
            <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/en/service/aluminum/"><span>MORE</span></a></div>
          </div>
        </div>
      </div>

      <div class="information-list__item" data-inview>
        <div class="l-container__large">
          <div class="information-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-information_3.jpg"></div>
          <div class="information-list__detail">
            <h2 class="m-section-title">INDUSTRIAL<br>MACHINES</h2>
            <p class="u-m">
              We put maximum priority on user-friendliness during design and development.
              The quality of our products has been highly evaluated.
            </p>
            <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/en/service/industrial/"><span>MORE</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-group">
    <div class="l-container">
      <h2 class="m-section-title" data-inview>GROUP</h2>
      <div class="service-group-list">
        <div class="service-group-list__item" data-inview>
          <div class="service-group-list__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-group-logo_1.jpg" alt="GKM"></div>
          <div class="service-group-list__detail">
            <p class="u-m">
              GKM CO., LTD is a joint venture between Giken CO., LTD and BBS Kinmei CO., LTD. <br>
              Utilizing the strengths of the two companies, we design, manufacture and sell machine tools.
            </p>
            <div class="service-group-list__link">
              <div class="m-link m-link__blueborder"><a href="http://www.gkm.co.jp/en/" target="_blank"><span>MORE</span></a></div>
            </div>
          </div>
        </div>
        <div class="service-group-list__item" data-inview>
          <div class="service-group-list__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-group-logo_2.jpg" alt="G-TRADING"></div>
          <div class="service-group-list__detail">
            <p class="u-m">
              1002 Crystal bldg Ⅱ,1-175-1 Tsukuba, Naka-ku, Kumagaya-city, Saitama 360-0037 Tel: +81-48-578-8790 Fax: +81-48-578-8791
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="service-client">
    <div class="l-container">
      <h2 class="m-section-title" data-inview>CLIENTS</h2>
      <div class="service-client-list" data-inview>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_1.jpg" alt="TOYOTA"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_2.jpg" alt="HITACHI"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_3.jpg" alt="KOMATSU"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_4.jpg" alt="TORAY"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_5.jpg" alt="LIXIL"></div>
      </div>
      <div class="service-client_link" data-inview>
        <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/en/partner/"><span>MORE</span></a></div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
