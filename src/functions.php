<?php

//remove Emojis
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//remove
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// remove emoji
function disable_emoji()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emoji');

// include CSS, JS
if (!is_admin()) {
  function register_style()
  {
    wp_register_style('style', get_stylesheet_uri());
    wp_register_style('all', get_stylesheet_directory_uri().'/css/all.css', array(), '');
  }

  function add_stylesheet()
  {
    register_style();
    wp_enqueue_style('style');
    wp_enqueue_style('all');
  }

  function register_script()
  {
    wp_register_script('main', get_stylesheet_directory_uri().'/js/main.js', array(), '', true);
  }

  function add_script()
  {
    register_script();
    wp_enqueue_script('main');
  }

  add_action('wp_print_styles', 'add_stylesheet');
  add_action('wp_print_scripts', 'add_script');
}

// Hide useless admin menu
function remove_admin_menu() {
  remove_menu_page('edit.php');
  remove_menu_page('edit-comments.php');
  //  remove_menu_page('themes.php');
}
add_action('admin_menu', 'remove_admin_menu');

// title
function theme_slug_setup() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_slug_setup');
function title_separator($sep) {
  $sep = '|';
  return $sep;
}
add_filter('document_title_separator', 'title_separator');

//eyecatch img
add_theme_support('post-thumbnails');
  set_post_thumbnail_size(264, 184 );

//custom img size
if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'custom_small', 300, 180, true );
  add_image_size( 'custom_medium', 600, 360, true );
}

// Hide admin bar
add_filter( 'show_admin_bar', '__return_false' );

//pager
function  pageNavigation () {
  global $wp_rewrite;
  global $wp_query;
  global $paged;
  $paginate_base = get_pagenum_link(1);
  if (strpos($paginate_base, '?') || !$wp_rewrite -> using_permalinks()) {
    $paginate_format = '';
    $paginate_base = add_query_arg ('page', '%#%');
  } else {
    $paginate_format = (substr($paginate_base, - 1, 1) == '/' ? '' : '/') .
      untrailingslashit('?page=%#%', 'paged' );
    $paginate_base .=  '%_%';
  }
  $result = paginate_links (array (
    'base'     => $paginate_base,
    'format'   => $paginate_format,
    'total'    => $wp_query -> max_num_pages,
    'mid_size' => 4,
    'current'  => ($paged ? $paged : 1),
    'prev_text' => 'PREVIOUS',
    'next_text' => 'NEXT',
  ));
  return $result;
}

//custom-post-type
function implement_custom_posts($value='') {
  $news = (object) array(
    "slug" => "news",
    "name" => "ニュース",
    "has_archive" => true,
  );
  $movie = (object) array(
    "slug" => "movie",
    "name" => "ムービー",
    "has_archive" => false,
  );
  $contents_array = [
    $news,
    $movie
  ];
  foreach ($contents_array as $key => $value) {
    add_custom($value);
    implement_custom_posts_category($value);
    implement_custom_posts_category($value);
  }
}

//custom-post-type category
function implement_custom_posts_category($value) {
  $labels = array(
    "name" => _x( $value -> name . "カテゴリ", "" ),
  );
  $args = array(
    "hierarchical"      => true,
    "labels"            => $labels,
    "show_ui"           => true,
    "show_in_rest"      => true,
    "show_admin_column" => true,
    "query_var"         => true,
  );
  register_taxonomy(
    $value -> slug . "-category",
    array( $value -> slug ),
    $args
  );
}

//post type setting
function add_custom($value) {
  register_post_type($value -> slug, array(
    'label' => $value -> name,
    'menu_position' => 5,
    'hierarchical' => true,
    'public' => true,
    'supports' => array(
      'title',
      'editor',
      'thumbnail'//アイキャッチ画像
    ),
    'has_archive' => $value -> has_archive,
    'rewrite' => array(
      'slug' => $value -> slug,
      'with_front' => false
    )
  ));
}

add_action( "init", "implement_custom_posts", 0 );

// wp_titleの半角除去
function my_title_fix($title, $sep, $seplocation){
  if(!$sep || $sep == "｜"){
    $title = str_replace(' '.$sep.' ', $sep, $title);
  }
  return $title;
}
add_filter('wp_title', 'my_title_fix', 10, 3);

//body add page-name slug
function pagename_class($classes = ''){
  if (is_page()) {
   $page = get_post();
   $classes[] = $page->post_name;
  }
  return $classes;
}
add_filter('body_class', 'pagename_class');


function is_parent_slug() {
  global $post;
  if ( is_page() && $post->post_parent > 0 ) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

function is_tree( $pid ) {
  global $post;
  if ( is_page( $pid ) )
    return true;
  $anc = get_post_ancestors( $post->ID );
  foreach ( $anc as $ancestor ) {
    if( is_page() && $ancestor == $pid ) {
      return true;
    }
  }
  return false;
}
