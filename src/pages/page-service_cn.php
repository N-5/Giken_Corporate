<?php
/*
Template Name: chinese-service
*/
?>
<?php get_header(); ?>

<main id="service">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">SERVICE<span>业务内容</span></h1>
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
            <h2 class="m-section-title">AUTOMOTIVE<span>汽车事业</span></h2>
            <p class="u-m">
              从单体装置到整条生产线的自动搬运设备。<br>
              这里拥有能够满足时代要求规格的技术实力。
            </p>
            <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/cn/service/automotive/"><span>MORE</span></a></div>
          </div>
        </div>
      </div>

      <div class="information-list__item item-revese" data-inview>
        <div class="l-container__large">
          <div class="information-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-information_2.jpg"></div>
          <div class="information-list__detail">
            <h2 class="m-section-title">ALUMINUM<span>铝材事业</span></h2>
            <p class="u-m">
              随时满足市场需求。<br>
              拥有可实现低成本、短交货期的较强的开发能力。
            </p>
            <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/cn/service/aluminum/"><span>MORE</span></a></div>
          </div>
        </div>
      </div>

      <div class="information-list__item" data-inview>
        <div class="l-container__large">
          <div class="information-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-information_3.jpg"></div>
          <div class="information-list__detail">
            <h2 class="m-section-title">INDUSTRIAL<br>MACHINES<span>产业机械事业</span></h2>
            <p class="u-m">
              在设计开发中最优先考虑使用的方便性。<br>
              其质量获得客户高度好评。
            </p>
            <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/cn/service/industrial/"><span>MORE</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-group">
    <div class="l-container">
      <h2 class="m-section-title" data-inview>GROUP<span>集团公司</span></h2>
      <div class="service-group-list">
        <div class="service-group-list__item" data-inview>
          <div class="service-group-list__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-group-logo_1.jpg" alt="GKM"></div>
          <div class="service-group-list__detail">
            <p class="u-m">
              株式会社GKMは、技研株式会社と株式会社BBS金明の合弁会社です。２社の強みを活かし、工作機械設計･製造･販売を行っています。
            </p>
            <div class="service-group-list__link">
              <div class="m-link m-link__blueborder"><a href="http://www.gkm.co.jp/" target="_blank"><span>MORE</span></a></div>
            </div>
          </div>
        </div>
        <div class="service-group-list__item" data-inview>
          <div class="service-group-list__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-group-logo_2.jpg" alt="G-TRADING"></div>
          <div class="service-group-list__detail">
            <p class="u-m">
              株式会社GKMは、技研株式会社と株式会社BBS金明の合弁会社です。２社の強みを活かし、工作機械設計･製造･販売を行っています。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="service-client">
    <div class="l-container">
      <h2 class="m-section-title" data-inview>CLIENTS<span>销售业绩</span></h2>
      <div class="service-client-list" data-inview>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_1.jpg" alt="TOYOTA"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_2.jpg" alt="HITACHI"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_3.jpg" alt="KOMATSU"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_4.jpg" alt="TORAY"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_5.jpg" alt="LIXIL"></div>
      </div>
      <div class="service-client_link" data-inview>
        <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/cn/partner/"><span>MORE</span></a></div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
