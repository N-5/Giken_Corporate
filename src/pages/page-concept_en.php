<?php
/*
Template Name: english-movie
*/
?>
<?php get_header(); ?>

<main id="movie">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">MOVIE</h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/movie/movie-lower.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="movie-films">
    <div class="l-container">
      <div class="movie-films-list" data-inview>
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
          <div class="movie-films-list__title"><?php the_field('movie-english'); ?></div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <p>No videos.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
