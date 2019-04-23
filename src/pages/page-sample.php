<?php
/*
Template Name: sample
*/
?>
<?php get_header(); ?>
<main id="sample">
  <section class="page-title">
    <div class="page-title__inner">
      <h2 class="page__heading">SERVICE<span>事業内容</span></h2>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/service/service-lower.jpg">
      </div>
    </div>
  </section>

  <section class="sample-block">    
    <div class="l-container">
      <h2 class="m-section-title">SAMPLE<span>サンプル</span></h2>
      <div class="m-link"><a href="<?php echo home_url(); ?>"><span>MORE</span></a></div>
      <div class="m-link m-link__border"><a href="<?php echo home_url(); ?>"><span>MORE</span></a></div>
      <div class="m-link m-link__blueborder"><a href=""><span>MORE</span></a></div>
      <div class="m-link m-link__list"><a href=""><span>VIEW LIST</span></a></div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
