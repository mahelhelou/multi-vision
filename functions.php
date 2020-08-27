<?php // Functions file for Multivision website

add_action( 'wp_enqueue_scripts', 'multivision_enqueue' );

function multivision_enqueue() {

  // load fonts
  wp_enqueue_style( 'changa-font', '//fonts.googleapis.com/css2?family=Changa:wght@300;400;700&display=swap' );

  // load css files
  wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), FALSE );
  wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/css/bootstrap-rtl.min.css', array(), FALSE );
  wp_enqueue_style( 'fillterstyle-css', get_template_directory_uri() . '/css/fillterstyle.css', array(), FALSE );
  wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/css/swiper.min.css', array(), FALSE );
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css', array(), FALSE );
  wp_enqueue_style( 'animate-css', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css' );
  wp_enqueue_style( 'ekko-lightbox-css', get_template_directory_uri() . '/css/ekko-lightbox.css', array(), FALSE );
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/style.css', array(), FALSE );

  // load js files
  // wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), FALSE, TRUE );
  wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing-1.3.min.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'lighbox-js', get_template_directory_uri() . '/js/ekko-lightbox.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'holder-js', get_template_directory_uri() . '/js/holder.min.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'scrollspy-js', get_template_directory_uri() . '/js/scrollspy.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/js/slider.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'wowjava-js', get_template_directory_uri() . '/js/wowjava.js', array('jquery'), FALSE, TRUE );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), FALSE, TRUE );
}


add_action( 'init', 'multivision_post_types' );

function multivision_post_types() {
  // Apps & Web
  register_post_type( 'app', array(
    'rewrite'   => array( 'slug' => 'apps' ),
  'supports'  => array( 'title' ),
  'has_archive' => true,
  'public'  => true,
  'labels'  => array(
     'name' => __( 'Apps' ),
     'add_new_item'   => __( 'Add New App' ),
     'edit_item'      => __( 'Edit App' ),
     'all_items'      => __( 'All Apps' ),
     'singular_name'  => __( 'App' )
  ),
  'menu_icon' => 'dashicons-smartphone'
  ) );

  // Partners
  register_post_type( 'partner', array(
    'supports'  => array( 'title' ), // for custom fields
    'public'  => true,
    'labels'  => array(
      'name' => __( 'Partners' ),
      'add_new_item'   => __( 'Add New Partner' ),
      'edit_item'      => __( 'Edit Partner' ),
      'all_items'      => __( 'All Partners' ),
      'singular_name'  => __( 'Partner' )
  ),
  'menu_icon' => 'dashicons-image-filter'
  ) );

  // Team
  register_post_type('team', array(
    'supports' => array('title'),
    'public' => true,
    'labels' => array(
        'name' => 'Team',
        'singular_name' => 'Team',
        'add_new_item' => 'Add New Member',
        'edit_item' => 'Edit Member',
        'all_items' => 'All Team Members'
       ),
       'menu_icon' => 'dashicons-buddicons-buddypress-logo'
    ));

}