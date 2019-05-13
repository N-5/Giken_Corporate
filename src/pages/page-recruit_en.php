<?php
/*
Template Name: english-recruit
*/
?>
<?php get_header(); ?>

<main id="recruit">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">RECRUIT<span>採用情報</span></h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/recruit-lower.jpg">
      </div>
    </div>
  </section>

  <section class="recruit-lead">
    <div class="l-container">
      <h2 class="recruit-lead__heading" data-inview>世界の流れを、<br>共につくる。</h2>
      <p class="recruit-lead__text" data-inview>
        技研株式会社は1964年に創業、自動車事業、アルミ事業、<br>
        産業機械事業を中心とする自動搬送ラインのメーカーです。<br>
        製品自体は、あまり表に出ることはありませんが、国内外のさまざまな産業を土台から支えています。<br>
        なかでも、自動車事業のガントリーローダーについては、海外輸出も行っており、<br>
        国内外を問わず多くの自動車メーカーに導入実績があります。
      </p>
    </div>
  </section>

  <?php get_template_part('lib/recruit-entry');?>

  <section class="recruit-philosophy">
    <div class="l-container" data-inview>
      <h2 class="m-section-title title-white">PHILOSOPHY<span>技研の経営理念</span></h2>
      <h3 class="recruit-philosophy__concept">一歩先んじた技術で社会に貢献し、<br>調和のとれた発展で、<br>社員の生活をより豊かにする。</h3>
      <p class="recruit-philosophy__text u-m">この経営理念に沿い、お客様、地域社会の方々、従業員等、弊社を取り巻く皆様の期待に応えるべく活動を行っています。社会への貢献や社会的責任を果たせる企業でありたいと考えております。</p>
    </div>
    <div class="recruit-philosophy__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/recruit-philosophy_img.jpg" alt=""></div>
  </section>

  <section class="recruit-person">
    <div class="l-container">
      <h2 class="m-section-title" data-inview>TYPE OF PERSON<span>求める人材像</span></h2>
      <ul class="recruit-person__items" data-inview>
        <li class="item-list">
          <h3 class="item-list__heading"><span class="item-list__number">01</span><span class="item-list__title">健康</span></h3>
          <p class="u-m">いかなる時も心身ともに社会人として自分のパフォーマンスを最大化する環境づくりができる人</p>
        </li>
        <li class="item-list">
          <h3 class="item-list__heading"><span class="item-list__number">02</span><span class="item-list__title">素直</span></h3>
          <p class="u-m">相手を問わず自分の意見がしっかりと伝えられる人</p>
        </li>
        <li class="item-list">
          <h3 class="item-list__heading"><span class="item-list__number">03</span><span class="item-list__title">調和</span></h3>
          <p class="u-m">価値観が違う人の意見に耳を傾け、相手の考えを理解することができる人</p>
        </li>
      </ul>
    </div>
  </section>

  <?php get_template_part('lib/recruit-entry');?>

  <section class="recruit-support">
    <div class="recruit-support__inner">
      <div class="recruit-support__top" data-inview>
        <figure class="recruit-support__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/recruit-support__img.jpg" alt=""></figure>
        <div class="recruit-support__top-detail">
          <h2 class="m-section-title">SUPPORT SYSTEM<span>人材育成</span></h2>
          <h3 class="heading">世界で活躍する<br class="u--max-md">プロフェッショナルへ。</h3>
          <div class="text">
            <p class="u-m">技研では、各分野に精通したプロフェッショナルな人材を育成するために、職場でのOJT<small>※</small>をベースとした教育体系を整えています。専門的な知識をじっくりと時間をかけて習得・経験するとともに、急激な世界経済の変化が続く現代でも、主体性・チームワーク・適応性が発揮できるよう、どの社員も新たなチャレンジやワールドワイドな体験を通じて、大きく成長していきます。<br>また、OJTを補完する手段として業務知識、マネジメント知識に加え、グローバル化（語学）や自己啓発を含めた各種資格の取得費用をサポート（業務に資すると会社が認めた資格の全額費用を補助）しています。</p>
            <p class="u-es">※ OJT (On the Job Training)　日常の職場の中で日常的な業務を遂行しながら、仕事に必要な知識・技能・技術・態度を計画的にレベルアップしていくこと。</p>
          </div>
        </div>
      </div>
      <div class="recruit-support__under l-container" data-inview>
        <div class="recruit-support__under-detail">
          <div class="item">
            <h3 class="heading">新人社員研修</h3>
            <div class="detail">
              <figure class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/recruit-support__thumb1.jpg" alt=""></figure>
              <div class="text">新入社員研修では、社会人としてのマナーを始め、お客様の要求にしっかりと対応できるためのコミュニケーション力の構築などのカリキュラムを用意。部門研修で技研の基礎を学ぶだけでなく、現場体験を実施しています。</div>
            </div>
          </div>
          <div class="item">
            <h3 class="heading">階層別教育</h3>
            <div class="detail">
              <figure class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/recruit-support__thumb2.jpg" alt=""></figure>
              <div class="text">中堅社員を対象に、監督者や技術者のスキル向上の研修などを行います。さらに、管理職を対象に部門管理や部下育成、また経営感覚の育成や外部環境の変化に対応できる戦略能力を育成しています。</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('lib/recruit-voice');?>

  <?php get_template_part('lib/recruit-entry');?>
</main>
<?php get_footer(); ?>
