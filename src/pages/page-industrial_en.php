<?php
/*
Template Name: english-industrial
*/
?>
<?php get_header(); ?>
<main id="industrial">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">INDUSTRIAL MACHINES</h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/industrial-lower.jpg">
      </div>
    </div>
  </section>

  <section class="service-lead">
    <div class="l-container">
      <h2 class="service-lead__heading" data-inview>
        使いやすさを最優先に<br class="u-sm_max">設計/開発。<br>
        そのクオリティーは<br class="u-sm_max">お客様から高い評価を獲得。
      </h2>
      <p class="service-lead__text u-m" data-inview>
        自動車事業、アルミ事業より新たに派生した新規部門。それぞれの事業に精通した「技研」ならではの、蓄積された技術、ノウハウを活かし、製品の信頼性、コストパフォーマンスはそのままに、あらゆる業務の自動化・省人化をしっかりとサポート。収益向上や生産効率のアップ、業務課題の解決を可能にするとともに、さまざまな「革新」も実現しています。
      </p>
    </div>
  </section>

  <section class="service-case">
    <div class="l-container">
      <div class="service-case-list">
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>CUT AND REMOVED</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_1.jpg" alt="CUT AND REMOVED">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">残糸切断･除去装置</h3>
            <p class="u-m">
              紙管、ボビン、顎付ボピン、樹脂チューブ等の芯菅に傷をつけずに残糸の除去をすることができます。残糸除去時に芯菅に傷をつけないため芯菅の再利用に対応しています。
            </p>
            <ul class="service-case__funtion">
              <li>紙管残糸除去装置</li>
              <li>ボビン残糸除去装置</li>
              <li>顎付ボピン残糸除去装置</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item item-reverse" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-left"><span>CONVEYOR</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_2.jpg" alt="CONVEYOR">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">搬送コンベヤ</h3>
            <p class="u-m">搬送物に合わせた各種コンベヤをオーダーメイドで製作いたします。</p>
            <ul class="service-case__funtion">
              <li>各種ローラーコンベヤ</li>
              <li>各種ベルトコンベヤ</li>
              <li>糸かけ対策コンベヤ</li>
              <li>特殊コンベヤ</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>PALLETIZER</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_3.jpg" alt="PALLETIZER">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">製品パレタイジング装置</h3>
            <p class="u-m">
              搬送コンベヤや台車からの製品を取出し、段積・パッキングに対応しています。ご要望に応じてシステムアップが行えます。
            </p>
          </div>
        </div>

        <div class="service-case-list__item item-reverse" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-left"><span>TRANSFER APPARATUS</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_4.jpg" alt="TRANSFER APPARATUS">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">移載装置</h3>
            <p class="u-m">
              搬送重量や速度、ワーク形状などを考慮し、オーダーメイドの移載システムを構築いたします。工場のレイアウトに合わせてローダーやＡＧＶ等を使用した最良の搬送を実現いたします。
            </p>
            <ul class="service-case__funtion">
              <li>リジェクト装置</li>
              <li>ロール積替え機</li>
              <li>各種AGV装置</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>CARBON FIBER</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_5.jpg" alt="CARBON FIBER">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">炭素繊維関係各種機器</h3>
            <ul class="service-case__funtion">
              <li>炭素繊維切断装置</li>
              <li>炭素繊維シート積層装置</li>
              <li>炭素繊維各種検査装置</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="c-section-back">
    <div class="c-section-back__inner">
      <a href="<?php echo home_url(); ?>/service/"><span>BACK</span></a>
    </div>
  </section>
</main>
<?php get_footer(); ?>
