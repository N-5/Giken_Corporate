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
        <div class="movie-films-list__item">
          <div class="movie-films-list__thumbnail" id="T4nOX00HhqA">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/movie/movie-thumbnail_1.jpg" alt="" id="T4nOX00HhqA" class="thumbnail">
          </div>
          <div class="movie-films-list__title">コマーシャル</div>
        </div>

        <div class="movie-films-list__item">
          <div class="movie-films-list__thumbnail" id="T4nOX00HhqA">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/movie/movie-thumbnail_2.jpg" alt="" id="T4nOX00HhqA" class="thumbnail">
          </div>
          <div class="movie-films-list__title">コマーシャル</div>
        </div>

        <div class="movie-films-list__item">
          <div class="movie-films-list__thumbnail" id="T4nOX00HhqA">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/movie/movie-thumbnail_3.jpg" alt="" id="T4nOX00HhqA" class="thumbnail">
          </div>
          <div class="movie-films-list__title">プロモーションムービー ver.1</div>
        </div>

        <div class="movie-films-list__item">
          <div class="movie-films-list__thumbnail" id="T4nOX00HhqA">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/movie/movie-thumbnail_4.jpg" alt="" id="T4nOX00HhqA" class="thumbnail">
          </div>
          <div class="movie-films-list__title">プロモーションムービー ver.2</div>
        </div>

        <div class="movie-films-list__item">
          <div class="movie-films-list__thumbnail" id="T4nOX00HhqA">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/movie/movie-thumbnail_5.jpg" alt="" id="T4nOX00HhqA" class="thumbnail">
          </div>
          <div class="movie-films-list__title">プロモーションムービーver.3</div>
        </div>
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
