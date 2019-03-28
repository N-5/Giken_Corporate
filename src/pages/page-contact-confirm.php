<?php
/*
Template Name: contactconfirm
*/
?>
<?php get_header(); ?>
<main id="contactconfirm">
  <section class="contact-title">
    <div class="contact-title__inner">
      <h1 class="heading">CONTACT</h1>
    </div>
  </section>
  <section class="contact-form">
    <div class="contact-form__inner l-container__small">
      <div class="contact-form__input">
        <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
