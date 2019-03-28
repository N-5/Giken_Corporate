<?php get_header(); ?>

<main id="index">
  <section class="index-hero">
    <div class="l-container">
      <h1 class="index-hero__heading">技術で世界の流れをつくる。</h1>
      <div class="index-hero__catchcopy">MAKE<br>THE <br class="u-sm_max">WORLD <br class="u-sm_max">FROW<br>WITH<br>TECHNOLOGY</div>
      <div class="index-hero__inner">
        <p class="index-hero__lead">
          自動化技術で、世界中のものづくりに流れをつくる。<br>
          それは世界を動かして、<br>
          きっと世の中にも新しい流れをつくる。<br>
          私たちの仕事は、「流れ」そのものを生み出すことだ。<br>
          技研は、世界を動かす流れの源になる。
        </p>
        <div class="index-hero__btn">
          <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/vision/"><span>MORE OUR VISION</span></a></div>
          <div class="m-link m-link__list"><a href="<?php echo home_url(); ?>/vision/concept/"><span>CONCEPT MOVIE</span></a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="index-service">
    <div class="l-container">
      <h2 class="m-index-section__title"><span class="en">SERVICE</span><span class="jp">事業内容</span></h2>
      <figure class="index-service__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/index-service-figure.png" alt="自動車産業、アルミ産業、産業機械事業"></figure>
      <div class="index-service__inner">
        <p class="m-index-section__copy">自動化技術を未来とクロスする、<br>それが私たちの仕事。</p>
        <p class="u-m">ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お応えしています。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かします。ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お応えしています。装置開発。</p>
        <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>/service/"><span>MORE</span></a></div>
      </div>
    </div>
  </section>
  
  <section class="index-company">
    <div class="l-container__large">
      <div class="index-company__award">
        <div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/index-company-award.png" alt="PATENTS and AWARDS"></div>
        <div class="text">日/米/韓の特許を多数取得<br>表彰、感謝状を<br>多数いただいております</div>
      </div>
      <div class="index-company__image">
        <picture>
          <source media="(max-width:769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top/index-company-image_sp.jpg">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/index-company-image_pc.jpg" alt="技研外観写真">
        </picture>
      </div>
      <div class="index-company__inner">
        <h2 class="m-index-section__title"><span class="en">COMPANY</span><span class="jp">会社概要</span></h2>
        <p class="m-index-section__copy">ずっと安心して使い続けられる、<br>良質なものを世界へ。</p>
        <p class="u-m">ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お客さまの多お応えしています。</p>
        <div class="m-link m-link__blueborder"><a href="<?php echo home_url(); ?>/compnay/"><span>MORE</span></a></div>
      </div>
    </div>
  </section>
  
  <section class="index-information">
    <div class="index-information__outer">
      <div class="index-information__recruit">
        <div class="index-information__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/index-recruit__image.jpg"></div>
        <div class="index-information__inner">
          <h2 class="m-index-section__title"><span class="en">RECRUIT</span><span class="jp">採用情報</span></h2>
          <p class="m-index-section__copy">世界と交わり、<br>次世代を担う。</p>
          <p class="u-m">ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お客さまの多お応えしています。</p>
          <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>/recruit/"><span>MORE</span></a></div>
        </div>
      </div>
      <div class="index-information__csr">
        <div class="index-information__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/index-csr__image.jpg"></div>
        <div class="index-information__inner">
          <h2 class="m-index-section__title"><span class="en">CSR</span><span class="jp">社会への取り組み</span></h2>
          <p class="m-index-section__copy">社会と重なり、<br>大切な物を築く。</p>
          <p class="u-m">ダミー。装置開発やライン開発で培ってきた数多くの経験および各種のノウハウを活かし、お客さまの多お応えしています。</p>
          <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>/csr/"><span>MORE</span></a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="index-news">
    <div class="l-container">
      <h2 class="m-index-section__title"><span class="en">NEWS</span><span class="jp">新着情報</span></h2>
      <div class="index-news-list">
        <?php
        $args = array(
          'post_type' => 'news',
          'posts_per_page' => 4
        );
        $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <article class="index-news-list__item">
          <a href="<?php the_permalink() ?>">
            <div class="detail">
              <time class="time"><?php the_time('Y.m.d') ?></time>
              <div class="categogy">
                <?php $custom_post_tag = 'news-category';
                  $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
                  if(!empty($custom_post_tag_terms)){
                     if(!is_wp_error( $custom_post_tag_terms )){
                       foreach($custom_post_tag_terms as $term){
                         $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                         $tag_term_name = $term->name;
                         echo $tag_term_name;
                       }
                     }
                   }
                ?>
              </div>
            </div>
            <div class="title"><?php the_title() ?></div>
          </a>
        </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <p>ニュースが投稿されていません。</p>
        <?php endif; ?>
        <div class="m-link m-link__list"><a href="<?php echo home_url(); ?>/news/"><span>VIEW LIST</span></a></div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>