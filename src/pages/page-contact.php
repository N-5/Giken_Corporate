<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<main id="contact">
  <section class="contact-title">
    <div class="contact-title__inner">
      <h1 class="heading">CONTACT</h1>
    </div>
  </section>
  <section id="contact-form" class="contact-form">
    <div class="contact-form__inner l-container__small">
      <div class="contact-form__ttl">
        <h2 class="heading">掲載に関するお問い合わせ</h2>
      </div>
      <div class="contact-form__lead">
        <p class="form-lead">必要事項をご入力の上、「確認」ボタンをクリックして下さい。</p>
     </div>
     <div class="contact-form__input">
       <?php while(have_posts()): the_post(); ?>
       <?php the_content(); ?>
       <?php endwhile; ?>
     </div>
   </div>
  </section>
</main>
<?php get_footer(); ?>
