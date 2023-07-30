<?php function get_profile_picture() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}

function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

function ideali_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'ideali_widgets_init' );
add_filter( 'postmeta_form_limit', 'meta_limit_increase' );
function meta_limit_increase( $limit ) {
    return 100;
}
function ideali_model_category_menu() {
    register_nav_menu('model-category-menu',__( 'Model Category Menu ' ));
  }
  add_action( 'init', 'ideali_model_category_menu' );

  function ideali_dienstleister_category_menu() {
    register_nav_menu('dienstleister-category-menu',__( 'Dienstleister Category Menu ' ));
  }
  add_action( 'init', 'ideali_dienstleister_category_menu' );

  function ideali_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu ' ));
  }
  add_action( 'init', 'ideali_header_menu' );

  function ideali_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'ideali_add_excerpt_support_for_pages' );
?>