<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<main id="contact">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">CONTACT<span>お問い合わせ</span></h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact/contact-lower.jpg">
      </div>
    </div>
  </section>
  
  <section class="contact-call">
   <div class="l-container">
     <h2 class="contact-heading">お電話でのお問い合わせ</h2>
   </div>
    <div class="l-container__small">
      <p class="contact-lead">お電話でお問い合わせのお客様は、下記までお電話をお願いいたします。</p>
      <div class="contact-cta">
        <div class="contact-cta__number"><small>Tel.</small>0761-51-5700</div>
        <div class="contact-cta__time">（受付時間  平日 AM9:00〜PM5:00）</div>
      </div>
   </div>
  </section>
  
  <section class="contact-form">
    <div class="l-container">
      <p class="contact-lead">
        下記のメールフォームに必要事項をご入力いただき、「確認」ボタンをクリックしてください。
        なお、お問い合わせいただきました内容は、ご希望の項目に関する弊社からのご連絡に利用させていただきます。
      </p>
    </div>
    <div class="l-container__small">
      <h2 class="contact-heading">メールフォームからのお問い合わせ</h2>
      <p class="contact-lead">
        下記のメールフォームに必要事項をご入力いただき、「確認」ボタンをクリックしてください。
        なお、お問い合わせいただきました内容は、ご希望の項目に関する弊社からのご連絡に利用させていただきます。
      </p>
      <?php while(have_posts()): the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
