<?php

/// enqueue scripts
function theme_files() {
  /// //unpkg.com/@alpinejs/ui@3.10.3-beta.0/dist/cdn.min.js
  wp_enqueue_script('alpine-ui', '//unpkg.com/@alpinejs/ui@3.10.3-beta.0/dist/cdn.min.js', NULL, '1.0', true);
  wp_enqueue_script('alpine-focus', '//unpkg.com/@alpinejs/focus@3.10.3/dist/cdn.min.js', NULL, '1.0', true);
  wp_enqueue_script('alpine-js', '//unpkg.com/alpinejs@3.10.3/dist/cdn.min.js', NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'theme_files');
// end

/// register menu locations  
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
      array(
      'primary-menu' => __( 'Primary Menu' ),
      'footer-one' => __( 'Footer One' ),
      'footer-two' => __( 'Footer Two' ),
      'footer-three' => __( 'Footer Three' ),
      'footer-four' => __( 'Footer Four' ),
      'site-map' => __( 'Site Map' )
      )
    );
  }
/// end

/// add classes to nav li  in nav_menu_css_class- add the classes in array on header.php
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3); 
/// end

/// add classes to nav a  - add the classes in array on header.php
  function add_additional_class_on_a($classes, $item, $args)
  {
      if (isset($args->add_a_class)) {
          $classes['class'] = $args->add_a_class;
      }
      return $classes;
  }
  add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
  /// end

  /// image handling
  function theme_images() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('imageLandscape', 400, 260, true);
    add_image_size('imagePortrait', 480, 650, true);
    add_image_size('imageBanner', 1500, 350, true);
  }
  
  add_action('after_setup_theme', 'theme_images');

/*woo-commerce*/
  add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
  add_theme_support( 'woocommerce' );
}  

/*wc image size and product grid*/
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce', array(
  'thumbnail_image_width' => 150,
  'single_image_width'    => 300,
          'product_grid'          => array(
              'default_rows'    => 3,
              'min_rows'        => 2,
              'max_rows'        => 8,
              'default_columns' => 4,
              'min_columns'     => 2,
              'max_columns'     => 5,
          ),
  ) );
  }
  add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

  /*wc image zoom, lightbox, slider*/
  add_action( 'after_setup_theme', 'yourtheme_setup'); 
function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
// shortcodes
// [woocommerce_cart] – Displays your cart
// [woocommerce_checkout] – Displays the checkout page
// [woocommerce_my_account] – Displays the user account page
  
