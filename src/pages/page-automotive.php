<?php
/*
Template Name: automotive
*/
?>
<?php get_header(); ?>
<main id="automotive">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">AUTOMOTIVE<span>自動車産業</span></h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/automotive/automotive-lower.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="service-lead">
    <div class="l-container">
      <h2 class="service-lead__heading" data-inview>
        単体装置から<br class="u-sm">ライン全体の<br class="u-sm_max">自動搬送設備まで。<br>
        時代が求めるスペックを<br class="u-sm_max">実現する<br class="u-sm">技術力がここに。
      </h2>
      <p class="service-lead__text u-m" data-inview>
        単体装置からライン全体の自動搬送設備、自動組付設備まで柔軟に対応。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お客さまの多彩なニーズにお応えしています。また当社からの提案により、装置の高精度化・小型化はもちろん、省力化、製品クオリティの統一化をはかることも可能。技研はお客さまのニーズを的確に捉え、最適なカタチで具現化します。
      </p>
    </div>
  </section>

  <section class="service-case">
    <div class="l-container">
      <div class="service-case-list">
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>GANTRY LOADERS</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/automotive/survice-case_1.jpg" alt="">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">ガントリーローダー</h3>
            <p class="u-m">
              走行部は、ケーブルベヤレス仕様を採用し、メンテナンスの簡略化を実現。柔軟なローダービームの延長やキャリヤの増設をはじめ、ＮＣ装置による制御、モーター式ハンドによるエアーレス化およびハンドチェンジャーにも対応できます。アームシフト（Ｙ軸）機能による据付け期間の大幅な短縮や、温度補正機能による温度変化による走行停止位置のズレの吸収を可能にしました。
            </p>
            <ul class="service-case__funtion">
              <li>ケーブルベヤレスタイプ［特許］</li>
              <li>スイングハンド式シングルアーム型</li>
              <li>２ハンド式タンデムアーム型</li>
              <li>重量搬送用大型ローダー</li>
              <li>伸縮アーム式ローダー</li>
            </ul>
            <dl class="service-case__spec">
              <dt>最大動作速度（走行）</dt><dd>276.0m/min</dd>
              <dt>最大動作速度（昇降）</dt><dd>187.3ｍ/min</dd>
              <dt>最大搬送重量</dt><dd>300kg</dd>
            </dl>
            <div class="service-case__link">
              <div class="m-link m-link__download"><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/gantryloader_e.pdf" target="_blank"><span>CATALOG<i><?php get_template_part('lib/icon-donload'); ?></i></span></a></div>
            </div>
          </div>
        </div>
        
        <div class="service-case-list__item item-reverse" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-left"><span>CONVEYOR</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/automotive/survice-case_2.jpg" alt="">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">搬送装置（コンベヤ等）</h3>
            <p class="u-m">各種搬送物に対する工程間自動搬送を実現した装置です。</p>
            <ul class="service-case__funtion">
              <li>パレットアキューム式コンベヤ［特許］</li>
              <li>ローラコンベヤ</li>
              <li>ピッチ送りチェーンコンベヤ（チェーンピッチ可変式あり）</li>
              <li>移載式ワークストッカー</li>
              <li>ロータリー式ストッカー</li>
              <li>水平旋回装置</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>ASSEMBLING DEVICE</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/automotive/survice-case_3.jpg" alt="">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">組付け装置</h3>
            <p class="u-m">
              エンジン加工ライン内の各種組付け装置です。
            </p>
            <ul class="service-case__funtion">
              <li>コンロッドキャップ組付け装置</li>
              <li>ブロックベアリングキャップ組付け装置</li>
              <li>シーリングボルト組付け装置</li>
              <li>各部品圧入装置</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item item-reverse" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-left"><span>MEASUREMENT</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/automotive/survice-case_4.jpg" alt="MEASUREMENT">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">計測・刻印装置</h3>
            <p class="u-m">
              各種測定およびマーキングと分類を行う装置です。
            </p>
            <ul class="service-case__funtion">
              <li>ジャーナル外径計測装置</li>
              <li>シャフト全長計測装置</li>
              <li>ハウジング内径計測装置</li>
              <li>リークテスト装置</li>
              <li>２Ｄレーザー刻印装置</li>
              <li>超音波ドット刻印装置</li>
              <li>各種刻印読取り装置</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>ROBOT HANDLING SYSTEM</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/automotive/survice-case_5.jpg" alt="">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">ロボットハンドリングシステム</h3>
            <p class="u-m">
              各種ロボットメーカー(ビジョンセンサー含)に対応します。
            </p>
            <ul class="service-case__funtion">
              <li>素材投入装置</li>
              <li>素材バラ取り供給装置</li>
              <li>ロボット式ストッカー</li>
              <li>各種パーツ供給システム</li>
              <li>完成品ストッカー</li>
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
