<?php
function load_stylesheet()
{
    // wp_register_style('style', );
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');
function add_supports()
{
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
}
add_action('after_setup_theme', 'add_supports');
register_nav_menus (
    array(
        'top-menu' => __('Top Menu Location', 'site-theme'),
        'main-menu' => __('Main Menu Location', 'site-theme'),
        'footer-menu' => __('Footer Menu Location', 'site-theme'),
    )
);
add_image_size ('smallest', 75, 75, true);
function codex_widgets_init() {
    register_sidebar( array(
      'name' => __( 'Main Sidebar', 'wpb' ),
      'id' => 'sidebar-1',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'wpb' ),
        'id' => 'blog-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      ) );
  }
  add_action( 'widgets_init', 'codex_widgets_init' );

  function my_post_type(){
      $args=array(
          'labels'=>array(
              'name' => 'Products',
              'singular_name' => 'Product'
          ),
          'public'=>true,
          'has_archieve'=>true,
          'menu_icon'=>'dashicons-images-alt2',
          'supports'=>array('title' , 'editor' , 'thumbnail', 'custom-fields' , 'categories'),

      );
    register_post_type('products' , $args);
    
  }
  add_action( 'init' , 'my_post_type' );


  function my_taxonomy()
  {
    $args=array(
        'labels'=>array(
            'name' => 'Brands',
            'singular_name' => 'Brand'
        ),
        'public'=>true,
        'hierrarcical'=>false,

    );
    register_taxonomy( 'brands' , array('products'), $args);
  }
  add_action( 'init' , 'my_taxonomy' );