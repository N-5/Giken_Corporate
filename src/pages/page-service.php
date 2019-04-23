<?php
/*
Template Name: service
*/
?>
<?php get_header(); ?>

<main id="service">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">SERVICE<span>事業内容</span></h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-lower.jpg">
      </div>
    </div>
  </section>

  <section class="service-information">
    <div class="infromation-list">
      <div class="information-list__item">
        <div class="l-container__large">
          <div class="information-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-information_1.jpg"></div>
          <div class="information-list__detail">
            <h2 class="m-section-title">AUTOMOTIVE<span>自動車産業</span></h2>
            <div class="information-list__text">
              単体装置からライン全体の自動搬送設備まで。 <br>時代が求めるスペックを実現する技術力がここに。
            </div>
            <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/service/automotive/"><span>MORE</span></a></div>
          </div>
        </div>
      </div>

      <div class="information-list__item item-revese">
        <div class="l-container__large">
          <div class="information-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-information_2.jpg"></div>
          <div class="information-list__detail">
            <h2 class="m-section-title">ALUMINUM<span>アルミ産業</span></h2>
            <div class="information-list__text">
              市場のニーズに即応。<br>ローコスト、短納期を可能にする確かな開発力。
            </div>
            <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/service/aluminum/"><span>MORE</span></a></div>
          </div>
        </div>
      </div>

      <div class="information-list__item">
        <div class="l-container__large">
          <div class="information-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-information_3.jpg"></div>
          <div class="information-list__detail">
            <h2 class="m-section-title">INDUSTRIAL<br>MACHINES<span>産業機械事業</span></h2>
            <div class="information-list__text">
              使いやすさを最優先に設計/開発。<br>そのクオリティーはお客様から高い評価を獲得。
            </div>
            <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/service/industrial/"><span>MORE</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-group">
    <div class="l-container">
      <h2 class="m-section-title">GROUP<span>グループ企業</span></h2>
      <div class="service-group-list">
        <div class="service-group-list__item">
          <div class="service-group-list__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-group-logo_1.jpg" alt="GKM"></div>
          <div class="service-group-list__detail">
            <div class="service-group-list__text">
              株式会社GKMは、技研株式会社と株式会社BBS金明の合弁会社です。２社の強みを活かし、工作機械設計･製造･販売を行っています。
            </div>
            <div class="service-group-list__link">
              <div class="m-link m-link__blueborder"><a href="http://www.gkm.co.jp/" target="_blank"><span>MORE</span></a></div>
            </div>
          </div>
        </div>
        <div class="service-group-list__item">
          <div class="service-group-list__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-group-logo_2.jpg" alt="G-TRADING"></div>
          <div class="service-group-list__detail">
            <div class="service-group-list__text">
              株式会社GKMは、技研株式会社と株式会社BBS金明の合弁会社です。２社の強みを活かし、工作機械設計･製造･販売を行っています。
            </div>
            <div class="service-group-list__link">
              <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/grop/" target="_blank"><span>MORE</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="service-client">
    <div class="l-container">
      <h2 class="m-section-title">CLIENTS<span>納入実績</span></h2>
      <div class="service-client-list">
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_1.jpg" alt="TOYOTA"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_2.jpg" alt="HITACHI"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_3.jpg" alt="KOMATSU"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_4.jpg" alt="TORAY"></div>
        <div class="service-client__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-client_5.jpg" alt="LIXIL"></div>
      </div>
      <div class="service-client_link">
        <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/partner/"><span>MORE</span></a></div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
