<?php
/*
Template Name: vision
*/
?>
<?php get_header(); ?>

<main id="vision">
  <section class="vision-hero">
    <div class="vision-hero__inner">
      <div class="l-container">
        <h2 class="vision-hero__title" data-inview>OUR VISION:</h2>
        <h1 class="vision-hero__heading" data-inview>
          <span class="en">FIRST CALL<br>COMPANY</span>
          <span class="jp">自動搬送機分野<br>世界一のブランドメーカー</span>
          <div class="vision-hero-scroll"><div class="vision-hero-scroll__border"><span></span></div></div>
        </h1>
        <div class="vision-hero-goal" data-inview>
          <h2 class="vision-hero-goal__fog">FOR <br class="u-md">OUR <br class="u-md">GOAL</h2>
          <div class="vision-hero-goal__detail">
            <h3 class="vision-hero-goal__heading">
              <span class="en">SLOGAN:</span>
              <span class="jp">技術で、<br class="u-md_max">世界の流れをつくる。</span>
            </h3>
            <p class="vision-hero-goal__text">
              ダミー自動化技術で、世界中のものづくりに流れをつくる。それは世界を動かして、それは世界を動かして、きっと、世の中にも新しい流れをつくる。私たちの仕事は、「流れ」そのものを生み出すことだ。技研は、世界を動かす流れの源となる。ダミー自動化技術で、
            </p>
            <div class="vision-hero-goal__link">
              <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/vision/movie/"><span>CONCEPT MOVIE</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="vision-message">
    <div class="l-container">
      <h2 class="m-section-title" data-inview>PRESIDENT MESSAGE<span>代表挨拶</span></h2>
    </div>
    <div class="l-container__small" data-inview>
      <div class="vision-message__inner">
        <div class="vision-message__president"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vision/vision-president.jpg" alt="向 一雄"></div>
        <div class="vision-message__comment">
          <p class="vision-message__text u-m">
            技研株式会社は、創業当時から、お客様がずっと安心して使い続けられる良質なものづくりを目指し、今日まで歩んでまいりました。現在の技研に成長することができたのも、お客様の立場で考え、生み出された製品をお客様に満足いただけた証と自負しております。
          </p>
          <p class="vision-message__text u-m">
            日々刻々と変動する社会の中で、グローバル事情を研ぎ澄まされた感性で読み取り、フレキシブルに対応が必須でした。このような時代の変化に応えられたのは、これまで培ってきた豊富で高いクオリティを備えた開発経験によるものです。
          </p>
          <p class="vision-message__text u-m">
            技研の経営理念は「一歩先んじた技術で社会に貢献する」です。これからも、主力の自動車部品の自動搬送装置とアルミ型材押出ライン及び各種産業機械の設計・製造を極めることはもちろん、お客様がいま求められている技術、お客様の次代につながる新しい技術を取り入れ、あらゆる業種の生産ラインの自動化と省人化の実現を通じ、社会の発展に貢献できるよう、わたしたち技研は挑戦し続けます。
          </p>
          <p class="vision-message__name u-m">代表取締役  向 一雄</p>
        </div>
      </div>
    </div>
  </section>

  <section class="vision-logo">
    <div class="l-container">
      <h2 class="m-section-title" data-inview>ORIGIN OF OUR LOGO<span>ロゴの由来</span></h2>
    </div>
    <div class="l-container__small">
      <div class="vision-logo__inner" data-inview>
        <div class="vision-logo_mark"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/logo-mark.svg" alt="技研株式会社ロゴ"><span>商標 登録番号 3107527</span></div>
        <div class="vision-logo__comment">
          <p class="vision-logo__text u-m">
            このマークは、アルファベットの「D」を模っています。 これは創業当時に、「Drawing（製図）、Design（設計、デザイン）、 Development（開発）」の３つの頭文字をとり、造られました。
          </p>
          <p class="vision-logo__text u-m">
            そして現在は、社員一人ひとりが、お客さまに満足いただく製品を造るためにDevotion（献身・一意専心）をもって仕事に打ち込み、Device（工夫・方策）をもって問題を解決し、新しいものを生み出し、Delight（愉快・楽しさ）をもって、明るく仕事に取り組んでいます。
          </p>
          <p class="vision-logo__text u-m">
            さらに将来、技研株式会社は、オンリーワンの技術と強固な財務体制でDiamond「ダイヤモンド」のように輝き、環境の変化すらも自らの力に変えるDynamism「ダイナミズム」に満ち溢れる、Dream「夢」のある会社を目指します。
          </p>
        </div>
      </div>
      <div class="vision-logo__flow" data-inview>
        <picture>
          <source media="(max-width:500px)" srcset="<?php echo get_template_directory_uri(); ?>/img/vision/vision-figure_sp.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/vision/vision-figure_pc.jpg" alt="創業当時から未来">
        </picture>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>