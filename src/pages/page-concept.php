<?php
/*
Template Name: movie
*/
?>
<?php get_header(); ?>

<main id="movie">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">MOVIE<span>ムービー</span></h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/movie/movie-lower.jpg">
      </div>
    </div>
  </section>
  
  <section class="movie-films">
    <div class="l-container">
      <div class="movie-films-list">
        <?php
        $args = array(
          'post_type' => 'movie',
          'posts_per_page' => -1
        );
        $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="movie-films-list__item">
          <div class="movie-films-list__thumbnail">
            <a class="popup-youtube" href="http://www.youtube.com/watch?v=<?php the_field('movie-id'); ?>">
            <img src="<?php the_field('movie-thumbnail'); ?>" alt="thumbnail">
            </a>
          </div>
          <div class="movie-films-list__title"><?php the_title() ?></div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <p>動画が投稿されていません。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script rel='stylesheet' src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
  jQuery(function (){
    jQuery('.popup-youtube').magnificPopup({
      type: 'iframe',
      removalDelay: 150,
      preloader: false
    });
  });
</script>
<?php get_footer(); ?>
