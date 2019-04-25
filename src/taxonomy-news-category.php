<?php get_header(); ?>

<main id="news">  
  <section class="page-title">
    <div class="page-title__inner">
      <h2 class="page__heading">NEWS<span>ニュース</span></h2>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/news/news-lower.jpg">
      </div>
    </div>
  </section>
  
  <section class="page-navigation">
    <div class="l-container">
      <div class="page-navigation-list">
        <div class="page-navigation-list__item"><a href="<?php echo home_url(); ?>/news/"><span>ALL</span></a></div>
        <div class="page-navigation-list__item"><a href="<?php echo home_url(); ?>/news/news-category/event/"><span>EVENT</span></a></div>
        <div class="page-navigation-list__item"><a href="<?php echo home_url(); ?>/news/news-category/topics/"><span>TOPICS</span></a></div>
        <div class="page-navigation-list__item"><a href="<?php echo home_url(); ?>/news/news-category/recruit/"><span>RECRUIT</span></a></div>
      </div>
    </div>
  </section>

  <section class="news-archive">
    <div class="l-container__small">
      <div class="index-news-list">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="index-news-list__item">
          <a href="<?php the_permalink() ?>">
            <div class="detail">
              <time class="time"><?php the_time('Y.m.d') ?></time>
              <div class="categogy">
                <?php $custom_post_tag = 'news-category';
                 $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
                 if(!empty($custom_post_tag_terms)){
                   if(!is_wp_error( $custom_post_tag_terms )){
                     foreach($custom_post_tag_terms as $term){
                       $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                       $tag_term_name = $term->name;
                       echo $tag_term_name;
                     }
                   }
                 }
                ?>
              </div>
            </div>
            <div class="title"><?php the_title() ?></div>
          </a>
        </article>
       <?php endwhile; ?>
       <?php endif; ?>
      </div>
      <div class="c-pager">
        <?php global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
          $paginate_format = '';
          $paginate_base = add_query_arg('paged','%#%');
        }
        else{
          $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/','paged');;
          $paginate_base .= '%_%';
        }
        echo paginate_links(array(
          'base' => $paginate_base,
          'format' => $paginate_format,
          'total' => $wp_query->max_num_pages,
          'mid_size' => 4,
          'current' => ($paged ? $paged : 1),
          'prev_text' => 'NEXT',
          'next_text' => 'PREV',
        )); ?>
      </div>
    </div>
  </section>
  </main>
<?php get_footer(); ?>
