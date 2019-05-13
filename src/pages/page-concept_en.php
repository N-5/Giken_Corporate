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
          <div class="movie-films-list__thumbnail" id="<?php the_field('movie-id'); ?>">
            <img src="<?php the_field('movie-thumbnail'); ?>" alt="thumbnail" class="thumbnail">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(function() {
    $('.movie-films-list__thumbnail').on('click',function(){
      var movie_thumb = $(this).attr("id");
      $(this).addClass('is-active');
      $(this).children('img').hide();
      $(this).append('<iframe width="492" height="276" src="https://www.youtube.com/embed/' + movie_thumb + '?rel=0&autoplay=1&loop=1&playlist=' + movie_thumb + '" frameborder="0" allowfullscreen></iframe>')
    });
  });
</script>
<?php get_footer(); ?>
