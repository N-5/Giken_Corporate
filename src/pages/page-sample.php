<?php
/*
Template Name: sample
*/
?>
<?php get_header(); ?>
<main id="sample">
  <section class="page-title">
    <div class="page-title__inner">
      <h2 class="page__heading">SAMPLE<span>サンプル</span></h2>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-lower.jpg" alt="sample">
      </div>
    </div>
  </section>
  
  <section class="page-navigation">
    <div class="l-container">
      <div class="page-navigation-list company-navigation">
        <div class="page-navigation-list__item"><a href="#a1" data-anchor><span>会社概要</span></a></div>
        <div class="page-navigation-list__item"><a href="#a2" data-anchor><span>所在地</span></a></div>
        <div class="page-navigation-list__item"><a href="#a3" data-anchor><span>沿革</span></a></div>
        <div class="page-navigation-list__item"><a href="#a4" data-anchor><span>特許</span></a></div>
        <div class="page-navigation-list__item"><a href="#a5" data-anchor><span>受賞歴</span></a></div>
      </div>
    </div>
  </section>

  <section class="sample-block">    
    <div class="l-container" data-inview>
      <h2 class="m-section-title">SAMPLE<span>サンプル</span></h2>
      <h1 class="m-recruit-section__title">
        <span class="jp">新卒採用</span>
        <span class="en">NEW GRADUATE</span>
      </h1>
      <div class="m-link" style="margin: 40px 0;"><a href="<?php echo home_url(); ?>"><span>MORE</span></a></div>
      <div class="m-link m-link__border" style="margin: 40px 0;"><a href="<?php echo home_url(); ?>"><span>MORE</span></a></div>
      <div class="m-link m-link__blueborder" style="margin: 40px 0;"><a href=""><span>MORE</span></a></div>
      <div class="m-link m-link__white" style="margin: 40px 0;"><a href=""><span>MORE</span></a></div>
      <div class="m-link m-link__list" style="margin: 40px 0;"><a href=""><span>VIEW LIST</span></a></div>
      <div class="m-link m-link__download" style="margin: 40px 0;"><a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/gantryloader_e.pdf" target="_blank"><span>CATALOG<i><?php get_template_part('lib/icon-donload'); ?></i></span></a></div>
      <a href="" class="m-link__target">Google Map</a>
      <p class="u-m" style="margin: 40px 0;">大学4年間は関東でしたが、地元・石川のモノづくり企業に就職したいと考え、これからの時代ますます必要となってくる「自動化」という分野に強い技研を選びました。そして現在、産業機械装置の電気回路制御とソフトウェアの製作、言わば機械の「脳みそと血液」をつくる仕事に従事しています。お客様から頂く様々なご要望やご意見のひとつひとつに寄り添い解決していくことで、お客様にとって使いやすく、且つ、思った通りのの動きができ、そんな時のお客様のうれしそうな表情を見ることに、やりがいを感じております。そのためにも、今後はロボットハンドを取り入れた装置の制御にチャレンジしていこうと思っています。</p>
      <p class="u-em" style="margin: 40px 0;">大学4年間は関東でしたが、地元・石川のモノづくり企業に就職したいと考え、これからの時代ますます必要となってくる「自動化」という分野に強い技研を選びました。そして現在、産業機械装置の電気回路制御とソフトウェアの製作、言わば機械の「脳みそと血液」をつくる仕事に従事しています。お客様から頂く様々なご要望やご意見のひとつひとつに寄り添い解決していくことで、お客様にとって使いやすく、且つ、思った通りのの動きができ、そんな時のお客様のうれしそうな表情を見ることに、やりがいを感じております。そのためにも、今後はロボットハンドを取り入れた装置の制御にチャレンジしていこうと思っています。</p>
      <div class="c-tablelist">
        <dl class="c-tablelist__item">
          <dt>商号</dt>
          <dd>技研株式会社 （GIKEN CO., LTD.）</dd>
        </dl>
        <dl class="c-tablelist__item">
          <dt>商号</dt>
          <dd>技研株式会社 （GIKEN CO., LTD.）</dd>
        </dl>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
