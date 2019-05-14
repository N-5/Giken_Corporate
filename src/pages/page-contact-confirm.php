<?php
/*
Template Name: contactconfirm
*/
?>
<?php get_header(); ?>

<main id="contact">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">CONTACT<span>お問い合わせ</span></h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact/contact-lower.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="contact-form contact-confirm">
    <div class="l-container__small">
      <div class="contact-confirm__text">
        <p class="u-m">
          以下の内容でよろしければ、「送信」ボタンをクリックしてください。
        </p>
      </div>
      <?php while(have_posts()): the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
