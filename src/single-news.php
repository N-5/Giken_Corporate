<?php get_header(); ?>
<main id="news">
  <section class="news-single">
    <article>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <header>
        <div class="l-container__small">
          <div class="single-news__function">
            <div class="single-news__time"><time><?php the_date("Y.n.j"); ?></time></div>
            <div class="single-news-category">
              <?php $custom_post_tag = 'news-category';
              $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
              if(!empty($custom_post_tag_terms)){
                if(!is_wp_error( $custom_post_tag_terms )){
                  foreach($custom_post_tag_terms as $term){
                    $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                    $tag_term_name = $term->name;
                    echo '<div class="single-news-category__item"><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></div>';
                  }
                }
              }
              ?>
            </div>
          </div>
          <h1 class="single-news__heading"><?php the_title() ?></h1>
        </div>
      </header>
      <div class="postarea">
        <div class="l-container__small">
          <?php the_content() ?>
        </div>
      </div>
      <?php endwhile; ?>
    </article>
    
    <div class="l-container__small">
      <div class="archive-blog__function">
        <div class="archive-blog__pager">
          <div class="paging">
            <div class="paging-prev">
              <?php $next_post = get_next_post();  
              if (!empty( $next_post )):  
              echo '<a href="',get_permalink( $next_post->ID ),'"><span class="arrow-left"></span></a>';  
              endif; ?>
            </div>
            <div class="paging-next">
              <?php $prev_poxt = get_previous_post();  
              if (!empty( $prev_poxt  )):  
              echo '<a href="',get_permalink( $prev_poxt->ID ),'"><span class="arrow-right"></span></a>';  
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
