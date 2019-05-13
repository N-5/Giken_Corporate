<?php
/*
Template Name: chinese-csr
*/
?>
<?php get_header(); ?>

<main id="csr">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">CSR<span>社会貢献活動</span></h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/csr/csr-lower.jpg">
      </div>
    </div>
  </section>

  <section class="csr-society">
    <div class="l-container">
      <h2 class="m-section-title" data-inview>FOR SOCIETY<span>社会貢献活動について</span></h2>
    </div>
    <div class="l-container__small">
      <div class="csr-list">
        <div class="csr-list__item" data-inview>
          <h3 class="csr-heading">エコキャップ活動</h3>
          <div class="csr-list__inner">
            <div class="csr-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/csr/csr-society_1.jpg" alt="エコキャップ活動"></div>
            <div class="csr-list__detail">
              <p class="u-m">
                当社ではエコキャップ回収運動を行っています。 ペットボトルのキャップで世界の子供にワクチンを届けることができます。普段捨ててしまうキャップでも、約2キロ程度（約860個）でポリオワクチン１人分相当の20円になり、子どもの命が救えます。
              </p>
              <div class="csr-list__link"><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/170512_ecocap.pdf" target="_blank"><i>PDF</i><span>2017/01/ 活動報告</span></a></div>
            </div>
          </div>
        </div>
        
        <div class="csr-list__item" data-inview>
          <h3 class="csr-heading">使用済み切手回収活動</h3>
          <div class="csr-list__inner">
            <div class="csr-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/csr/csr-society_2.jpg" alt="使用済み切手回収活動"></div>
            <div class="csr-list__detail">
              <p class="u-m">
                当社では使用済み切手の回収運動を行っています。 回収した使用済み切手は、公益財団法人日本郵趣協会が実施する「手紙を書こう！プロジェクト」で利用され、郵便切手文化の発展向上を推進するための社会貢献・地域支援事業となっています。
              </p>
              <div class="csr-list__link"><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/1701_kitte.pdf" target="_blank"><i>PDF</i><span>2017/01/ 活動報告</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="csr-environment">
    <div class="l-container">
      <h2 class="m-section-title" data-inview>FOR ENVIRONMENT<span>環境への取り組み</span></h2>
    </div>
    <div class="l-container__small">
      <div class="csr-list">
        <div class="csr-list__item" data-inview>
          <h3 class="csr-heading">太陽光発電</h3>
          <div class="csr-list__inner">
            <div class="csr-list__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/csr/csr-environment_1.jpg" alt="太陽光発電"></div>
            <div class="csr-list__detail">
              <p class="u-m">
                技研株式会社は、太陽光発電システムを設置しております。 環境に優しいクリーンエネルギーを発電し、CO2排出量を抑えることで、省エネルギー活動の取り組みを行っております。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
