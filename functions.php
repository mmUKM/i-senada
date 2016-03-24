<?php
/**
 * @package ukmtheme
 * @subpackage ukm-i-senada
 * @since 1.0
 */

// Register Theme Features
function ukmtheme_theme_features()  {

  // Add theme support for Automatic Feed Links
  add_theme_support( 'automatic-feed-links' );

  // Add theme support for Post Formats
  add_theme_support( 'post-formats', array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

  // Add theme support for Featured Images
  add_theme_support( 'post-thumbnails' );

   // Set custom thumbnail dimensions
  set_post_thumbnail_size( 150, 150, true );

  // Add theme support for document Title tag
  add_theme_support( 'title-tag' );

  // Add theme support for Translation
  load_theme_textdomain( 'ukmtheme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ukmtheme_theme_features' );
  
// Register Sidebars
function ukmtheme_sidebars() {

  $args = array(
    'id'            => 'primary',
    'class'         => 'primary',
    'name'          => __( 'Primary', 'ukmtheme' ),
    'description'   => __( 'Primary sidebar', 'ukmtheme' ),
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
    'before_widget' => '<div class="">',
    'after_widget'  => '</div>',
  );
  register_sidebar( $args );

  $args = array(
    'id'            => 'secondary',
    'class'         => 'secondary',
    'name'          => __( 'Secondary', 'ukmtheme' ),
    'description'   => __( 'Secondary sidebar', 'ukmtheme' ),
    'before_title'  => '<h3>',
    'after_title'   => '<h3>',
    'before_widget' => '<div class="">',
    'after_widget'  => '</div>',
  );
  register_sidebar( $args );
}
add_action( 'widgets_init', 'ukmtheme_sidebars' );